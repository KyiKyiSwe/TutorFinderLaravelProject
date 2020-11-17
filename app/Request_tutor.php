<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request_tutor extends Model
{
    protected $fillable=['requestdate','note','status','userparent_id','tutor_id'];

    public function tutor()
  {
      return $this->belongsTo('App\Tutor');
  }

   public function userparent()
  {
      return $this->belongsTo('App\Userparent');
  }
  public function level()
  {
      return $this->hasOne('App\Request_tutor');
  }
   public function grades()
  {
      return $this->hasMany('App\Grade');
  }
}
