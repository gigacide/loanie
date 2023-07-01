<?php


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\ClickController;
use App\Models\Click;
use Illuminate\Routing\Route;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Routing\RouteCollection;
use Illuminate\Container\Container;
use Tests\TestCase;

class ClickControllerTest extends TestCase
{
    protected ClickController $clickController;
    protected Request $request;
    protected $cookie;
    protected $click;

    protected function setUp(): void
    {
        parent::setUp();

        $this->clickController = new ClickController();

        $this->request = Request::create('/track', 'GET', [
            'affiliate_id' => '123',
            'offer_id' => '456',
            'aff_sub' => 'sub1',
            'aff_sub2' => 'sub2',
            'aff_sub3' => 'sub3',
            'aff_sub4' => 'sub4',
            'aff_sub5' => 'sub5',
        ]);

        // Mock the Click model
        $this->click = $this->getMockBuilder(Click::class)
            ->onlyMethods(['save'])
            ->getMock();
    }

    public function testTrackMethodCreatesClickRecordAndSetsCookie()
    {
        $this->click->expects($this->once())
            ->method('save');

        $clickModel = $this->createMock(Click::class);
        $clickModel->expects($this->once())
            ->method('__construct')
            ->willReturn($this->click);

        $this->app->instance(Click::class, $clickModel);

        $response = $this->clickController->track($this->request);

        $this->assertInstanceOf(RedirectResponse::class, $response);

        $this->assertTrue($response->isRedirect());
        $this->assertEquals('/loanieloans?affiliate_id=123&offer_id=456&aff_sub=&aff_sub2=&aff_sub3=&aff_sub4=&aff_sub5=', $response->getTargetUrl());

        $cookies = $response->headers->getCookies();
        $this->assertCount(1, $cookies);
        $this->assertEquals('loanie_tracking', $cookies[0]->getName());
        $this->assertEquals($this->click->id, $cookies[0]->getValue());
        $this->assertEquals(60 * 24 * 60, $cookies[0]->getMinutes());
    }
}
