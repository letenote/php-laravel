<?php

namespace App\Http\Middleware;

use App\Services\UserService;
use Closure;
use Illuminate\Http\Request;

class RoleAdminMiddleware
{
    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $getEmail = $request->session()->get('user');
        $ROLE_NAME = $this->userService->getRoleNameIsAdmin();
        if($this->userService->roleCheckByEmail($getEmail, $ROLE_NAME)){
            return $next($request);
        }else {
            return redirect('/');
        }
    }
}
