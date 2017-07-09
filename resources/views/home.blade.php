@extends('layouts.app')

@section('content')


<header class="main-header">
  <div class="container">
    <div class="banner">
      <h1>
          A place to learn any way you want
      </h1>
      <h3>
          We teach programming langauges by a multi-faceted approach.<br>
          That means you can choose the way you learn.
      </h3>

      <div class="cta-button-wrapper">
        <a href="/videos" class="btn btn-lg btn-primary">
            Start Browsing
        </a>
      </div>
    </div>
  </div>
</header>

<section id="how" class="container">
  <h2 class="text-center">How it works</h2>

  <div class="col-md-4">
    <div class="how-icon" style="background-position: -14px -28px;"></div>
    <h3>Choose a Language</h3>
  </div>

  <div class="col-md-4">
    <div class="how-icon" style="background-position: -163px -28px;"></div>
    <h3>Select how you Want to Learn</h3>
  </div>

  <div class="col-md-4">
    <div class="how-icon" style="background-position: -312px -28px;"></div>
    <h3>Track your progress!</h3>
  </div>
</section>

<section id="featured" class="container">
  <h2 class="text-center">Featured</h2>

  <div class="col-md-4">
    <div class="card">
      <div class="card-img-container">
        <img src="//laracasts.s3.amazonaws.com/images/video-thumbnails/series/russian-doll-caching-cover.jpg" class="card-image" alt="Russian-Doll Caching in Laravel">
      </div>
      <h3>Choose a Language</h3>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-img-container">
        <img src="//laracasts.s3.amazonaws.com/images/video-thumbnails/series/russian-doll-caching-cover.jpg" class="card-image" alt="Russian-Doll Caching in Laravel">
      </div>
      <h3>Choose a Language</h3>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-img-container">
        <img src="//laracasts.s3.amazonaws.com/images/video-thumbnails/series/russian-doll-caching-cover.jpg" class="card-image" alt="Russian-Doll Caching in Laravel">
      </div>
      <h3>Choose a Language</h3>
    </div>
  </div>
</section>

@endsection
