@extends("layouts.app")

@section("content")

<style>
  body {
    background: #efefef;
  }

  section#intro {
    background-color: #53BBB4;
    color: #fff;
    margin-top: 0px;
    padding-top: 40px;
    height: 500px;
  }

  section#videos {
    height: 500px;
  }

  .badges {
    padding-top: 50px;
  }

  .badges .col-md-4 {
    text-align: center;
    line-height: 30px;
    font-size: 16px;
  }

  .badges img {
    width: 80px;
  }

  .cta-button-wrapper {
    margin-top: 80px;
  }

  .cta-button-wrapper .btn {
    background: transparent;
    border: 1px solid #fff;
  }

  .cta-button-wrapper .btn:hover {
    background: #fff;
    color: #53BBB4
  }

  .video-list-item {
    padding: 20px;
    background: #fff;
    margin-bottom: 20px;
    transition: all .5s;
    -webkit-transition: all .5s;
    border-left: 80px solid #53BBB4;
    border-radius: 5px;
  }

  .video-list-item:hover {
    background-color: #53BBB4;
    color: #fff;
    cursor: pointer;
    margin-top: -10px;
  }

  .video-list-item i {
    font-size: 24px;
    color: #444;
    background: #efefef;
    border-radius: 50%;
    padding: 20px;
    margin-top: 10px;
  }
</style>

<section id="intro">
  <div class="container">
    <div class="col-md-6">
      <h2>Learning Python By Hacking Minecraft</h2>
      <p>In this track you’ll learn Swift 2.0, which is the latest version of Apple's new programming language for building mobile apps for iOS, watchOS, tvOS and OS X. Mobile apps have recently become a massive industry, with almost every business in the world relying upon them; many creating their own. By the end of this track, you’ll have what it takes to begin your career in companies that use Swift, or even to launch your own app!</p>
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
      <button class="btn btn-primary btn-lg">Continue</button>
    </div>
  </div>
</section>

<section id="videos" class="container">
  <div class="col-md-8 col-md-offset-2 video-list-item">
    <div class="col-md-4 text-center">
      <i class="fa fa-check"></i>
    </div>
    <div class="col-md-8">
      <h3>Learning Variables</h3>
      <p>Description of the video goes here</p>
    </div>
  </div>

  <div class="col-md-8 col-md-offset-2 video-list-item">
    <div class="col-md-4 text-center">
      <i class="fa fa-check"></i>
    </div>
    <div class="col-md-8">
      <h3>Learning Variables</h3>
      <p>Description of the video goes here</p>
    </div>
  </div>

  <div class="col-md-8 col-md-offset-2 video-list-item">
    <div class="col-md-4 text-center">
      <i class="fa fa-check"></i>
    </div>
    <div class="col-md-8">
      <h3>Learning Variables</h3>
      <p>Description of the video goes here</p>
    </div>
  </div>
</section>

@stop
