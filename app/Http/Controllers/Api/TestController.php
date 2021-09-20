<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Trademark;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function getBrands(){
        $brands = Trademark::all();
        return response()->json($brands);
    }

    public function getCountries(){
        $countries = Country::all();
        return response()->json($countries);
    }

    public function getSearchString(Request $request){
        $brands = null;
        $request_data = $request->only('value');
        $query = Trademark::query();
        $validator = Validator::make($request_data, [
            'value' => 'required', 'string'
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validator->messages()
            ])->setStatusCode(422);
        }
        else{
            $query->where('trademark_name', 'like', '%' . $request->value. '%');
        }
        $brands = $query->get();
        return response()->json($brands)->setStatusCode(202);
    }
}
