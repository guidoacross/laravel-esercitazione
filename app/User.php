<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Events\UserCreated;
use App\Filters\FilterBuilder;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{

    use Notifiable;
    /**
     * ATTRIBUTES
     * 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'date_of_birth', 'age', 'email', 'password'
    ];
    
    public $timestamps = false;

    /**
     * EVENTS.
     *
     */

    protected $dispatchesEvents = [
        'created'=> UserCreated::class
    ];
    
    /**
     * RELATIONSHIPS.
     * 
     * The types that belong to the user.
     */
    public function types()
    {
        return $this->belongsToMany('App\Type');
    } 

    /**
     * JWT.
     * 
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * SCOPES
     */

    // fist filter OOP structure
    public function scopeFilterBy($query, $filters) {
        $namespace = 'App\Filters\UserFilters';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }


}
