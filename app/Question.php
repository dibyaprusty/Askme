<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
     /**
     * path for single question page
     */
    public function path()
    {
        return route('single_question',$this);
    }
}
