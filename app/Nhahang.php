<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhahang extends Model
{
     protected $table = 'nhahang';

     public function loainhahang(){
       return $this->belongsTo('App\Loainhahang','idloainhahang','id');
     }
}
