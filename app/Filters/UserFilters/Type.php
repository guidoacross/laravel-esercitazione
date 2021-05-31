<?php

namespace App\Filters\UserFilters;

use App\Filters\FilterContract;

class Type implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->whereHas('types', function ($q) use ($value) {
            return $q->where('name', $value);
        });
    }
}