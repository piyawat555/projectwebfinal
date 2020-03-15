<?php

namespace App\Http\Controllers;

use App\post_image;
use App\posts;
use Illuminate\Http\Request;


class imagecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        $img=post_image::where('post_id',$id)->get();
        return view('post.showimage',compact('img'));
    }
}
