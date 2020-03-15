<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

use App\post_discriptions;

class discriptioncontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function save(Request $request){

        $idpost=$request->get('postid');
        $description=$request->get('discription');
  
        $data =([
            'post_id'=> $idpost,
            'discription'=>$description
        ]);

        post_discriptions::create($data);

        return redirect ("/profile/user/".auth()->user()->id);
    }
}
