<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'date_of_birth', 'age'
    ];
    public $timestamps = false;

    /**
     * The types that belong to the user.
     */
    public function types()
    {
        return $this->belongsToMany('App\Type');
    }
    


}
