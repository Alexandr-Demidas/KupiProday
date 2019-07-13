<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Detaile;

class DashboardController extends Controller

{
    protected $users;
    protected $categorys;
    protected $detailes;



    public function __construct()
    {
        $this->users = User::all();
        $this->categorys = Category::all();
        $this->detailes = Detaile::all();
    }


    public function show(){
        return view('Admin.Dashboard.adminShow',["users"=>$this->users,"categorys"=>$this->categorys,
            "detailes"=>$this->detailes]);
    }

    public function addCategory(Request $request){
        $category = new Category();
        $category->name = $request->post("catName");
        $category->save();

        return redirect(route("categorAdd"));
    }

    public function addNews(Request $request){
        $detaile = new Detaile();
        $detaile->items = $request->post("itemNewsAdd");
        $detaile->content = $request->post("contentNewsAdd");
        $detaile->save();

        return back()->withInput();

    }


}
