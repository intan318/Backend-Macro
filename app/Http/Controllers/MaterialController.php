<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
     //nambahin material
     public function storeMaterial(Request $request)
     {
        // return $request;
        $newmaterial = validator([
             'material_code' => 'required|string',
             'material_name' => 'required|string',
             'material_brand' => 'required|string',
             'material_grade' => 'required|string',
             'material_size' => 'required',
             'material_unit' => 'required|string',
             'category_id' => 'required'
        ]);
 
         if ($newmaterial->fails()) {
             return response()->json($newmaterial->errors()->all(), 401);
         }

        $material = new Material;
        $material->material_code = $request->material_code;
        $material->material_name = $request->material_name;
        $material->material_brand = $request->material_brand;
        $material->material_grade = $request->material_grade;
        $material->material_size = $request->material_size;
        $material->material_unit = $request->material_unit;
        $material->category_id = $request->category_id;
        $material->save();

        return response()->json([
            'message' => 'Material added',
            'material' => $material
        ]);
     }
}
