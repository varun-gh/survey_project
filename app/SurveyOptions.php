<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurveyOptions extends Model
{
    //
    use SoftDeletes;
    protected $softDelete = true;
    protected $guarded = []; 
}
