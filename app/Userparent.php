<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userparent extends Model
{
    protected $fillable=['photo','phoneno','address','city','user_id'];

     public function feedback()
  {
      return $this->belongsTo('App\Feedback');
  }
   public function request_tutor()
  {
      return $this->belongsTo('App\Request_tutor');
  }

  

  // public function user()
  // {
	 //  return $this->belongsTo('App\User');
  // }
}
