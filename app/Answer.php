<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  /**
  * find associated user with the answer
  */
  public function user()
    {
        return $this->belongsTo(User::class);
    }

  /**
  * find associated question with the answer
  */
  public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
