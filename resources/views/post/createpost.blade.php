@extends('layouts.app')

@section('content')
<div class="container">


  <div class="pt-5"></div>
    <div class="row">
        <div class="card promoting-card ">
        <div class="col-md-12 pt-5">
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                @foreach($user->post as $posts)

                <input type="hidden" name="postid" value="{{$posts->id}}">
                @endforeach
                <div class="custom-file">
                 <input  name="file[]"  type="file" class="custom-file-input" multiple>
                <label class="custom-file-label" for="customFile">เลือกรูป</label>
                 </div>
                 <div class="pt-5">
                        <button  type="submit" class="btn btn-primary">อัพโหลด</button>
                        <a class="btn btn-primary" href="{{route('post.delete',$posts->id)}}" role="button">ยกเลิก</a>
                 </div>
            </form>

        </div>
        <div class="pt-5"></div>
    </div>
</div>

@endsection
