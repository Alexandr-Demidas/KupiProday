<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function actionMain(){
      return view("main",
      ["arr"=>["петя","vasya","egor"]]

      );
  }
}
