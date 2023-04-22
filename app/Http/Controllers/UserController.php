<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
            $getRedirect = $this->userService->getRedirectByEmail($getEmail);
            return redirect($getRedirect);
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

    public function register(): Response
    {
        return response()
            ->view('register', [
                "title" => "Register Page"
            ]);
    }

    public function doRegister(Request $request): Response | RedirectResponse
    {
        $getFullName = $request->input('full_name');
        $getEmail = $request->input('email');
        $getPassword = $request->input('password');
        $getRetypePassword = $request->input('retype_password');

        // validate input
        if(empty($getFullName) || empty($getEmail) || empty($getPassword) || empty($getRetypePassword)){
            return response()
                ->view('register', [
                    "title" => "Register Page",
                    "error" => "All form is required"
                ]);
        };

        // make sure $getPassword === $getRetypePassword
        if($getPassword !== $getRetypePassword){
            return response()
                ->view('register', [
                    "title" => "Register Page",
                    "error" => "Please make sure password same with retype password"
                ]);
        };

        // check exist email in db
        if($this->userService->emailAlreadyExist($getEmail)){
            return response()
                ->view('register', [
                    "title" => "Register Page",
                    "error" => "Email Already exist, please input another email !!"
                ]);
        }

        // insert new user
        if($this->userService->register($getFullName, $getEmail, $getPassword)){
            return response()
                ->view('register', [
                    "title" => "Register Page",
                    "success" => "User is created."
                ]);
        }
    }
}
