<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhahang extends Model
{
     protected $table = 'donhang';

     public function nhahang()
     {
     	return $this->belongsTo('App\Nhahang','idnhahang','id');
     }

     public function user()
     {
     	return $this->belongsTo('App\User','iduser','id');
     }
}
