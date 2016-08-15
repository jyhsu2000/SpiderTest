<?php

namespace App\Http\Controllers;

use App\Services\HttpStatusCodeService;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;

class TestController extends Controller
{
    /**
     * @var HttpStatusCodeService
     */
    private $codeService;

    /**
     * TestController constructor.
     * @param HttpStatusCodeService $codeService
     */
    public function __construct(HttpStatusCodeService $codeService)
    {
        $this->codeService = $codeService;
    }

    public function getSimpleLink($code = null)
    {
        if (!$code) {
            $httpStatusCodes = $this->codeService->httpStatusCode;

            return view('test.simple-link', compact('httpStatusCodes'));
        }
        if (in_array($code, array_keys($this->codeService->httpStatusCode))) {
            $message = $this->codeService->httpStatusCode[$code];
        } else {
            $code = 500;
            $message = 'Unknown Status Code';
        }

        return response(view('test.response', compact(['code', 'message'])), $code);
    }
}
