<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function getForm(){
       return view('client.form');
    }
    public function save(Request $request){
        $furniture = new  Furniture($request->all());
         $furniture->save();
         return redirect('client.table');
    }
}
