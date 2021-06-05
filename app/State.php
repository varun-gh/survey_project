<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class State extends Model
{    
    protected $fillable = ['slug','name'];
    protected $table='states';
}
