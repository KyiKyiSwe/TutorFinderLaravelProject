<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=['comment','sub_tutor_id','userparent_id','date'];

     public function userparent()
  {
      return $this->belongsTo('App\Userparent');
  }
  public function subject()
  {
      return $this->belongsTo('App\Subject','sub_tutors');
  }
}
