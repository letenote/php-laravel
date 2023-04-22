<?php

namespace App\Services\impl;

use App\Services\UserService;
use Carbon\Carbon;
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

    function emailAlreadyExist(string $email): bool
    {
        return DB::table('users')
            ->where('email', '=', $email)
            ->exists();
    }

    function register(string $name, string $email, string $password): bool
    {
        $user = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role_id' => 2,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];

        return DB::table('users')->insert($user);
    }

    function getRedirectByEmail(string $email): string
    {
        $getRole = DB::table('users')
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->where('users.email', '=', $email)
            ->select('roles.redirect_to')
            ->get();

        return $getRole[0]->redirect_to;
    }

    function roleCheckByEmail(string $email, string $role): bool
    {
        $getRole = DB::table('users')
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->where('users.email', '=', $email)
            ->select('roles.name')
            ->get();

        return $getRole[0]->name == $role;
    }
}
