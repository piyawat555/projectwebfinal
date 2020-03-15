<?php

namespace App\Http\Controllers;


use App\Http\Middleware\user as AppUser;
use App\post_discriptions;
use App\post_image;
use App\posts;
use App\User;
use App\user_profiles;
use Illuminate\Http\Request;

class controllerprofile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(User $user){
            $test=$user->id;
            $test1=posts::where('user_id',$test)->get();
            // $s=post_image::where('post_id', $test1->id)->get();
            // $sx=post_discriptions::where('post_id', $test1->id)->get();
            // $sxx=posts::where('id',$test->id)->get();
            // $s=post_image::find($test->id);
        //    $data=([$s]);
    //    return view('home',compact('user','s','sx'));
    return view('home',compact('user','test1'));
    }

    public function edit(User $user){

      $this->authorize('update',$user->userprofile);
       return view('edit',compact('user'));
    }

    public function update(User $user){

        $this->authorize('update',$user->userprofile);
       $data = request()->validate([
        'address'=>'required',
        'telephonenumber'=>'required|regex:/(0)[0-9]{9}/',
        'socialurl'=>'required',
       ]);

    auth()->user()->userprofile->update($data);
      return redirect ("/profile/user/{$user->id}");
     }
}
