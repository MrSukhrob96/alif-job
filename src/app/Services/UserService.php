<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;

use App\Core\CoreService;

class UserService extends CoreService
{
    public function __construct(
        protected UserRepositoryInterface $userRepository
    ) {
    }

    /**
     * Method getAllUsers
     */
    public function getAllUsers()
    {
    }

    /**
     * Method getUserById
     */
    public function getUserById()
    {
    }

    /**
     * Method CreateUser
     */
    public function createUser()
    {
    }

    /**
     * Method updateUser
     */
    public function updateUser()
    {
    }

    /**
     * Method deleteUser
     */
    public function deleteUser()
    {
    }
}
