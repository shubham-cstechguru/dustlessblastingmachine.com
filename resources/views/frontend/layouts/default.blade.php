@php
$setting = App\Model\Setting::findOrFail(1);
$blog = App\model\Blog::latest()->paginate(2);
$cities = App\model\City::get();
$countries = App\model\Country::get();
$date = date('Y');

$whatsapp = preg_replace('/[+\(\)\-\" "]+/', '', $setting->whatsapp);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" type="image/png" sizes="20x20" href="{{url('imgs/'.$setting->fav_icon)}}">
  <title>@yield('title')</title>
  <meta name="keywords" content="@yield('keywords')">
  <meta name="description" content="@yield('description')">
  <link rel="canonical" href="@yield('canonical')" />
  <meta name="author" content="Shrawan Choudhary">
  <!-- opengraph tag -->
  <meta property="og:site_name" content="Dustless blastingmachine">
  <meta property="og:url" content="https://www.dustlessblastingmachine.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:image" content="" />
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="Dustless blastingmachine">
  <meta itemprop="description" content="@yield('description')">
  <meta itemprop="image" content="">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="@yield('title')">
  <meta name="twitter:description" content="@yield('description')">
  <meta name="twitter:site" content="@Dustless blastingmachine">
  <meta name="twitter:creator" content="@Suncity Group">
  <meta name="twitter:image:src" content="">
  <meta name="csrf-token" content="{{csrf_token()}}">
  {{Html::style('css/bootstrap.min.css')}}
  {{Html::style('css/style.css')}}
  {{Html::style('css/responsive.css')}}
  {{Html::style('icomoon/style.css')}}
  {{Html::style('css/fontawesome.css')}}

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-16R44MXLWJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-16R44MXLWJ');
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link rel="apple-touch-icon" href="#" />
  <style>
    .sticky-container {
      /*background-color: #333;*/
      padding: 0px;
      margin: 0px;
      position: fixed;
      right: -162px;
      top: 230px;
      width: 200px;

    }

    /* style p when hover li */
    .sticky-first li:hover p {
      float: right;
    }

    .sticky li {
      list-style-type: none;
      background-color: #333;
      color: #efefef;
      height: 43px;
      padding: 0px 10px;
      margin: 0px 0px 1px 0px;
      -webkit-transition: all 0.25s ease-in-out;
      -moz-transition: all 0.25s ease-in-out;
      -o-transition: all 0.25s ease-in-out;
      transition: all 0.25s ease-in-out;
      cursor: pointer;


    }

    .sticky li i {
      font-size: 24px;
    }

    .sticky li:hover {
      margin-left: -115px;
      /*-webkit-transform: translateX(-115px);
		-moz-transform: translateX(-115px);
		-o-transform: translateX(-115px);
		-ms-transform: translateX(-115px);
		transform:translateX(-115px);*/
      /*background-color: #8e44ad;*/

    }

    .sticky li img {
      float: left;
      margin: 5px 5px;
      margin-right: 10px;

    }

    .sticky li p {
      padding: 0px;
      margin: 0px;
      text-transform: uppercase;
      line-height: 43px;

    }
  </style>
</head>

