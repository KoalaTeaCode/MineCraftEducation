@extends("layouts.app")

@section("content")

<style>

section {
  margin-top: 0px;
}

#video {
  width: 100%;
  border-radius: 4px;
}

.video-details, .box {
  border: 1px solid #f2f2f2;
  border-bottom-width: 2px;
  background: #fff;
  padding: 20px;
  font-size: 16px;
}

.information-item {
  background-color: #00baf3;
  color: #fff;
  border-radius: 2px;
  padding: 3px 11px;
  font-size: 14px;
  display: inline-block;
}

.video-experience {
  padding-top: 30px;
}

.video-experience img {
  width: 50px;
}

#video-text {
  height: 550px;
  margin-bottom: 80px;
}

#video-wrapper {
  padding-top: 30px;
  padding-bottom: 0px;
  background: #EB3349; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #EB3349 , #F45C43); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #EB3349 , #F45C43); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

#video-wrapper h1 {
  color: #fff;
}

</style>

<div id="video-wrapper">
  <section class="container">
    <div class="col-md-12">
      <h1>{{$video->title}}</h1>
    </div>

    <div class="col-md-6">
      @if(isset($user) && ($video->free || $user->subscribed('basic')))
        <video id="video" controls>
          <source src="/vids/{{$video->link}}" type="video/mp4">
          {{-- <source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg"> --}}
          video not supported
        </video>
      @else
        <p>You must be subscribed to view this video.</p>
        @include('partials.subscribe')
      @endif
    </div>

    <div class="col-md-6 video-details">
      <div class="col-md-8">
        <strong>{{$video->category}} - {{$video->title}}</strong>
        <br>
        <br>
        <p>{!! nl2br($video->description) !!}</p>
        <p class="information-item">Cretification Credit: "{{$video->certification_credit}}"</p>
      </div>

      <div class="col-md-4 text-center">
        <div class="video-experience">
            <img src="https://laracasts.com/images/tmp/experience-badge.png" alt="Experience Points Offered">
            <strong>100 XP</strong>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="container" style="min-height:700px;">
  <div id="video-text" class="col-md-6">
    <h2>Lesson Text</h2>
    <div class="col-md-12 box" style="height:100%; overflow:scroll;">
      {!! nl2br($video->written_content) !!}
    </div>
  </div>

  <div id="videos" class="col-md-6">
    <h2>Course Videos</h2>
      <a href="/videos/1">
        <div class="col-md-12 video-list-item">
          <div class="col-md-4 text-center">
            <i class="fa fa-check"></i>
          </div>
          <div class="col-md-8">
            <h3>Learning Variables</h3>
            <p>In this lesson we’ll teach you how to use Variables and we will also write our first program in Minecraft that will let us teleport our character any location in the game.
</p>
          </div>
        </div>
      </a>
          <a href="/videos/2">
        <div class="col-md-12 video-list-item">
          <div class="col-md-4 text-center">
            <i class="fa fa-check"></i>
          </div>
          <div class="col-md-8">
            <h3>Expressions and Math</h3>
            <p>In this lesson we are going to learn about using expressions and math. Our example program will allow us to build a large cube of melons with only a few lines of code. Let’s get started.</p>
          </div>
        </div>
      </a>
      <a href="/videos/3">
        <div class="col-md-12 video-list-item">
          <div class="col-md-4 text-center">
            <i class="fa fa-check"></i>
          </div>
          <div class="col-md-8">
            <h3>Functions</h3>
            <p>In this lesson, we will cover functions and learn how to generate a tree with them. This will allow us to specify lines of code that we can reuse later. </p>
          </div>
        </div>
      </a>
  </div>
</section>

@stop

@section("script")
<script type='text/javascript'>
    document.getElementById('video').addEventListener('ended', completedVideo, false);
    function completedVideo(e) {
      swal({
        title: "{{$video->title}} Completed",
        text: "Congratulations!",
        type: "success",
        // showCancelButton: true,
        // confirmButtonColor: "#DD6B55",
        // confirmButtonText: "Yes, delete it!",
        // closeOnConfirm: false
      })

      //@TODO: Send a request to save the achievement progress
    }
</script>
@stop
