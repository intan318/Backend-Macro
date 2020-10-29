<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'material' => $material
            // 'price' => 
        ]);
    }

    //semua material dan harga
    public function showAllMaterial()
    {
        $category = Category::with('material')
            ->get();

        // $dummy = ['a1' => ['a11' => "kopi"], 'a2' => ['susu']];
        // return $dummy;


        // $material = $category[0];
        // return $material;


        // $material = MaterialArea::join('table_material', 'table_material.id', 'table_material_area.material_id')
        //     ->select('table_material.*', 'table_material_area.price')
        //     ->where('table_material.category_id')
        //     ->get();

        return response()->json($category);
    }

    public function showDefaultMaterial()
    {
        $material = 
        [
            [
                        "id"=> 1,
                        "material_code"=> "SM0001",
                        "material_name"=> "Semen",
                        "material_brand"=> "Tiga Roda",
                        "material_grade"=> "A",
                        "material_size"=> 50,
                        "material_unit"=> "kg",
                        "seller_id"=> null,
                        "category_id"=> 1,
                        "created_at"=> "2020-10-26T11:01:47.000000Z",
                        "updated_at"=> "2020-10-26T11:01:47.000000Z",
                        "price"=> 50000
            ],
            [
                        "id"=> 2,
                        "material_code"=> "PS0001",
                        "material_name"=> "Pasir Beton",
                        "material_brand"=> "",
                        "material_grade"=> "A",
                        "material_size"=> 1,
                        "material_unit"=> "m3",
                        "seller_id"=> null,
                        "category_id"=> 2,
                        "created_at"=> "2020-10-26T11:01:56.000000Z",
                        "updated_at"=> "2020-10-26T11:01:56.000000Z",
                        "price"=> 260000
            ],
            [
                        "id"=>3,
                        "material_code"=> "BT0001",
                        "material_name"=> "Bata Merah",
                        "material_brand"=> "",
                        "material_grade"=> "A",
                        "material_size"=> 0.00121,
                        "material_unit"=> "m3",
                        "seller_id"=> null,
                        "category_id"=> 3,
                        "created_at"=> "2020-10-26T11:02:05.000000Z",
                        "updated_at"=> "2020-10-26T11:02:05.000000Z",
                        "price"=> 2200
            ],
            [
                        "id"=> 4,
                        "material_code"=> "BP0001",
                        "material_name"=> "Besi Pokok 10mm",
                        "material_brand"=> "Krakatau Steel",
                        "material_grade"=> "A",
                        "material_size"=> 1,
                        "material_unit"=> "batang",
                        "seller_id"=> null,
                        "category_id"=> 4,
                        "created_at"=> "2020-10-26T11:02:11.000000Z",
                        "updated_at"=> "2020-10-26T11:02:11.000000Z",
                        "price"=> 85000
            ],
            [
                        "id"=> 5,
                        "material_code"=> "BG0001",
                        "material_name"=> "Besi Begel 8mm",
                        "material_brand"=> "Krakatau Steel",
                        "material_grade"=> "A",
                        "material_size"=> 1,
                        "material_unit"=> "batang",
                        "seller_id"=> null,
                        "category_id"=> 5,
                        "created_at"=> "2020-10-26T11:02:29.000000Z",
                        "updated_at"=> "2020-10-26T11:02:29.000000Z",
                        "price"=> 50000
            ],
            [
                        "id"=> 6,
                        "material_code"=> "BS0001",
                        "material_name"=> "Batu Split 1/2",
                        "material_brand"=> "",
                        "material_grade"=> "A",
                        "material_size"=> 1,
                        "material_unit"=> "m3",
                        "seller_id"=> null,
                        "category_id"=> 1,
                        "created_at"=> "2020-10-26T11:02:36.000000Z",
                        "updated_at"=> "2020-10-26T11:02:36.000000Z",
                        "price"=> 200000
            ],
            [
                        "id"=> 7,
                        "material_code"=> "BKS0001",
                        "material_name"=> "Bekisting",
                        "material_brand"=> "",
                        "material_grade"=> "A",
                        "material_size"=> 1,
                        "material_unit"=> "m2",
                        "seller_id"=> null,
                        "category_id"=> 7,
                        "created_at"=> "2020-10-26T11:02:55.000000Z",
                        "updated_at"=> "2020-10-26T11:02:55.000000Z",
                        "price"=> 100000
            ],
                    
        ];

        return response()->json([
            'material' => $material
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

        if ($request->price) {
            $materialarea->price = $request->price;
        }

        $materialarea->save();

        return response()->json([
            'message' => "Edited",
            'updatematerialarea' => $materialarea
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
