<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Echo_;

class UserController extends Controller
{
    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(): Response
    {
        return response()
            ->view('login', [
                "title" => "Login Page"
            ]);
    }

    public function doLogin(Request $request): Response | RedirectResponse
    {
        $getEmail = $request->input('email');
        $getPassword = $request->input('password');

        // validate input
        if(empty($getEmail) || empty($getPassword)){
            return response()
                ->view('login', [
                    "title" => "Login Page",
                    "error" => "Email or Password is required"
                ]);
        };

        // check user in db
        if($this->userService->login($getEmail,$getPassword)){
            $request->session()->put("user", $getEmail);
            return redirect('/');
        }else{
            return response()
                ->view('login', [
                    "title" => "Login Page",
                    "error" => "Email not exist, please register first !!"
                ]);
        }
    }

    public function doLogout(Request $request): RedirectResponse
    {
        $request->session()->forget("user");
        return redirect('/');
    }
}
