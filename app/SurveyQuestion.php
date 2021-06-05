<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurveyQuestion extends Model
{
    //
    protected $softDelete = true;
    use SoftDeletes;
    protected $guarded = [];


    public function getOptions(){
        return $this->hasMany(SurveyOptions::class,'ques_id','id');
        
    }

    public function getSurvey(){
        return $this->hasOne(Survey::class,'id','survey_id');
       
        
    }
    public function getCategory(){
        return $this->hasOne(Category::class,'id','category_id');
        
    }

    public function scopeWithAndWhereHas($query, $relation, $constraint){
        return $query->whereHas($relation, $constraint)
                     ->with([$relation => $constraint]);
    }
}
