<?php

namespace App\Services;

use App\Core\CoreService;
use App\Repositories\Interfaces\FlatRepositoryInterface;
use App\Services\Interfaces\FlatServiceInterface;

class FlatService extends CoreService implements FlatServiceInterface
{
    public function __construct(
        protected FlatRepositoryInterface $userRepository
    ) {
    }

    /**
     * Method getAllUsers
     */
    public function getAllFlats()
    {
    }

    /**
     * Method getUserById
     */
    public function getFlatById()
    {
    }

    /**
     * Method CreateUser
     */
    public function createFlat()
    {
    }

    /**
     * Method updateUser
     */
    public function updateFlat()
    {
    }

    /**
     * Method deleteUser
     */
    public function deleteFlat()
    {
    }
}
