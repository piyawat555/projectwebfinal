{{-- @extends('layouts.app')

@section('content')
<div class="container">

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
@endsection --}}

@extends('layouts.app')

@section('content')
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: 5cm;
  width: 25%;
  padding: 5px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8;
  cursor: pointer;
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
#e {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
#center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>

</head>
<body>

    <div class="pt-5"></div>
    <div class="row pt-5 ">
        <div class="col-12">
            <div class="pl-5 pt-5">
            <h3>รายละเอียดสินค้า : {{$post->postdiscription->discription}}</h3>

            </div>
            <div>
            <div class="pl-5 pt-5">
                <h3>ชื่อผู้โพตส์ :

                <a href="/profile/user/{{$post->user->id}}">
                 {{$post->user->username}}</h3></a>
            </div>
        </div>
        <div class="w3-row-padding w3-grayscale" style="margin-bottom:128px">

            <div class="pt-5"></div>
            <div class="container">
            <div class="w3-half " id="center">
                @foreach ($post->postimage as $imgs)
                <img src="\{{$imgs->filename}}" style="width:50px" onclick="myFunction(this);">
                @endforeach
            </div>
        </div>
<div class="w3-half pt-5">
                <div class="container">

                    <img id="e"  >
                    <div id="imgtext"></div>
                    </div>
            </div>

          </div>
<!-- The four columns -->
{{-- <div class="row" >
    @foreach ($post->postimage as $imgs)
  <div class="column">
    <img src="\{{$imgs->filename}}"  style="width:250px" onclick="myFunction(this);">
  </div>
  @endforeach
</div>
    <div class="container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" >
    <div id="imgtext"></div>
    </div> --}}
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("e");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
@endsection

