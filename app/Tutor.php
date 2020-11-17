<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
     protected $fillable=['photo','phoneno','schoolname','qualification','address','city','level_id','grade_id','user_id'];

     public function grade()
  {
      return $this->hasMany('App\Grade');
  }
  public function level()
  {
      return $this->hasOne('App\Grade');
  }

   public function request_tutor()
  {
      return $this->hasMany('App\request_tutor');
  }
     public function subjects()
  {
      return $this->belongsToMany('App\Subject','sub_tutors')
      				->withPivot('fee','course','hours')
      				// ->withPivot('course')
      				// ->withPivot('hours')
      				->withTimestamps();
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }

}
