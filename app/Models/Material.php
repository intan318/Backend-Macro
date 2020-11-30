<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "table_material";
    protected $casts = [
        'material_size' => 'float',
    ];
    protected $guarded = ['id'];

    protected $with = ['materialArea'];

    public function materialArea()
    {
        return $this->hasMany('App\Models\MaterialArea', 'material_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }


}
