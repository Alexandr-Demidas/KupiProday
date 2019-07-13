<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Storage;

use App\Menu;
use App\Aticle;
use App\Category;
use App\Property;
use App\Detaile;


class WelcomeController extends Controller
{

  protected $menus;
  protected $categorys;
  protected $propertys;
  protected $properties;
  protected $link = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=3" ;
  protected $course_nbu;
  protected $link_kb = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5";
  protected $course_kb;
  protected $detailes;
  protected $detaile;
  protected $s;



  public function __construct()
  {
      $this->menus = Menu::all();
      $this->categorys = Category::all();
      $this->detailes = Detaile::all();
      $this->detaile;
      $this->link = file_get_contents($this->link);
      $this->course_nbu = json_decode($this->link,true);
      $this->link_kb = file_get_contents($this->link_kb);
      $this->course_kb = json_decode($this->link_kb,true);


  }

    public function actionWelcome(){

        $this->propertys = DB::table('properties')->paginate(2);

         return view("welcome",
            ["menus"=>$this->menus,"categorys"=>$this->categorys,"propertys"=>$this->propertys,
                "course_nbus"=>$this->course_nbu,"course_kbs"=>$this->course_kb,"detailes"=>$this->detailes
                ]

        );


    }

    public function search(Request $request){
        $search = $request->get('search');
        $properties = Property::where('name','like','%'.$search.'%')
            ->orWhere('desc','like','%'.$search.'%')->paginate(2);
//->
//-> paginate(2)
//            ;
        return view("welcome",['propertys'=>$properties,
            "menus"=>$this->menus,'categorys'=>$this->categorys,
            "course_nbus"=>$this->course_nbu,"course_kbs"=>$this->course_kb,"detaile"=>$this->detaile,
            "detailes"=>$this->detailes


            ]);

    }

    public function catsearch(Request $request){
        $catsearch = $request->get('catsearch');
        $properties = Property::where('category_id','like','%'.$catsearch.'%')->paginate(2);

        return view("welcome",['propertys'=>$properties,
            "menus"=>$this->menus,'categorys'=>$this->categorys,
            "course_nbus"=>$this->course_nbu,"course_kbs"=>$this->course_kb,"detaile"=>$this->detaile,
            "detailes"=>$this->detailes


        ]);

    }

    public function categoryShow($id){

//          $categorys = Category::find($id);


//          $propertys = Property::select(['id','name','url'])->get();;





        return view("cat-show", compact("propertys"),
            ["menus"=>$this->menus,'categorys'=>$this->categorys,
                "course_nbus"=>$this->course_nbu,"course_kbs"=>$this->course_kb,"detaile"=>$this->detaile,
                "detailes"=>$this->detailes
            ]);

//        "propertys"=>$propertys,

//
    }

    public function newsShow($id){
       $this->detaile = Detaile::find($id);

      return view("newsShow",["detaile"=>$this->detaile,"menus"=>$this->menus,
          "categorys"=>$this->categorys,"propertys"=>$this->propertys,
          "course_nbus"=>$this->course_nbu,"course_kbs"=>$this->course_kb,"detailes"=>$this->detailes

      ]);


    }

    public function addProrerty(Request $request){

      $this->validate(request(),[
          'propName'=>'required|max:50',
          'propDesc'=>'required|max:255',
          'region'=>'required|max:30',
          'city'=>'required|max:30',
          'street'=>'required|max:40',
          'numhouse'=>'required|numeric',
          'room'=>'required|numeric',
          'area'=>'required|numeric',
          'phone'=>'required|numeric',
          'email'=>'required|email',
          'floor'=>'required|numeric',
          'price'=>'required|numeric',
          'category_id'=>'required',
          'user_id'=>'required',
          'addImage1'=>'image|max:1500',
          'addImage2'=>'image|max:1500',
          'addImage3'=>'image|max:1500',

      ]);

        $property = new Property();

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


        if ($request->file('addImage1') == null) {
            $property->url = "";
        }else{
            $property->url = $request->file('addImage1')->store('uploads','public');
        }

        if ($request->file('addImage2') == null) {
            $property->url2 = "";
        }else{
            $property->url2 = $request->file('addImage2')->store('uploads','public');
        }

        if ($request->file('addImage3') == null) {
            $property->url3 = "";
        }else{
            $property->url3 = $request->file('addImage3')->store('uploads','public');
        }


        $property->save();

        return redirect(route("Welcome"));

    }



//    public function addImage(Request $request){
//        $request->file('addImage')->store('uploads','public');
//        return redirect(view("Welcome"),["menus"=>$this->menus,"categorys"=>$this->categorys,"propertys"=>$this->propertys,
//            "course_nbus"=>$this->course_nbu,"course_kbs"=>$this->course_kb]);
//    }

//    public function detaileShow($id){
//            $propertys = Property::select(['id','name','url']);
//
//            return view("detal_show",
//            ["menus"=>$this->menus,'categorys'=>$this->categorys,"propertys"=>$propertys]);
//
//    }


    public function show($id){
        //$hedline = Headline::find($id);
       $hedline = Menu::select(['id','items','content'])->where('id',$id)->first();

        //dump($hedline);

       return view('menu-content')->with(['header'=>$hedline]);
   }

}
