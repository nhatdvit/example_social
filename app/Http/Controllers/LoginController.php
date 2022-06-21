<?php

namespace App\Http\Controllers;

use App\Services\LineService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /** @var  LineService */
    protected $lineService;

    /**
     * LoginController constructor.
     * @param LineService $lineService
     */
    public function __construct(LineService $lineService)
    {
        $this->lineService = $lineService;
    }

    /**
     * Login Blade
     * @param Request $request;
     * @return View
     */
    public function index(Request $request) 
    {
        $authUrl = $this->lineService->getLoginBaseUrl();

        return view('login', compact('authUrl'));
    }

    /**
     * Handle result which Line API returned.
     * @param Request $request
     * @return void
     */
    public function handleLineCallback(Request $request) 
    {
        $code = $request->input('code', '');
        $response = $this->lineService->getLineToken($code);
        // Get profile from access token.
        $profile = $this->lineService->getLineToken($response['access_token']);
        // Get profile from ID token
        $profile = $this->lineService->verifyIDToken($response['id_token']);
    }
    public function redirectToGoogle()
    {
       return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user(); 
    }
}
