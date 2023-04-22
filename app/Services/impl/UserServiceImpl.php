<?php

namespace App\Services\impl;

use App\Services\UserService;
use Illuminate\Support\Facades\DB;

class UserServiceImpl implements UserService
{
    public function login(string $email, string $password): bool
    {
        return DB::table('users')
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->exists();
    }
}
