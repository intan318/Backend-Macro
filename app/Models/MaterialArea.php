<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialArea extends Model
{
    protected $table = "table_material_area";
    protected $guarded = ['id'];

    public function material()
    {
        return $this->belongsTo('App\Models\Material', 'material_id');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area', 'area_id');
    }
}