<body class="">
  <div class="container show_body">
    @section('header')

    <div class="row py-1" style="background:#50adb1;">
      <div class="col-lg-6 col-6 text-left">
        <span class="header-mobile"><a href="tel:{{ $setting->mobile_no }}" style="position:relative;" class="f-13"><i class="icon-phone insta-bg" style="color:#fff;margin-left: 12px;"></i><span style="color:#fff;">{{ $setting->mobile_no }}</span></a></span>
      </div>
      <div class="col-lg-6 col-6 pull-right text-right" style="position:relative;">
        <span class="header-mobile f-13" onclick="open_pop()" style="color:#fff;margin-right:12px;">Send Email <i class="icon-envelop insta-bg" style="color:#fff;"></i></span>
      </div>
    </div>
    <div class="row py-3" style="background-color: #fff;-webkit-box-shadow: 0px 6px 10px -5px rgba(0,0,0,0.75);position: sticky;top: 0;z-index: 2;">
      <div class="col-sm-4 col-8 align-self-center">
        <a href="{{url('/')}}" class="navbar-brand my_logo" style="padding:0px;margin-left:15px;">
          @if($setting->logo !='')
          <img src="{{ url('imgs/'.$setting->logo) }}" alt="logo">
          @else
          {{ $setting->sitename }}
          @endif
        </a>
        <a href="tel:{{ $setting->mobile_no }}" class="mobile_no"><i class="icon-phone insta-bg" style="margin-left: 12px;"></i> {{ $setting->mobile_no }}</a>
      </div>
      <div class="col-sm-8 col-4">
        <nav class="navbar navbar-expand-lg navbar-light float-right">

          <button class="navbar-toggler" style="margin-left:auto;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-5 mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item" style="text-align:right;">
                <a class="nav-link" href="{{ url('/') }}">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/blog') }} ">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </div>

    <!--        <div class="row pt-3 pb-3">-->
    <!--              <div class="col-lg-6 col-6 text-left">-->
    <!--                <span class="header-mobile"><a href="tel:{{ $setting->mobile_no }}" style="position:relative;"><i class="icon-phone insta-bg" style="position: relative;padding: 13px;border-radius: 50%;-->
    <!--background:#3498db;left: 12px;top: 1px;color:#fff;"></i><span style="background:#3498db;color:#fff;padding:10px;border-radius:3px;">{{ $setting->mobile_no }}</span></a></span>-->
    <!--              </div>-->
    <!--              <div class="col-lg-6 col-6 pull-right text-right" style="position:relative;">-->
    <!--                <span class="header-mobile" onclick="open_pop()" style="background:#3498db;color:#fff;padding:10px;margin-right:35px;border-radius:3px;">Send Email <i class="icon-envelop insta-bg" style="position: relative;padding: 13px;border-radius: 50%;-->
    <!--background:#3498db;right: -33px;top: 1px;color:#fff;"></i></span>-->
    <!--              </div>-->
    <!--        </div>-->
    <!--        <div class="row" style="background-color: #3498DB;">-->
    <!--          <div class="col-lg-12">-->
    <!--           <nav class="navbar navbar-expand-lg navbar-light">-->
    <!--                 <a href="{{url('/')}}" class="navbar-brand" style="padding:0px;margin:0px;">-->
    <!--                    <img src="{{ url('imgs/'.$setting->logo) }}" style="width:50px;">-->
    <!--                </a>-->
    <!--              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--                <span class="navbar-toggler-icon"></span>-->
    <!--              </button>-->

    <!--              <div class="collapse navbar-collapse ml-5"  id="navbarSupportedContent">-->
    <!--                <ul class="navbar-nav mr-auto" >-->
    <!--                  <li class="nav-item active" style="text-align:right;">-->
    <!--                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>-->
    <!--                  </li>-->
    <!--                  <li class="nav-item">-->
    <!--                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>-->
    <!--                  </li>-->
    <!--                  <li class="nav-item">-->
    <!--                    <a class="nav-link" href="{{ url('/product') }}">Product</a>-->
    <!--                  </li>-->
    <!--                  <li class="nav-item">-->
    <!--                    <a class="nav-link" href="{{ url('/blog') }} ">Blog</a>-->
    <!--                  </li>-->
    <!--                  <li class="nav-item">-->
    <!--                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>-->
    <!--                  </li>-->
    <!--                </ul>-->

    <!--              </div>-->
    <!--            </nav>-->
    <!--          </div>-->
    <!--        </div>-->


    @show


    @yield('contant')


    @section('footer')
    <section class="row footer-section">
      <div class="container mb-4">
        <div class="section-title" style="color: #fff;">
          <p class="text-center other-heading">LOCATIONS</p>
        </div>
        <div class="city-links text-left">
          @foreach($cities as $c)
          <a href="{{ route('frontcity', $c->slug) }}" class=""><i class="icon-location mr-1"></i>{{ $c->name }}</a>
          @endforeach
        </div>

        <div class="city-links text-left">
          @foreach($countries as $c)
          <a href="{{ route('frontcountry', $c->slug) }}" class=""><i class="icon-location mr-1"></i>{{ $c->name }}</a>
          @endforeach
        </div>
      </div>
      <div class="container">
        <!--<div class="footer-logo text-center">-->
        <!--    <a href="https://www.cbgindustries.in"><img src="https://www.cbgindustries.in/imgs/icon 1.png" alt="" width="70"></a>-->
        <!--</div>-->
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget about-widget">

              <p class="footer-heading">About</p>
              <p><b>Dustless Blasting Machine</b>, more commonly known as sand blasting machine manufacturer, is the operation of forcibly propelling a stream of abrasive material against a surface under high pressure to smooth a rough surface, roughen a smooth surface, shape a surface or remove surface contaminants.</p>

            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget about-widget">
              <p class="footer-heading">Quick Link</p>
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/product') }}">Product</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
              </ul>
              <ul>
                <li><a href="#">Support</a></li>
                <li><a href="#">Terms of Use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget about-widget">
              <p class="footer-heading">Top Blog</p>
              <div class="fw-latest-post-widget">
                @foreach( $blog as $list )
                <div class="lp-item">
                  <div class="lp-thumb set-bg">
                    <a href="{{ url('blog/'. $list->slug)}}">
                      @if($list->image!='')
                      <img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}">
                      @else
                      <img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
                      @endif
                    </a>
                  </div>
                  <div class="lp-content">
                    <p class="footer-blog mb-0">{{ $list->title }}</p>
                    <span>{{ $list->updated_at }}</span>
                    <a href="{{ url('blog/'. $list->slug)}}" class="readmore">Read More</a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget contact-widget">
              <p class="footer-heading">Get in Touch</p>
              <div class="con-info">
                <span><i class="icon-office"></i></span>
                <p> {{ $setting->sitename }} </p>
              </div>
              <div class="con-info">
                <span><i class="icon-location"></i></span>
                <p>{{ $setting->address }}</p>
              </div>
              <div class="con-info">
                <span><i class="icon-whatsapp"></i></span>
                <p>{{ $setting->mobile_no }}</p>
              </div>
              <div class="con-info">
                <span><i class="icon-envelop"></i></span>
                <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="social-links-warp text-center">
        <div class="container">
          <div class="social-links text-center">
            <a href="#" class="instagram"><i class="icon-instagram"></i><span>instagram</span></a>
            <a href="#" class="google-plus"><i class="icon-google-plus"></i><span>g+plus</span></a>
            <a href="#" class="pinterest"><i class="icon-pinterest"></i><span>pinterest</span></a>
            <a href="#" class="facebook"><i class="icon-facebook"></i><span>facebook</span></a>
            <a href="#" class="twitter"><i class="icon-twitter"></i><span>twitter</span></a>
            <a href="#" class="youtube"><i class="icon-youtube"></i><span>youtube</span></a>
            <!--<a href="#" class="tumblr"><i class="icon-tumblr-square"></i><span>tumblr</span></a>-->
          </div>

          <p class="text-white text-center mt-5">Copyright &copy; {{$date}} All rights reserved {{ $setting->sitename }}. Website Design and Developed by A2ZProviders</p>

        </div>
      </div>
    </section>
    @show
  </div>
  <div class="sticky-container">
    <ul class="sticky">
      <li>
        <p><a href="tel:{{ $setting->mobile_no }}"><i class="icon-phone"></i> Call Now</a></p>
      </li>
      <li>
        <p><a href="mailto:{{ $setting->email }}"><i class="icon-envelop"></i> Mail Us</a></p>
      </li>
      <li>
        <p><a href="https://wa.me/{{ $whatsapp }}"><i class="icon-whatsapp"></i> WhatsApp</a></p>
      </li>
    </ul>
  </div>
  <!-- ALL JS FILES -->
  {{ Html::script('js/jquery.min.js') }}
  {{ Html::script('js/popper.min.js') }}
  {{ Html::script('js/bootstrap.min.js') }}
  {{ Html::script('js/ajax.js') }}

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="border: 5px solid #2980b9;">
        <div class="modal-header" style="background:#2980b9;color:#fff;border-top-left-radius:0rem !important;border-top-right-radius:0rem !important;">
          <p class="text-weight modal-title">Send Enquiry</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="ajax_message"></p>
          {{ Form::open(['id'=>'inquiry_form', 'method'=>'post', 'data-url'=> route('ajax-route')]) }}

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_name">Name</label>
                <!--<input type="text" class="form-control" id="user_name" aria-describedby="emailHelp" placeholder="Enter your name">-->
                {{ Form::text('user_name', '', ['class' => 'form-control validate', 'id'=>'user_name', 'placeholder'=>'User name','required'=>'required'])}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_email">Email address</label>
                <!--<input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" placeholder="Enter email">-->
                {{ Form::email('user_email', '', ['class' => 'form-control validate', 'id'=>'user_email', 'placeholder'=>'User email','required'=>'required'])}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_mobile">Mobile Number</label>
                <!--<input type="tel" class="form-control" id="mobile_num" placeholder="Enter mobile number">-->
                {{ Form::tel('user_mobile', '', ['class' => 'form-control validate', 'id'=>'user_mobile', 'placeholder'=>'User mobile number','required'=>'required'])}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <!--<input type="text" class="form-control" id="country" aria-describedby="emailHelp" placeholder="Enter country">-->
                {{ Form::text('country', '', ['class' => 'form-control validate', 'id'=>'country', 'placeholder'=>'Enter Country','required'=>'required'])}}
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="user_message">Enquiry text</label>
            <!--<textarea class="form-control" id="enquiry_msg" rows="3"></textarea>-->
            {{ Form::textarea('message', '', ['class' => 'form-control validate', 'id'=>'user_message', 'placeholder'=>'Enter Message','required'=>'required', 'rows'=>3])}}
          </div>
          <button class="btn" type="submit" style="background:#2980b9 !important;color:#fff">Send Inquiry</button>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  {{ Html::script('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js') }}
  <script>
    function open_pop() {
      $('.modal').modal('show');
    }
    $('.responsive').slick({

      infinite: true,
      speed: 3000,
      slidesToShow: 4,
      slidesToScroll: 4,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $(document).ready(function() {

      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('body').addClass('scrolled');
        } else {
          $('body').removeClass('scrolled');
        }
      });

      $('#scroll-to-top').click(function() {
        $("html, body").animate({
          scrollTop: 0
        }, 600);
        return false;
      });

    });
  </script>
</body>

</html>