<?php

namespace Tests\Unit;

use App\UrlParameterReplacer;
use PHPUnit\Framework\TestCase;

class UrlParameterReplacerTest extends TestCase
{
    public function testGetUrlReturnsProvidedUrl()
    {
        $url = 'https://example.com';
        $replacer = new UrlParameterReplacer($url);

        $result = $replacer->getUrl();

        $this->assertSame($url, $result);
    }

    public function testGetParametersReturnsEmptyArrayByDefault()
    {
        $url = 'https://example.com';
        $replacer = new UrlParameterReplacer($url);

        $result = $replacer->getParameters();

        $this->assertEmpty($result);
    }
}
