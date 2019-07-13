<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/main',"MainController@actionMain")->name("main");

Route::get('/',"WelcomeController@actionWelcome")->name("Welcome");
Route::get('/search',"WelcomeController@search")->name("Search");
Route::get('/category/search',"WelcomeController@catsearch")->name("catsearch");
Route::get('category/{id}',"WelcomeController@categoryShow")->name("catshow");
Route::get('category/details/{id}',"WelcomeController@detaileShow")->name("datshow");
Route::get('/news/{id}',"WelcomeController@newsShow")->name("newsShow");
Route::post('/product/upload','WelcomeController@addProrerty')->name("propertyAdd");

Route::get('/homepage',"AuthUserController@homePage")->name("homePage");
Route::get('/homepage/change/{id}',"AuthUserController@changePage")->name("changePage");
Route::post('/homepage/change/prop/{id}',"AuthUserController@changeProp")->name("changeProp");

//delete file in db and storage
Route::delete("/homepage/deleteproperty/{property}",function (\App\Property $property){
     $path = $property->url;
     $path2 = $property->url2;
     $path3 = $property->url3;

     File::delete("storage/$path");
     File::delete("storage/$path2");
     File::delete("storage/$path3");

     $property->delete();
     return redirect("/homepage");
})->name("homePageDelete");

// Admin routes
Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'admin.',
    ],
    function(){
        Route::get('/',['as' => 'dashboard','uses' => 'DashboardController@show']);
    }
);


Route::get('property/details/{id}',"DelailsController@propertyShow")->name("propertyshow");

Route::post('property/comment/add',"DelailsController@commentAdd")->name("commentAdd");

//Route::match(['get', 'post'], 'property/details/{id}',"DelailsController@propertyShow")->name("propertyshow");

//Route::any('property/details/{id}', "DelailsController@propertyShow")->name("propertyshow");


Route::post('/admin','Admin\DashboardController@addCategory')->name("categorAdd");
Route::post('/admin/newsadd','Admin\DashboardController@addNews')->name("newsAdd");



//Delete category
Route::delete("/admin/deletecategory/{categorys}",function (\App\Category $categorys){

//    $category_tmp = \App\Category::where("id",$category)->first();

    $categorys->delete();
    return redirect("/admin");
})->name("categoryDelete");
Route::delete("/admin/deletenews/{detailes}",function (\App\Detaile $detailes){


//    $category_tmp = \App\Category::where("id",$category)->first();

    $detailes->delete();
    return redirect("/admin");
})->name("newsDelete");


//Route::post('/product/uploads','WelcomeController@addImage')->name('addImage');

Route::delete("/admin/delete/{user}",function (\App\User $user){

//    $category_tmp = \App\Category::where("id",$category)->first();

    $user->delete();
    return redirect("/admin");
})->name("userDelete");



Route::get('article/{id}', 'WelcomeController@show')->name('articleShow');
//Route::get('/', function () {
//    return view('welcome')->name();
//});

Auth::routes();
//['verify' => true]


Route::get('/home', 'HomeController@index')->name('home');
//->middleware('verified')



//Route::get('/','IndexController@index');
