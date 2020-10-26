<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\MaterialArea;

class MaterialAreaController extends Controller
{

    //tinggal tambahin parameter category sama location yg diselect (dari Eki) 
    public function getMaterial(Request $chosenCategory, $chosenArea)
    {
        $material = MaterialArea::join('table_material', 'table_material.id', 'table_material_area.material_id')
        ->select('table_material.*')
        ->where('table_material.category_id', $chosenCategory)
        ->where('table_material_area.id', $chosenArea)
        ->get();
       
        // $material = Material::with('materialArea', 'category')
        // ->select('table_material.*')
        // ->where('table_material.area_id')
        // ->get();
       
        return response()->json([
            'material' => $material
        ]);
    }

    //bener2 semua material
    public function showMaterial()
    {
        $material = Material::all();

        return response()->json([
            'material'=> $material
        ]);
    }


}
