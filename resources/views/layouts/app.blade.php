<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ReadyCoder</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    ReadyCoder
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/videos') }}">Example Course</a></li>
                    {{-- <li><a href="{{ url('/course') }}">Example Course</a></li> --}}
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
      <img src="http://readyrosie.com/wp-content/uploads/2015/06/ReadyRosie_Logo.png" width=200px />
      <br><br><br>
      <p>
        ©2016 ReadyCoder, Inc.
      </p>
      <p>
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked About" data-event-label="Source: Footer" href="about" id="featurette-12">About</a>
         •
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Careers" data-event-label="Source: Footer" href="jobs" id="featurette-13">Careers</a>
         •
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Blog" data-event-label="Source: Footer" href="http://blog.teamtreehouse.com/" id="featurette-14">Blog</a>
         •
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Affiliate Link" data-event-label="Source: Footer" href="affiliate-program" id="featurette-15">Affiliate Program</a>
         •
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Terms" data-event-label="Source: Footer" href="/terms" id="featurette-16">Terms</a>
         •
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Privacy" data-event-label="Source: Footer" href="/privacy" id="featurette-17">Privacy</a>
         •
        <a href="http://treehouse-marketing.s3.amazonaws.com/press-kit/Treehouse-PressKit-201602.pdf">Press Kit</a>
         •
        <a data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Contact" data-event-label="Source: Footer" href="/support" id="featurette-18">Contact</a>
      </p>
      <ul class="social">
        <li><a title="Twitter" target="_blank" data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Twitter Icon" data-event-label="Source: Footer" href="http://twitter.com/treehouse" id="featurette-19"><svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 24 24" class="twitter-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons-70b7a0b0b6e5d6d486f28879741fe604.svg#twitter-icon"></use></svg></a></li>
        <li><a title="Youtube" target="_blank" data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Youtube Icon" data-event-label="Source: Footer" href="http://youtube.com/user/gotreehouse" id="featurette-20"><svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 24 24" class="youtube-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons-70b7a0b0b6e5d6d486f28879741fe604.svg#youtube-icon"></use></svg></a></li>
        <li><a title="Facebook" target="_blank" data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Facebook Icon" data-event-label="Source: Footer" href="http://facebook.com/teamtreehouse" id="featurette-21"><svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 24 24" class="facebook-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons-70b7a0b0b6e5d6d486f28879741fe604.svg#facebook-icon"></use></svg></a></li>
        <li><a title="Google Plus" target="_blank" data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Google Plus Icon" data-event-label="Source: Footer" href="http://plus.google.com/110278003536476194286/posts" id="featurette-22"><svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 24 24" class="google-plus-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons-70b7a0b0b6e5d6d486f28879741fe604.svg#google-plus-icon"></use></svg></a></li>
        <li><a title="LinkedIn" target="_blank" data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Linkedin Icon" data-event-label="Source: Footer" href="http://linkedin.com/company/treehouse-island-inc-" id="featurette-23"><svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 24 24" class="linked-in-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons-70b7a0b0b6e5d6d486f28879741fe604.svg#linked-in-icon"></use></svg></a></li>
        <li><a title="Instagram" target="_blank" data-featurette="analytics-click-event" data-event-category="button" data-event-action="M: Clicked Instagram Icon" data-event-label="Source: Footer" href="http://instagram.com/teamtreehouse" id="featurette-24"><svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 24 24" class="instagram-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons-70b7a0b0b6e5d6d486f28879741fe604.svg#instagram-icon"></use></svg></a></li>
      </ul>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @include('partials.flash')
    @yield('script')
</body>
</html>
