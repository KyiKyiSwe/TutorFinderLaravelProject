<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable=['name'];

     public function grades()
  {
      return $this->hasMany('App\Grade');
  }
   public function tutors()
  {
      return $this->hasMany('App\Tutor');
  }
  public function requesttutor()
  {
      return $this->hasOne('App\Level');
  }
  
}
