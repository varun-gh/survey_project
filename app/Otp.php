<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    //
    protected $fillable = [
        'phone','otp'
    ];

    protected $table = 'otp';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
