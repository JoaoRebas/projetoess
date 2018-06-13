@extends('layouts.admin')

@section('camera')
<!-- Slideshow CSS -->
<link rel="stylesheet" href="{{ asset('plugins/slideshow/slideshow.css') }}">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center" style="font-size:50px; font-weight:bold; height:100px">Security Camera Images</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Slideshow container -->
<div class="slideshow-container">

 <!-- Full-width images with number and caption text -->
 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam1.jpg" style="width:100%">
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam2.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam3.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam4.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam5.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam6.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam7.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam8.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext">Inserir Hora e Data guardada na BD</div>
   <img src="/storage/camera/cam9.jpg" style="width:100%"/>
 </div>

 <div class="mySlides">
   <div class="numbertext"></div> <!--$camera->photo-->
   <img src="/storage/camera/cam10.jpg" style="width:100%"/>
 </div>

 <!-- Next and previous buttons -->
 <a id="previous" class="prev" onclick="plusSlides(-1)">&#10094;</a>
 <a id="next" class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
 <span class="dot" onclick="currentSlide(1)"></span>
 <span class="dot" onclick="currentSlide(2)"></span>
 <span class="dot" onclick="currentSlide(3)"></span>
 <span class="dot" onclick="currentSlide(4)"></span>
 <span class="dot" onclick="currentSlide(5)"></span>
 <span class="dot" onclick="currentSlide(6)"></span>
 <span class="dot" onclick="currentSlide(7)"></span>
 <span class="dot" onclick="currentSlide(8)"></span>
 <span class="dot" onclick="currentSlide(9)"></span>
 <span class="dot" onclick="currentSlide(10)"></span>
</div>

<!-- Slideshow JS for style-->
<script src="{{ asset('plugins/slideshow/slideshow.js') }}"></script>
@endsection
