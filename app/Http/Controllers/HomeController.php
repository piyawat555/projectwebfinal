<?php

namespace App\Http\Controllers;

use App\posts;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // กำหนดให้เป็นแอดมิน
        // auth()->user()->assignRole('admin');
        //  return redirect('admin/'.auth()->user()->id);
        if(auth()->user()->hasRole('admin')){
            $user=auth()->user();
            auth()->user()->syncPermissions(['deletepost']);
            return redirect('admin/'.auth()->user()->id);

        }else{
            $user=auth()->user();
            $user->assignRole('users');
            $user->syncPermissions(['deletepost','post','profile','search']);
            return redirect ('profile/user/'.auth()->user()->id);
        }

    }
    public function admin(User $id){
       return view('admin',compact('id'));
    }
    public function mainpage(){
        $all=posts::all();
        return view('welcome',compact('all'));
    }

}
