@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <p>{{dd($post->postimage,$post->postdiscription)}}</p> --}}
    <div class="pt-5"></div>
<div class="row pt-5 ">
    <div class="col-4">
        <div>
        <h3>รายละเอียดสินค้า </h3>
        <h1>{{$post->postdiscription->discription}}</h1>
        </div>
        <div>
        <div class="pt-5">
            <h3>ชื่อผู้โพตส์ :

            <a href="/profile/user/{{$post->user->id}}">
             {{$post->user->username}}</h3></a>
        </div>
    </div>
@foreach ($post->postimage as $imgs)
<div class="col-8 pt-5">
<div class="card" style="width: 18rem;">
    <img src="\{{$imgs->filename}}" class="img-thumbnail" >
</div>
</div>
  @endforeach
</div>

</div>
  <div class="pt-5"></div>
</div>

@endsection
