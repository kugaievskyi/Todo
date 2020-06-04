<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'id','name', 'userId',
    ];

    public User(){
        return this->hasOne('App\User','userId');
    }
}
