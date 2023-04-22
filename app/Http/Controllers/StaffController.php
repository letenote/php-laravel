<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaffController extends Controller
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

        return response()
            ->view('staff', [
                "title" => "Staff Dashboard",
                "contentHeader" => "Dashboard",
                "fullName" => $getFullName,
                "newMailBoxLength" => 7,
                "lastMailIn" => "38 mins",
                "newReportLength" => 2,
                "lastReportIn" => "1 days",
                "avatar" => "user7-128x128.jpg"
            ]);
    }
}
