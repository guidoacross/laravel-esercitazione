<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    protected $fillable = ['user_id', 'code', 'file', 'line', 'message', 'trace'];
}