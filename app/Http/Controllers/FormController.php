<?php
namespace App\Http\Controllers;

use App\Http\LoanApplication\LoanApplicationHandler;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class FormController extends Controller
{
    protected LoanApplicationHandler $loanApplicationHandler;

    public function __construct(LoanApplicationHandler $loanApplicationHandler)
    {
        $this->loanApplicationHandler = $loanApplicationHandler;
    }

    public function process(Request $request): string
    {
        try {
            $uuid = $this->loanApplicationHandler->generateUuid();

            if ($this->loanApplicationHandler->tryStoreLoanApplication($request, $uuid)) {
                return $this->loanApplicationHandler->handleValidLoanApplication($request->all(), $uuid);
            }
        } catch (Exception) {
            return $this->loanApplicationHandler->handleException();
        } catch (GuzzleException $e) {
            return $this->loanApplicationHandler->handleGuzzleException($e);
        }

        // Default response in case none of the above conditions are met
        return $this->loanApplicationHandler->defaultErrorResponse();
    }

    public function getIpAddress(Request $request): ?string
    {
        return $request->ip();
    }


}


