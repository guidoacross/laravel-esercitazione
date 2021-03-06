<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    public $timestamps = false;


    /**
     * The users that belong to the type.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
