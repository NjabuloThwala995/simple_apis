<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class MathController extends Controller
{
    public function add(Request $request)
    {
        $validated = $this->validateValues($request);
        if ($validated->fails()) {
            return response()->json($validated->errors());
        }

        $value1 = $request->first_value;
        $value2 = $request->second_value;
        return response()->json($value1 + $value2);
    }

    public function validateValues($request)
    {
        return Validator::Make($request->all(),
            [
                'first_value' => 'numeric|required|min:-9999999999|max:9999999999',
                'second_value' => 'numeric|required|min:-9999999999|max:999999999999'
            ]);
    }
}