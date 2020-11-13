<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable=['name'];

     public function grade()
  {
      return $this->hasMany('App\Grade');
  }
  
}
