<?php

namespace App\Http\Controllers;

use App\Services\HttpStatusCodeService;
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

        return $this->makeResponsePage($code);
    }

    public function getRedirect($code = null, $times = 0, $targetCode = 200)
    {
        if (!$code) {
            $redirectCodes = $this->codeService->redirectCodes;

            return view('test.redirect.index', compact('redirectCodes'));
        }

        if ($times > 0) {
            if (!$this->codeService->isRedirect($code)) {
                $code = 302;
            }

            return redirect(route('test.redirect', [$code, $times - 1, $targetCode]), $code);
        }

        return $this->makeResponsePage($targetCode);
    }

    public function getRedirectKeep($times = 0)
    {
        return redirect()->route('test.redirect.keep', $times + 1);
    }

    public function getRedirectLoop()
    {
        return redirect()->route('test.redirect.loop');
    }

    public function makeResponsePage($code)
    {
        if (in_array($code, array_keys($this->codeService->httpStatusCode))) {
            $message = $this->codeService->httpStatusCode[$code];
        } else {
            $code = 500;
            $message = 'Unknown Status Code';
        }

        return response(view('test.response', compact(['code', 'message'])), $code);
    }
}
