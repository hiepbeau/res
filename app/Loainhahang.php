<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loainhahang extends Model
{
     protected $table = 'loainhahang';

     public function nhahang(){
       return $this->hasMany('App\Nhahang','idloainhahang','id');
     }
}
