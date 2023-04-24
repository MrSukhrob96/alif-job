<?php

namespace App\DTO;

use App\Core\CoreDTO;

class UpdateUserDTO extends CoreDTO
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $phoneNumber,
        public string $email,
        public string $status
    ) {
    }

    public function toArray()
    {
    }
}
