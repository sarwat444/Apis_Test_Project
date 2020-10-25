<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\contry;
class contryController extends Controller
{
    public function   allCountry(){
        return  response()->json(contry::get() , 200 );
    }
    public function getcountry($id)
    {
        return  response()->json(contry::find($id) , 200 );
    }


    public function addcountry(Request $request)
    {   
        $rules = [
            'name' => 'required|min:3|max:4' ,
            'iso3' => 'required|min:3|max:4 '
        ];

        $validator  = Validator::make($request->all() , $rules );
        if( $validator->fails()){
            return response()->json($validator->errors());
        }
        $country  =  contry::create($request->all()); 
        return  response()->json($country,201);
    }
    public function updatecounty($id , Request $request){
        $olddata  =  contry::find($id) ; 
        if(is_null($olddata)){
            return response()->json('The Record  is Not  found' , 404 );      
        }
        $olddata->update($request->all());
        return  response()->json($olddata , 200 ); 
    }

       public function deletecountry($id){

         return  response()->json(contry::find($id)->delete() ,204 );
    }
}
