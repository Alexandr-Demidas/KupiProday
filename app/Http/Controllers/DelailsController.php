<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Property;
use App\Comment;

class DelailsController extends Controller
{
    protected $propertys;
    protected $comments;

     public function propertyShow($id){

        $this->propertys = Property::all()->where('id',$id)->first();
        $this->comments = Comment::all()->where('property_id',$id);

        return view("property_show",["property"=>$this->propertys,"comments"=>$this->comments]);


    }

    public function commentAdd(Request $request){
//        $this->propertys = Property::all()->where('id',$id)->first();
//        $this->comments = Comment::all()->where('property_id',$id);

        $comment = new Comment();
        $comment->comment = $request->post("comment");
        $comment->user_id = $request->post("comment_user_id");
        $comment->property_id = $request->post("comment_property_id");
        $comment->save();

         return back()->withInput();
    }



}
