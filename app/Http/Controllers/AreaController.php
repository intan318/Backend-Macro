<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function getAllArea(){
        $area = Area::all();

        return response()->json([
            'area' => $area
        ]);
    }
    
}

    
