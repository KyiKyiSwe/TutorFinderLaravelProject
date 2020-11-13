<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=['name'];

    public function tutors()
  {
      return $this->belongsToMany('App\Tutor','sub_tutors')
      				->withPivot('fee'),
      				->withPivot('course'),
      				->withPivot('hours')
      				->withTimestamps();
  }
}