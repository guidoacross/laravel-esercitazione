<?php

namespace App\Filters\UserFilters;

use App\Filters\FilterContract;

class Email implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->where('email', $value);
    }
}