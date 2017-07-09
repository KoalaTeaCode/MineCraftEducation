@extends("layouts.app")

@section("content")
<section id="intro">
  <div class="container">
    <div class="col-md-6">
      <h2>Learning Python By Hacking Minecraft</h2>
      <p>In this course you’ll learn how to hack the popular game Minecraft with Python. Python is a language used for adminstering servers, building websites, data mining and much more.</p>
    </div>

    <div class="col-md-6 badges">
       <div class="col-md-4">
          <div class="index__badgeContainer___3pzRk" >
             <div title="Complete All Lessons" class="index__badge___ri0US index__disabled___363XS" style="height:100%;width:100%;" >
               <img class="index__icon___4NSaq" src="https://www.codecademy.com/assets/svg/badges/htmlcss-ach-lessons.svg" >
             </div>
          </div>
          <div class="index__contentType___2UvNJ" >Lessons</div>
          <div class="index__progress___2XSqy" >
             <div class="index__progressBar___1x_3R" >
                <div class="index__progressBarComplete___36E67" style="width:2%;" ></div>
             </div>
             <div class="index__progressIndicator___thOaL" >2%</div>
          </div>
       </div>

       <div class="col-md-4">
          <div class="index__badgeContainer___3pzRk" >
             <div title="Complete All Projects" class="index__badge___ri0US index__disabled___363XS" style="height:100%;width:100%;" ><img class="index__icon___4NSaq" src="https://www.codecademy.com/assets/svg/badges/htmlcss-ach-projects.svg" ></div>
          </div>
          <div class="index__contentType___2UvNJ" >Projects</div>
          <div class="index__progress___2XSqy" >
             <div class="index__progressBar___1x_3R" >
                <div class="index__progressBarComplete___36E67" style="width:0%;" ></div>
             </div>
             <div class="index__progressIndicator___thOaL" >4 available</div>
          </div>
       </div>

       <div class="col-md-4">
          <div class="index__badgeContainer___3pzRk" >
             <div title="Complete All Quizzes" class="index__badge___ri0US index__disabled___363XS" style="height:100%;width:100%;" ><img class="index__icon___4NSaq" src="https://www.codecademy.com/assets/svg/badges/htmlcss-ach-quizzes.svg" ></div>
          </div>
          <div class="index__contentType___2UvNJ" >Quizzes</div>
          <div class="index__progress___2XSqy" >
             <div class="index__progressBar___1x_3R" >
                <div class="index__progressBarComplete___36E67" style="width:0%;" ></div>
             </div>
             <div class="index__progressIndicator___thOaL" >4 available</div>
          </div>
       </div>

    </div>

    <div class="col-md-12 text-center cta-button-wrapper">
      <a href="/videos/1"><button class="btn btn-primary btn-lg">Continue</button></a>
    </div>
  </div>
</section>

<section id="videos" class="container">
  {{-- <div class="container">
    @foreach($videoGroups as $videoGroup => $videos)
      <h2>{{$videoGroup}}</h2>
      @foreach($videos as $video)
        <h3>{{$video->title}}</h3>
        <a href="/videos/{{$video->id}}">View</a>
      @endforeach
    @endforeach
  </div> --}}
  @foreach($videoGroups as $videoGroup => $videos)
    @foreach($videos as $video)
      <a href="/videos/{{$video->id}}">
        <div class="col-md-8 col-md-offset-2 video-list-item">
          <div class="col-md-4 text-center">
            <i class="fa fa-check"></i>
          </div>
          <div class="col-md-8">
            <h3>{{$video->title}}</h3>
            <p>{{$video->description}}</p>
          </div>
        </div>
      </a>
    @endforeach
  @endforeach
</section>

@stop
