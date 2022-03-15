<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class MathController extends Controller
{
    public function add(Request $request)
    {
        $value1 = $request->first_value;
        $value2 = $request->second_value;
        return response()->json($value1 + $value2);
    }
}
