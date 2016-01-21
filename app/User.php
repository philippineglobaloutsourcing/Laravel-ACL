<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table ='users';

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function active()
    {
        return $this->where('active','');
    }

    public function owns($related)
    {
        return $this->id == $related->user_id;
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function assignRole($role)
    {
        $this->roles()->save(
            Role::whereRole($role)->firstOrFail()
        );
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('role', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }

}
