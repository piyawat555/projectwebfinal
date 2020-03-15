@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5 p-5">
            <div><h1>โปรไฟล์ของคุณ</h1></div>
        </div>
        <div class="col-7 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <div><h1>ชื่อ : {{$user->username}}</h1></div>
            @can ('update',$user->userprofile)
            <a  href="/profile/{{$user->id}}/edit">แก้ไข</a>
            @endcan
            </div>
            <div class="pt-4 font-weight-bold">อีเมลล์ : {{$user->email}}</div>
            <div>ที่อยู่ : {{$user->userprofile->address}} </div>
            <div>เบอร์ติดต่อ : {{$user->userprofile->telephonenumber}} </div>
            <div>โพสต์ที่ขายทั้งหมด : {{$test1->count()}} </div>
            <div class="d-flex justify-content-between align-items-baseline">
                 <div>URL : <a href="#">{{$user->userprofile->socialurl}}</a></div>
                 @can ('update',$user->userprofile)
                <a  href="{{ route('post.create',Auth::user()->id) }}">โพสต์ขาย</a>
                @endcan
            </div>
        </div>
    </div>
</div>

<div class="row pt-5">
    @foreach($test1 as $image)

             <div class="col-4 pb-4">
             <a href="{{route('see.post',$image->id)}}">
                 <img src="/{{$image->postimage[0]->filename}}" class="img-thumbnail">
                </a>
                 <div>
                    @can ('update',$user->userprofile)
                    <a class="btn btn-primary" href="{{route('delete.post',$image->id)}}" role="button">ลบโพสต์นี้</a>
                    @endcan
                 </div>

            </div>

    @endforeach


</div>
@endsection
{{-- <div class="d-flex justify-content-between">
    @can ('update',$user->userprofile)
<a class="btn btn-primary" href="/profile/{{$user->id}}/edit" role="button">แก้ไข</a>
@endcan --}}
    {{-- <div class="pt-3"><strong>ชื่อ: {{$user->username}}</strong></div>
                            <div class="pt-3"><strong>E-mail: {{$user->email}}</strong></div>
                            <div class="pt-3"><strong>ที่อยู่: {{$user->userprofile->address}}</strong></div>
                            <div class="pt-3"><strong>เบอร์ติดต่อ: {{$user->userprofile->telephonenumber}}</strong></div>
                            <div class="pt-3"><strong>Socialurl: {{$user->userprofile->socialurl}}</strong></div>
                            <div class="pt-3"><strong>โพสต์ที่ขายทั้งหมด</strong></div>
                            <div class="pt-5"></div>
                        @can ('update',$user->userprofile)
                        <a class="btn btn-primary" href="/profile/{{$user->id}}/edit" role="button">แก้ไข</a>
                        @endcan --}}
