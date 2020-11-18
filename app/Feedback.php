<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=['comment','tutor_id','subject_id','userparent_id','date'];

    public function tutor()
  {
      return $this->belongsTo('App\Tutor');
  }
  public function subject()
  {
      return $this->belongsTo('App\Subject');
  }
  public function userparent()
  {
      return $this->belongsTo('App\Userparent');
  }
}
