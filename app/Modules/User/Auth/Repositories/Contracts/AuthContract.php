<?php

namespace App\Modules\User\Auth\Repositories\Contracts;

interface AuthContract
{
    /**
     * Login user.
     *
     * @param array $data
     * @return string
     */
    public function login(array $data): string;

    /**
     * Logout user.
     *
     * @return void
     */
    public function logout(): void;

    /**
     * Register user.
     *
     * @param array $data
     * @return string
     */
    public function register(array $data): string;
}
