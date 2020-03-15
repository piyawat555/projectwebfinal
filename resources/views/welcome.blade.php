@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-5"><h3>โพตส์ขายทั้งหมด</h3></div>
    <div class="row pt-5">
    @foreach ($all as $item)

<div class="col-4 pb-4">
    <a href="{{route('see.post',$item->id)}}">
        <img src="/{{$item->postimage[0]->filename}}" class="img-thumbnail">
       </a>
   </div>
    @endforeach
</div>
</div>

@endsection
