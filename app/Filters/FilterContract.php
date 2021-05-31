<?php
namespace App\Filters;

interface FilterContract {
    //una funzione con :void non ritorna values
    public function handle($value): void;
}