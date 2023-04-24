<?php

namespace App\DTO;

use App\Core\CoreDTO;

class CreateFlatDTO extends CoreDTO
{
    public function __construct(
        public string $flatNumber,
        public string $flatType,
        public string $status
    ) {
    }

    public function toArray()
    {
    }
}
