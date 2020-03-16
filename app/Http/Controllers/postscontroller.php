<?php

namespace App\Http\Controllers;

use App\post_discriptions;
use App\post_image;
use App\posts;
use App\User;
use Illuminate\Support\Facades\Storage;

use Image;
use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(User $user){
        posts::create([
            'user_id'=>$user->id
            ]);
        return view('post.createpost',compact('user'));
    }
    public function deletepost($id){
        posts::where('id',$id)->delete();
        return redirect ("/profile/user/".auth()->user()->id);
    }
    public function store(Request $request){
        $postid=$request->get('postid');
            if ($request->hasFile('file')) {
                foreach($request->file('file') as $file){

                    //get filename with extension
                    $filenamewithextension = $file->getClientOriginalName();

                    //get filename without extension
                    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                    //get file extension
                    $extension = $file->getClientOriginalExtension();

                    //filename to store
                    $filenametostore = $filename.'_'.uniqid().'.'.$extension;

                    Storage::put('public/profile_images/'. $filenametostore, fopen($file, 'r+'));
                    Storage::put('public/profile_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));

                    //Resize image here
                    $thumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
                    $thumbnailpath2= 'storage/profile_images/thumbnail/'.$filenametostore;
                    $img = Image::make($thumbnailpath)->fit(500, 500, function($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save($thumbnailpath);
                    post_image::create([
                         'post_id'=>$postid,
                            'filename' => $thumbnailpath2
                            ]);
                }
            }
                 return redirect('post/showimage/'. $postid);
    }
        public function deletephoto($id){
            post_image::where('id',$id)->delete();
            return back();
        }
        public function deleteall($id){
           post_image::where('post_id',$id)->delete();
            posts::where('id',$id)->delete();
            return redirect ("/profile/user/".auth()->user()->id);
        }
        public function deleteallpost($id){
            post_image::where('post_id',$id)->delete();
            posts::where('id',$id)->delete();
            post_discriptions::where('post_id',$id)->delete();
            return redirect ("/profile/user/".auth()->user()->id);
        }
        public function seepost(posts $post){
            // dd($post);
            // $pi=post_image::where('post_id',$id)->get();
            // $pd=post_discriptions::where('post_id',$id)->get();

            // return view ("post.allpost",compact('pi','pd'));
            return view ("post.allpost",compact('post'));
        }
}

