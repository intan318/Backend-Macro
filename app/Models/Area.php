<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = "table_area";
    protected $guarded = ['id'];

    public function materialArea()
    {
        return $this->belongsTo('App\Models\MaterialArea', 'material_area_id');    
    }
}
