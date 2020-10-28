<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\MaterialArea;

use function PHPSTORM_META\map;

class MaterialAreaController extends Controller
{

    //tinggal tambahin parameter category sama location yg diselect (dari Eki) 
    public function getMaterial(Request $request)
    {
        $chosenCategory = $request->category;
        $chosenArea = $request->area;
        $material = MaterialArea::join('table_material', 'table_material.id', 'table_material_area.material_id')
        // ->select('table_material.*')
        ->select('table_material.*', 'table_material_area.price')
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
        // $material=Material::all()
        // ->select('table_material.*', 'table_material_area.price')
        // ->get();

        return response()->json([
            'material'=> $material
            // 'price' => 
        ]);
    }

   //semua material dan harga
    public function showAllMaterial()
    {
        $material = MaterialArea::join('table_material', 'table_material.id', 'table_material_area.material_id')
        ->select('table_material.*', 'table_material_area.price')
        ->get();

        return response()->json([
            'material'=>$material
        ]);
    }


    public function storeMaterialArea(Request $request)
    {
        $newmaterialarea = validator([
            'material_id' => 'required',
            'area_id' => 'required',
            'price' => 'required'
        ]);

        if ($newmaterialarea->fails()) {
            return response()->json($newmaterialarea->errors()->all(), 401);
        }

        $materialarea = new MaterialArea;
        $materialarea->material_id = $request->material_id;
        $materialarea->area_id = $request->area_id;
        $materialarea->price = $request->price;
        $materialarea->save();

        return response()->json([
            'message' => 'Material Area added',
            'materialarea' => $materialarea
        ]);
    }

    public function updateMaterialArea(Request $request, $id)
    {
        
        $materialarea = MaterialArea::find($id);

        if($request->price){
            $materialarea->price = $request->price;
        }

        $materialarea->save();

        return response()->json([
            'message' => "Edited",
            'updatematerialarea'=> $materialarea
        ]);
    }

    // public function deleteMaterial($id)
    // {
    //     $materialarea = MaterialArea::find($id);

    //     if ($materialarea){
    //         $materialarea->delete();
    //     }

    //     Material::where('materia_area_id', $id)->first()->delete();

    //     return response()->json([
    //         'success' => "Material successfully deleted!"
    //     ]);
    // }
}
