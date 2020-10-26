<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "table_material";
    protected $guarded = ['id'];

    public function materialArea()
    {
        return $this->belongsTo('App\Models\MaterialArea', 'material_area_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }


}
