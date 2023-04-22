<?php

namespace App\Services;

interface UserService
{
    function login(string $email, string $password): bool;
    function emailAlreadyExist(string $email): bool;
    function register(string $name, string $email, string $password): bool;
    function getRedirectByEmail(string $email): string;
    function roleCheckByEmail(string $email, string $role): bool;
}
