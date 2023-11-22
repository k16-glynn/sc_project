<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booksController extends Controller
{
    public function index(){
        return view("books");
    }

    public function bookStoring(Request $request){
        $validateData = $request([
        "name"=>"required|string|max: 255",
        "pages"=> "required|integer",
        "IBN"=> "required",
        "category"=> "required",
        "publisher"=> "required",
        "published"=> "required",
        "userID"=> "required",
        ]);
    }
}
