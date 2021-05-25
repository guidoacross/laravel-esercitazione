<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\UserCreated;

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
     * Assigned Events.
     *
     */

    protected $dispatchesEvents = [
        'created'=> UserCreated::class
    ];

    /**
     * The types that belong to the user.
     */
    public function types()
    {
        return $this->belongsToMany('App\Type');
    }
    


}
