<?php

namespace App\Models;

use Articles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table ='Articles';
    use HasFactory;


    public function get()
    {
        return $this->hasOne(category::class,'id','category_id');
    }

}
