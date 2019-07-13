<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Property;
use App\Comment;
use DB;

class AuthUserController extends Controller
{

    protected $property;
    protected $propertys;


    public function __construct()
    {
      $this->propertys = Property::all();
    }


    public function homePage(){

        $this->property = Property::all()->where('user_id', Auth::user()->id);



       return view("homePage",["property"=>$this->property]);
   }

   public function changePage($id){
       $this->propertys = Property::find($id);

       $this->property = Property::all()->where('user_id', Auth::user()->id);


       return view("changeProperty",["property"=>$this->property,"propertys"=>$this->propertys,"title"=>"Change"]);

   }

   public function changeProp(Request $request,$id){

//       $name = $request->input('propName');
//       DB::update("update properties set name = ? where id = ?",[$name,$id]);
//
       $this->validate(request(),[
           'propName'=>'required|max:255',
           'propDesc'=>'required|max:255',
           'region'=>'required',
           'city'=>'required',
           'street'=>'required',
           'numhouse'=>'required|numeric',
           'room'=>'required|numeric',
           'area'=>'required|numeric',
           'phone'=>'required|numeric',
           'email'=>'required|email',
           'floor'=>'required|numeric',
           'price'=>'required|numeric',
           'category_id'=>'required',
           'user_id'=>'required',
           ]);

       $property = Property::find($id);
       $property->name = $request->post("propName");
       $property->desc = $request->post("propDesc");
       $property->region = $request->post("region");
       $property->city = $request->post("city");
       $property->street = $request->post("street");
       $property->numhouse = $request->post("numhouse");
       $property->room = $request->post("room");
       $property->area = $request->post("area");
       $property->phone = $request->post("phone");
       $property->email = $request->post("email");
       $property->floor = $request->post("floor");
       $property->price = $request->post("price");
       $property->category_id = $request->post("category_id");
       $property->user_id = $request->post("user_id");
       $property->save();



     return back()->withInput();
   }

}
