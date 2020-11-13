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
  public function tutor()
  {
      return $this->hasMany('App\Tutor');
  }
}
