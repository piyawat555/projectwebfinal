@extends('layouts.app')

@section('content')

<div class="container py-2">
<div class="pt-5"></div>
<div class="row pt-5 ">
@foreach ($img as $imgs)
<div class="col-3 pb-4">
<div class="card" style="width: 18rem;">
    <img src="\{{$imgs->filename}}" class="img-thumbnail" >

    <a href="{{route('photo.delete',$imgs->id)}}" class="btn btn-primary" role="button">ลบรูปนี้</a>
</div>
</div>
  @endforeach
</div>

  <div class="pt-5"></div>
<form action="{{route('discripsion.save')}}" enctype="multipart/form-data" method="post" class=" pt-5">
    @csrf

    <input type="hidden" value="{{$imgs->post_id}}" name="postid">
  <div class="form-group">
    <label for="comment">รายละเอียดการขาย:</label>
    <textarea   name="discription" class="form-control" rows="5" id="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">ยืนยัน</button>
  <a class="btn btn-primary" href="{{route('all.delete',$imgs->post_id)}}" role="button">ยกเลิก</a>
</form>

  <div class="pt-5"></div>
    <div class="row">
        <div class="card promoting-card ">
        <div class="col-md-12 pt-5">
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="postid" value="{{$imgs->post_id}}">
                <div class="custom-file">
                 <input  name="file[]"  type="file" class="custom-file-input" multiple>
                <label class="custom-file-label" for="customFile">เพิ่มรูป</label>
                 </div>
                 <div class="pt-5">
                        <button  type="submit" class="btn btn-primary">อัพโหลด</button>
                 </div>
            </form>
        </div>
        <div class="pt-5"></div>
    </div>
</div>

@endsection
