@extends('layouts.app')

@section('title', ' Home')

@section('content')

<div class="container-fluid" style="background: #F3EFE0">
  <div class="text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <div class="pt-5 pb-2">
        <div class="display-10 fw-bold font-monospace pt-5" style="color: #222222">Hi there, my name is</div>
        <h1 class="display-5 fw-bold pb-1" style="color: #22A39F">YUNUS FAJRI</h1>
        <div class="col-lg-6 mx-auto font-monospace">
          <p class="fs-5 mb-4 pb-5" style="color: #222222">
            a web developer building the backend of websites
            <br>
            grow and improve together
          </p>
          <br><br>
          <div class="pt-5 pb-3" style="color: #222222">
            <div class="pb-2" style="font-size: 14px">
              learn more about what i do
            </div>
            <i class="fa-2x fa-solid fa-angles-down" style="color: rgb(0, 183, 255)"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5" style="background: #F3EFE0">
  
  <div class="container mb-5" style="background: #434242" >
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3" style="background: #434242; color: white">
        <h1 class="display-5 fw-bold lh-1">Website Anime</h1>
        <p class="lead">
          Menggunakan Bahasa JavaScript <br>
          memanggil API
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="http://bit.ly/3xJYKHr">
            <button type="button" class="btn btn-info btn-sm px-4 me-md-2 fw-bold">info</button>
          </a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="{{ ('/coba_01.jpg') }}" alt="" width="720">
      </div>
    </div>
  </div>

  <div class="container mb-5" style="background: #434242" >
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3" style="background: #434242; color: white">
        <h1 class="display-5 fw-bold lh-1">Border hero with cropped image and shadows</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-info btn-lg px-4 me-md-2 fw-bold">info</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="{{ ('/coba_01.jpg') }}" alt="" width="720">
      </div>
    </div>
  </div>
  
  <div class="container mb-3" style="background: #434242" >
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3" style="background: #434242; color: white">
        <h1 class="display-5 fw-bold lh-1">Border hero with cropped image and shadows</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-info btn-lg px-4 me-md-2 fw-bold">info</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="{{ ('/coba_01.jpg') }}" alt="" width="720">
      </div>
    </div>
  </div>

</div>
@endsection