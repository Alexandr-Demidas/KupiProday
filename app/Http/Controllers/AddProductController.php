<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function addImage(Request $request){
      $path =  $request->file('addImage')->store('uploads','public');
      return redirect(view("Welcome",["path"=>$path]));
    }
}
