<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    //
    use SoftDeletes;
    protected $softDelete = true;
    protected $table="portfolio";
}
