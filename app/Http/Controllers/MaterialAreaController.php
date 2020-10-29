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

        $dummy = 
        [
            [
                "id" => 1,
                "category_name" => "Semen",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  1,
                    "material_code" =>  "SM0001",
                    "material_name" =>  "Semen",
                    "material_brand" =>  "Tiga Roda",
                    "material_grade" =>  "A",
                    "material_size" =>  "50",
                    "material_unit" =>  "kg",
                    "seller_id" =>  null,
                    "category_id" =>  1,
                    "created_at" =>  "2020-10-28T12:24:34.000000Z",
                    "updated_at" =>  "2020-10-28T12:24:34.000000Z",
                    "material_area" => [
                        "id" => 1,
                        "material_id" => 1,
                        "area_id" => 1,
                        "price" => 50000,
                        "created_at" => "2020-10-28T13:13:49.000000Z",
                        "updated_at" => "2020-10-28T13:13:49.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ],

            [
                "id" => 2,
                "category_name" => "Pasir",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  2,
                    "material_code" =>  "PS0001",
                    "material_name" =>  "Pasir",
                    "material_brand" =>  "Beton",
                    "material_grade" =>  "A",
                    "material_size" =>  "1",
                    "material_unit" =>  "m3",
                    "seller_id" =>  null,
                    "category_id" =>  2,
                    "created_at" =>  "2020-10-28T12:24:34.000000Z",
                    "updated_at" =>  "2020-10-28T12:24:34.000000Z",
                    "material_area" => [
                        "id" => 2,
                        "material_id" => 2,
                        "area_id" => 1,
                        "price" => 260000,
                        "created_at" => "2020-10-28T13:13:49.000000Z",
                        "updated_at" => "2020-10-28T13:13:49.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ],

            [
                "id" => 3,
                "category_name" => "Bata",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  10,
                    "material_code" =>  "BT0001",
                    "material_name" =>  "Bata",
                    "material_brand" =>  "Merah",
                    "material_grade" =>  "A",
                    "material_size" =>  "0.00121",
                    "material_unit" =>  "m3",
                    "seller_id" =>  null,
                    "category_id" =>  3,
                    "created_at" =>  "2020-10-28T12:28:32.000000Z",
                    "updated_at" =>  "2020-10-28T12:28:32.000000Z",
                    "material_area" => [
                        "id" => 10,
                        "material_id" => 10,
                        "area_id" => 1,
                        "price" => 2200,
                        "created_at" => "2020-10-29T04:36:31.000000Z",
                        "updated_at" => "2020-10-29T04:36:31.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ],
            [
                "id" => 4,
                "category_name" => "Besi Pokok",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  10,
                    "material_code" =>  "BP0001",
                    "material_name" =>  "Besi Pokok 10mm",
                    "material_brand" =>  "Krakatau Steel",
                    "material_grade" =>  "A",
                    "material_size" =>  "1",
                    "material_unit" =>  "batang",
                    "seller_id" =>  null,
                    "category_id" =>  4,
                    "created_at" =>  "2020-10-28T12:28:32.000000Z",
                    "updated_at" =>  "2020-10-28T12:28:32.000000Z",
                    "material_area" => [
                        "id" => 13,
                        "material_id" => 12,
                        "area_id" => 1,
                        "price" => 85000,
                        "created_at" => "2020-10-29T04:36:31.000000Z",
                        "updated_at" => "2020-10-29T04:36:31.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ],
            [
                "id" => 5,
                "category_name" => "Besi Begel",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  13,
                    "material_code" =>  "BG001",
                    "material_name" =>  "Besi Begel 8mm",
                    "material_brand" =>  "Krakatau Steel",
                    "material_grade" =>  "A",
                    "material_size" =>  "1",
                    "material_unit" =>  "batang",
                    "seller_id" =>  null,
                    "category_id" =>  5,
                    "created_at" =>  "2020-10-28T12:39:30.000000Z",
                    "updated_at" =>  "2020-10-28T12:39:30.000000Z",
                    "material_area" => [
                        "id" => 16,
                        "material_id" => 13,
                        "area_id" => 1,
                        "price" => 50000,
                        "created_at" => "2020-10-29T04:36:31.000000Z",
                        "updated_at" => "2020-10-29T04:36:31.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ],

            [
                "id" => 6,
                "category_name" => "Batu Split",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  14,
                    "material_code" =>  "BS0001",
                    "material_name" =>  "Batu Split",
                    "material_brand" =>  "1/2",
                    "material_grade" =>  "A",
                    "material_size" =>  "1",
                    "material_unit" =>  "m3",
                    "seller_id" =>  null,
                    "category_id" =>  6,
                    "created_at" =>  "2020-10-28T12:39:30.000000Z",
                    "updated_at" =>  "2020-10-28T12:39:30.000000Z",
                    "material_area" => [
                        "id" => 17,
                        "material_id" => 14,
                        "area_id" => 1,
                        "price" => 200000,
                        "created_at" => "2020-10-29T04:36:31.000000Z",
                        "updated_at" => "2020-10-29T04:36:31.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ],

            [
                "id" => 7,
                "category_name" => "Bekisting",
                "created_at" => null,
                "updated_at" => null,
                "material" => [
                    "id" =>  17,
                    "material_code" =>  "BKS0001",
                    "material_name" =>  "Bekisting",
                    "material_brand" =>  "Bekisting",
                    "material_grade" =>  "A",
                    "material_size" =>  "1",
                    "material_unit" =>  "m2",
                    "seller_id" =>  null,
                    "category_id" =>  7,
                    "created_at" =>  "2020-10-28T13:09:44.000000Z",
                    "updated_at" =>  "2020-10-28T13:09:44.000000Z",
                    "material_area" => [
                        "id" => 20,
                        "material_id" => 17,
                        "area_id" => 1,
                        "price" => 100000,
                        "created_at" => "2020-10-29T05:02:58.000000Z",
                        "updated_at" => "2020-10-29T05:02:58.000000Z",
                        "area" => [
                            "id" => 1,
                            "city_name" => "Jakarta",
                            "created_at" => null,
                            "updated_at" => null
                        ]
                    ]
                ]
            ]
        ];
        return $dummy;

        return response()->json($category);
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
