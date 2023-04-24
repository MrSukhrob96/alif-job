<?php

namespace App\DTO;

use App\Core\CoreDTO;

class UpdateFlatDTO extends CoreDTO
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
