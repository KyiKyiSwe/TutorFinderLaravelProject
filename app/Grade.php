<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable=['name','level_id'];

     public function level()
  {
      return $this->belongsTo('App\Grade');
  }
  public function tutors()
  {
      return $this->hasMany('App\Tutor');
  }
  public function requesttutor()
  {
      return $this->hasMany('App\Request_tutor');
  }
}
