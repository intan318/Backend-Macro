<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "table_category";
    protected $guarded = ['id'];

    // public function material(){
    //     return $this->hasMany('App\Material', 'material_id');
    // }
}
