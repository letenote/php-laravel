<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function home(Request $request): Response
    {
        $getEmail = $request->session()->get('user');
        $getFullName = $this->userService->getFullNameByEmail($getEmail);
        $getRedirect = $this->userService->getRedirectByEmail($getEmail);

        return response()
            ->view('admin', [
                "title" => "Administrator Dashboard",
                "contentHeader" => "Dashboard",
                "fullName" => $getFullName,
                "newMailBoxLength" => 30,
                "lastMailIn" => "8 mins",
                "newReportLength" => 8,
                "lastReportIn" => "12 days",
                "avatar" => "user1-128x128.jpg",
                "redirect_to" => $getRedirect
            ]);
    }

    public function mailbox(Request $request): Response
    {
        $getEmail = $request->session()->get('user');
        $getFullName = $this->userService->getFullNameByEmail($getEmail);
        $getRedirect = $this->userService->getRedirectByEmail($getEmail);

        return response()
            ->view('components.dashboard.mailbox', [
                "title" => "Staff Mailbox",
                "contentHeader" => "Mailbox",
                "fullName" => $getFullName,
                "newMailBoxLength" => 30,
                "lastMailIn" => "38 mins",
                "newReportLength" => 8,
                "lastReportIn" => "1 days",
                "avatar" => "user1-128x128.jpg",
                "redirect_to" => $getRedirect
            ]);
    }
}
