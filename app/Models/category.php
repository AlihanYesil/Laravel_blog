<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table='categories';



 public function satir(){
     return $this->hasMany(article::class,'category_id','id')->count();
 }

}
