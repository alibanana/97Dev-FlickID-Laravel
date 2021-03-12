<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/client/index.css">

    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <link rel="icon" href="http://example.com/favicon.png">

    <!-- webicon -->
    <link rel="shortcut icon" type="image/jpg" href="/assets/client/images/flick-logo-blue.svg"/>

    <title>Flick Software</title>
    <style>
        /* Portrait Ipad */
        @media only screen and (min-device-width: 1024px) and (max-device-height: 1366px) and (-webkit-min-device-pixel-ratio: 2)  and (orientation: portrait)  {

        .page-container{
          padding-left:8.5% !important;
          padding-right:8.5% !important;
        }
        #buttonContactUs{
          width:20vw !important;
          border:2px solid #3F92D8 !important;
          text-align:center;
          padding:1vw 1vw !important;
          margin-top:1vw
        }

        #illustration{
          width:13vw !important
        }
        .what-we-have-build{
          padding-right:8.5% !important
        } 
        }
      html{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        scroll-behavior: smooth;
      }
      body{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/background-image-landing-page-with-hexagons.png");
        background-position:right top;
        background-repeat: no-repeat;
        background-size: 65%;
      } 

      .experienceBG{
        /* width:100%;
        height:100%;
        margin:0;
        padding:0; */
        background-image: url("/assets/client/images/landing_page_bg_3.png");
        background-position:right top;
        background-repeat: no-repeat;
        background-size: 100%;
        
      } 

      .topFooterBG{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/landing_page_bg_4.png");
        background-position:left top;
        background-repeat: no-repeat;
        background-size: 93%;
      }

      /* Container holding the image and the text */
      .container {
        position: relative;
        text-align: center;
      }

      /* Centered text */
      .centered {
        position: absolute;
        top: 50%;
        left: 85%;
        transform: translate(-50%, -50%);
        text-align:left;
      }
      /* Container holding the image and the text */
      .containerImage {
        position: relative;
        text-align: center;
        color: black;
      }

      /* Top left text */
      .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
      }

      /* Top left text */
      .top-left2 {
        position: absolute;
        top: 8px;
        left: 16px;
      }

      /* Top right text */
      .top-right {
        position: absolute;
        top: 8px;
        right: 16px;
      }
      .flick-partners  img{
        margin-top:5vw;
      }
       /* i pad */
      @media only screen and (device-width: 768px) {
        
        #navbar_text{
          font-size: 3vw !important;
          padding-left: 6%;
        }
        #buttonContactUs{
          border: 3px solid  #3F92D8 !important;
          text-align: center;
          padding: 10px !important;
          width: 60% !important;
          margin-top: 10px;
        }
        #mynav img{
          margin-right: 5% !important;
          width: 30% !important;
        }
       
      }

      /* mobile */
      @media only screen and (max-width: 600px) {
        
        #our-partners{
          font-size:10vw !important;
          margin-top:10vw
        }
        .flick-partners{
          padding-left:5vw !important;
          padding-right:5vw !important
        }
        .flick-partners .partner{
          padding:2vw
        }
        .flick-partners img{
          max-width:25vw;
        }
        .DesktopView{
          display: none !important;
        }
        #footer_h2{
          font-size:6vw !important
        }
        #footer_a{
          font-size:3vw !important;
          margin-top: 2vw !important;
        }
        .experienceSection{
          padding-top: 4vw !important;
        }
        .experienceSection #teamText{
          font-size:4vw !important
        }
        .withUsSection{
          padding-top: 8vw !important;
        }
        #readyToStartWithUs{
          font-size: 4.5vw !important;
        }
        #withUsHr{
          width:70vw !important;
          margin-top:8vw !important;
        }
        #jakartaText{
          margin-top: 0vw !important;
        }
        #noTelp{
          margin-bottom: 0px !important;
        }
        .socmedLogo a{
          margin-right: 10px !important;
          margin-top: 10px !important
        }
        .buttonBlue{
          padding:2vw 3.5vw;
          font-size: 4vw !important
        }
        body{
          background-image: none !important;
          
        }
        #titleText{
          font-size: 10vw !important;
          padding-top: 5vw !important
        }
        #descriptionText{
          font-size: 4vw !important;
          padding-top:4vw !important
        }
        #flickLogo{
          font-size: 7vw !important
        }
        #navbar_text{
          font-size: 5vw !important;
        }
        #buttonContactUs{
          border: 3px solid  #3F92D8 !important;
          text-align: center !important;
          padding: 0px !important;
          width: 50% !important;
          margin-top: 10px !important;
        }
        .MobileView{
          display: block !important;
        }
        .marginTopPortofolio{
          margin-top:4vw !important
        }
        .portofolioTextAndImage{
          padding-left: 4% !important;
          padding-top:15% !important

        }
        .portofolioMobileRight{
          padding-left: 25% !important;
          padding-top:15% !important
        }
        .portofolioTextAndImage #illustration{
          width: 25vw !important;
        }
        .portofolioTextAndImage #illustrationDesktop{
          width: 40vw !important;
        }
        
        .portofolioTextAndImage #logo{
          width: 25vw !important;
        }
        .portofolioTextAndImage p{
          font-size: 3.5vw !important;
        }
        .portofolioTextAndImage a{
          font-size: 4vw !important;
        }
        #portofolioTextPadding{
          padding-top: 0px !important;
        }
        #desktopMarginTop{
          margin-top: 1vw !important;
        }
        #portofolioTextWidth{
          width: 80% !important;
        }
        #portofolioTextWidthRight{
          width:100%  !important
        }
        .portofolioTextAndImageInner{
          margin-left: 15px !important;
        }
        .hexagon img{
          width:100% !important 
        }

      }
    
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        outline: black;
        background-size: 100%, 100%;
        border-radius: 50%;
        background-image: none;
      }

      .carousel-control-next-icon:after
      {
        content: '>';
        font-size: 30px;
        color: blue;
      }

      .carousel-control-prev-icon:after {
        content: '<';
        font-size: 30px;
        color: blue;
      }
      
   
      
     

    </style>
  </head>
  <body >
    <!-- START OF NAVBAR -->
    <div class="row m-0" style="padding:2vw 4vw">
      <div class="col-md-12 p-0">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid page-container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <p></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              </ul>
              <div class="" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar_text" style="font-size:1.3vw;font-family:HKGroteskBold">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/portofolio" style="margin-right:65px;color:black">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link DesktopView" href="#whatWeProvide" style="margin-right:65px;color:black;">Services</a>
                    <a class="nav-link MobileView" href="#whatWeProvideMobile" style="margin-right:65px;color:black;display:none">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about-us" style="margin-right:65px;color:black">The Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/join-us" style="margin-right:65px;color:black">Career</a>
                  </li>
                  <li class="nav-item" style="">
                    <a class="nav-link" id="buttonContactUs" href="/contact-us" style="color:#3F92D8;background-color:#ffff;margin-right:16px;padding:0.5vw 3vw;border-radius:1vw">Contact us!</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- END OF NAVBAR -->

    <!-- START OF TOP CONTENT-->
    <div class="row m-0 ">
      <div class="col-md-6 wow fadeInLeft" style="padding-left:8.5%" id="paddingLeft"> 
        <div style="display:flex;align-items: center;margin-top:6vw">
          <img src="/assets/client/images/flick-logo-blue.svg" class="img-fluid" style="width:13%;"  id="flickLogo">
          <h2 style="font-family:HKGroteskRegular;color:#3F92D8;margin-left:15px;font-size:3vw" id="flickLogo"><span style="font-family:HKGroteskBlack"> <b>Flick</b></span>Software</h2>
        </div>
        <p  style="font-size:5vw;margin:2vw 0vw;font-family:HKGroteskBlack;line-height:1.2" id="titleText"> <b> Build and grow<br>together with us</b></p>
        <p style="font-size:1.8vw;margin-bottom:6vw;font-family:HKGroteskBold" id="descriptionText"><span style="font-family:HKGroteskRegular">We develop softwares from</span>  <b>mobile apps, <br> web apps, even advanced app-based services</b> </p>
        <a style="" class="buttonBlue" href="/portfolio">Discover our works</a>
      </div>

      <div class="col-md-6 p-0">
        <!-- <img src="/assets/client/images/desktop-icon.svg" style="width:25%" alt=""> -->
        <!--<img src="/assets/client/images/background-image-landing-page-with-hexagons.png" class="img-fluid" style="margin-top:-160px;position:absolute" alt="">-->
      </div>
    </div>
    <!-- END OF TOP CONTENT -->

      
    <!-- WHAT WE PROVIDE MOBILE -->
    <div class="row m-0 MobileView" style="padding-left:8.5%;padding-top:14vw;padding-bottom:4vw;display:none">
      <div class="col-12 p-0" id="whatWeProvideMobile" >
        <p style="font-size:10vw;font-family:HKGroteskBlack" > <b>What we provide</b></p>
      </div>
    </div>

    <div class="row m-0 MobileView" style="padding-top:4vw;padding-bottom:4vw;display:none">
      <div class="col-12 p-0" >
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($project_types as $project_type)
            @if($loop->iteration == '1')

            <div class="carousel-item active">
            @else
            <div class="carousel-item ">

            @endif
              <div style="text-align: center;">
                  <img src="{{ asset($project_type->ilustration_file) }}" style="width:40vw" alt="">
                  <p style="font-size:8vw;font-family:HKGroteskBlack;margin-top:15px">{{ $project_type->type }}</p>
                  <div style="padding: 0px 10px">
                    <p style="font-size:5vw;font-family:HKGroteskRegular">{{ $project_type->description }}</p>
                  </div>
                  <a href="/portfolio" target="_blank" style="font-size:6vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See our work <i style="font-size:6vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
            @endforeach

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>



    <!-- END OF WHAT WE PROVIDE MOBILE -->



    <!-- START OF WHAT WE PROVIDE -->
    <div class="row m-0 DesktopView"style="padding-left:8.5%;padding-top:19vw;padding-bottom:14vw">
      <div class="col-md-12"   id="whatWeProvide" >
        <p style="font-size:5vw;font-family:HKGroteskBlack" > <b>What we provide</b></p>
      </div>
      @foreach ($project_types as $project_type)
        <div class="col-4 wow fadeInUp" data-wow-delay="0.5s"style="padding-top:4vw">
          <div >
            <img src="{{ asset($project_type->ilustration_file) }}" style="width:8vw" alt="">
            <p style="font-size:2.3vw;font-family:HKGroteskBlack;margin-top:15px">{{ $project_type->type }}</p>
            <div style="padding-right:100px">
              <p style="font-size:1.2vw;font-family:HKGroteskRegular">{{ $project_type->description }}</p>
            </div>
            <a href="/portfolio" target="_blank" style="font-size:1.3vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See our work <i style="font-size:1.3vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </div>
      @endforeach
    </div>

    <!-- END OF WHAT WE PROVIDE -->
  
    <!-- WHAT WE HAVE BUILD -->
    <!-- mobile view -->
    <div class="row m-0 MobileView" style="padding-left:8.5%;padding-top:14vw;padding-bottom:4vw;display:none">
      <div class="col-12 p-0" >
        <p style="font-size:10vw;font-family:HKGroteskBlack" id="whatWeProvide"> <b>What we've build</b></p>
        <p style="font-size:4vw;font-family:HKGroteskRegular">We help business to grow to their fullest <br> potential <span style="font-family:HKGroteskBlack">through technology</span></p>

      </div>
    </div>
    <!-- end of mobile view -->
    <div class="row m-0 " style="padding-bottom:7vw" >
    <?php $counter = 0;
    $related_project = null; ?>
    @foreach($featured_projects as $featured_project)
      <?php $flag = 0 ?>
      @if($loop->first)
        <?php $flag = 1 ?>
      @elseif ($loop->last)
        <?php $flag = 2 ?>
      @endif

      @if($counter == 0)
        @if($featured_project->project->project_type->type == 'Mobile Apps')
          <x-mobile-left :flag="$flag" :relatedProject="$related_project" :featuredProject="$featured_project" />
        @else
          <x-desktop-left :flag="$flag" :relatedProject="$related_project" :featuredProject="$featured_project" />
        @endif
        <?php $counter++ ?>
      @else
        @if($featured_project->project->project_type->type == 'Mobile Apps')
          <x-mobile-right :flag="$flag" :relatedProject="$related_project" :featuredProject="$featured_project" />
        @else
          <x-desktop-right :flag="$flag" :relatedProject="$related_project" :featuredProject="$featured_project" />
        @endif
        <?php $counter = 0 ?>
      @endif
    @endforeach

    </div>
    <!-- mobile view -->
    <div class="row m-0 MobileView" style="padding-left:8.5%;padding-top:4vw;padding-bottom:4vw;display:none">
      <div class="col-12 p-0" >
        <p style="font-size:10vw;font-family:HKGroteskBlack;line-height:1.2" id="whatWeProvide"><b>Explore more on <br> our fine works</b></p>
        <div>
          <a href="/portofolio" style="font-size:6vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:6vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      </div>
    </div>
    <!-- end of mobile view -->
    <!-- END OF WHAT WE HAVE BUILD -->

    <!-- START OF A TEAM THAT HAS YEARS OF EXPERIENCE -->
    <!-- <div class="row m-0 experienceBG" style="z-index:99 !important" >
      <div class="col-md-12 p-0">
        <div style="padding-left:8.5%;color:white" >
          <p  style="font-size:5vw;margin-top:4vw;font-family:HKGroteskBlack;line-height:1.2"> <b>A team that has years of experience <br> on developing technologies</b></p>
          <p style="font-size:1.9vw;margin-bottom:3vw;font-family:HKGroteskRegular">Built by <span style="font-family:HKGroteskBold"> young minds  </span>to deliver techonlogies that we needs.</p>
          <div style="display:flex"> 
            <div style="background-color:#FFA5A5;width:29vw;border-radius:1.5vw;color:#142850;padding:1.9vw;">
              <div style="display:flex;justify-content:space-between;align-items:center ">
                <div> 
                  <p style="font-size:2.3vw;font-family:HKGroteskBlack;margin-bottom:0px !important"> <b>About Us</b></p>
                  <p style="font-size:1.7vw;font-family:HKGroteskRegular;line-height:1.2;margin-bottom:0px !important">Know more about how <br>we work in action</p>
                </div>
                <a href="/about-us" style="color:white">
                  <i class="fas fa-chevron-circle-right" style="font-size:3vw"></i>
                </a>
              </div>
            </div>

            <div style="background-color:#81D1C7;width:29vw;border-radius:1.5vw;color:#142850;padding:1.7vw; margin-left:80px">
              <div style="display:flex;justify-content:space-between;align-items:center ">
                <div> 
                  <p style="font-size:2.3vw;font-family:HKGroteskBlack;margin-bottom:0px !important"> <b>Join the team!</b></p>
                  <p style="font-size:1.7vw;font-family:HKGroteskRegular;line-height:1.2;margin-bottom:0px !important">Join our journey to enable <br> and deliver technologies</p>
                </div>
                <a href="" style="color:white">
                  <i class="fas fa-chevron-circle-right" style="font-size:3vw"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 p-0">

          
          <div style="padding-left:8.5%;padding-top:10vw;">
            <p style="font-size:5vw;font-family:HKGroteskBlack;color:#142850"> Ready to start a project with us?</p>

            <div style="margin-top:2.5vw">
              <a href="" style="border:4px solid #3F92D9;padding:1vw 50px;text-decoration:none;font-family:HKGroteskBold;border-radius:1.5vw;color:#3F92D9;font-size:2vw;">Let's Talk! <span style="font-size:2vw;margin-left:5px;margin-top:200px !important"> <i  class="fas fa-long-arrow-alt-right"></i></span></a>
            </div>
            <div>
              <hr style="margin-top:11vw;width:80vw;height:0.2vw;color:grey">
            </div>
              <div class="row m-0" >
                <div class="col-md-6" style="color:#142850">
                    <p style="font-size:3vw ;font-family:HKGroteskBlack;margin-top:3vw;color:#142850">Jakarta</p>
                    <p style="font-family:HKGroteskRegular;font-size:1.8vw;margin-top:1vw"> <b>+62 811 8128 171</b></p>
                    <p style="font-family:HKGroteskRegular;font-size:1.8vw;margin-top:1vw">Jl. Harapan 3 No. 5, Malayka Residence <br> Bintaro, Pesanggrahan, Jakarta Selatan, 12330</p>
                </div>
                <div class="col-md-6" style="padding-left:9vw">
                    <p style="font-size:3vw ;font-family:HKGroteskBlack;margin-top:3vw;color:#142850">Follow us!</p>
                    <div style="display:flex">
                        <a href="" style="margin-top:20px !important;margin-right:40px !important">
                            <img src="/assets/client/images/linkedin.png" class="img-fluid"  alt="" style="width:3vw"> 
                        </a>
                        <a href="" style="margin-top:20px !important;margin-right:40px !important">
                            <img src="/assets/client/images/instagram.png"  alt="" style="width:3vw"> 
                        </a>
                        <a href="" style="margin-top:20px !important;margin-right:40px !important">
                            <img src="/assets/client/images/youtube.png"  alt="" style="width:4vw"> 
                        </a>
                    </div>
                </div>
              </div>
          </div>
 
      </div>
      <div class="col-md-12 p-0" style="margin-bottom:15vw">
      </div>
    </div> -->

    <!-- our partners section -->

    <div class="row m-0" style="padding-bottom:10vw;">
      <div class="col-md-12">
        <div style="text-align:center"  class="">
          <p style="font-size:5vw;font-family:HKGroteskBlack;margin-bottom:0px" id="our-partners" > <b>Our Partners</b></p>
        </div>
        <!--
        <div class="MobileView" style="display:none;text-align:center">
          <p style="font-size:10vw;font-family:HKGroteskBlack;margin-bottom:0px;margin-top:7vw" > <b>Our Partners</b></p>
          <img src="/assets/client/images/partners/partners_mobile.png" class="img-fluid"  alt="">
        </div>
        -->
        <div class="flick-partners wow fadeInRight" style="display:flex;justify-content:space-around;flex-wrap:wrap;padding-left:23vw;padding-right:23vw;align-items:center">
          <div class="partner"> 
            <img src="/assets/client/images/partners/agratek.png" style="" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/artajasa.png" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/dartmedia.png"  alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/doku.png" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/flip.png" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/gv.png" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/harrisma.png" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/kumparan.png" alt="">
          </div>
          <div class="partner"> 
            <img src="/assets/client/images/partners/ninja.png" alt="">
          </div>

          <div class="partner"> 
            <img src="/assets/client/images/partners/nu.png" alt="">
          </div>

          <div class="partner"> 
            <img src="/assets/client/images/partners/reska.png" alt="">
          </div>

          <div class="partner"> 
            <img src="/assets/client/images/partners/sicepat.png" alt="">
          </div>


          <div class="partner"> 
            <img src="/assets/client/images/partners/verihub.png" alt="">
          </div>
          
          <div class="partner"> 
            <img src="/assets/client/images/partners/mobilocal.png"  alt="">
          </div>

          <div class="partner"> 
            <img src="/assets/client/images/partners/xfers.png"  alt="">
          </div>
        </div>

      </div>
    
    </div>

    <!-- end of our partners section -->

    <div class="row m-0 experienceSection">
      <div class="col-md-12 p-0 ">
        <div class="containerImage">
            <div style="text-align:left">   
              <img src="/assets/client/images/landing_page_bg_3.png" alt="" style="width:100%">
            </div>
            <div class="top-left" style="text-align:left">
            
              <div style="padding-left:8.5%;color:white;width:90vw !important" >
                <p  style="font-size:5vw;margin-top:4vw;font-family:HKGroteskBlack;line-height:1.2" id="teamText"> <b>A team that has years of experience on developing technologies</b></p>
                <p style="font-size:1.9vw;margin-bottom:3vw;font-family:HKGroteskRegular">Built by <span style="font-family:HKGroteskBold"> young minds  </span>to deliver techonlogies that we needs.</p>
                <div style="display:flex"> 
                  <div class="wow fadeInUp" style="background-color:#FFA5A5;width:29vw;border-radius:1.5vw;color:#142850;padding:1.9vw;">
                    <div  style="display:flex;justify-content:space-between;align-items:center">
                      <div> 
                        <p style="font-size:2.3vw;font-family:HKGroteskBlack;margin-bottom:0px !important"> <b>About Us</b></p>
                        <p style="font-size:1.7vw;font-family:HKGroteskRegular;line-height:1.2;margin-bottom:0px !important">Know more about how <br>we work in action</p>
                      </div>
                      <a href="/about-us" style="color:white">
                        <i class="fas fa-chevron-circle-right" style="font-size:3vw"></i>
                      </a>
                    </div>
                  </div>

                  <div class="wow fadeInUp" style="background-color:#81D1C7;width:29vw;border-radius:1.5vw;color:#142850;padding:1.7vw; margin-left:7vw">
                    <div  style="display:flex;justify-content:space-between;align-items:center ">
                      <div> 
                        <p style="font-size:2.3vw;font-family:HKGroteskBlack;margin-bottom:0px !important"> <b>Join the team!</b></p>
                        <p style="font-size:1.7vw;font-family:HKGroteskRegular;line-height:1.2;margin-bottom:0px !important">Join our journey to enable <br> and deliver technologies</p>
                      </div>
                      <a href="/join-us" style="color:white">
                        <i class="fas fa-chevron-circle-right" style="font-size:3vw"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            
              <div style="text-align:left !important;padding-top:10vw" class="withUsSection">
                <div style="padding-left:8.5%">
                    <p id="readyToStartWithUs" style="font-size:5vw;font-family:HKGroteskBlack;color:#142850"> Ready to start a project with us?</p>

                    <div class="wow fadeInLeft" style="margin-top:2.5vw">
                        <a href="/contact-us" style="border:4px solid #3F92D9;padding:1vw 4vw;text-decoration:none;font-family:HKGroteskBold;border-radius:1.5vw;color:#3F92D9;font-size:2vw;">Let's Talk! <span style="font-size:2vw;margin-left:5px;margin-top:200px !important"> <i  class="fas fa-long-arrow-alt-right"></i></span></a>
                    </div>
                    <div>
                        <hr id="withUsHr" style="margin-top:11vw;width:80vw;height:0.2vw;color:grey">
                    </div>
                    <div class="row m-0" >
                        <div class="col-6" style="color:#142850">
                            <p id="jakartaText" style="font-size:3vw ;font-family:HKGroteskBlack;margin-top:3vw;color:#142850">Jakarta</p>
                            <p id="noTelp" style="font-family:HKGroteskRegular;font-size:1.8vw;margin-top:1vw"> <b>+62 811 8128 171</b></p>
                            <p style="font-family:HKGroteskRegular;font-size:1.8vw;margin-top:1vw">Jl. Harapan 3 No. 5, Malayka Residence <br> Bintaro, Pesanggrahan, Jakarta Selatan, 12330</p>
                        </div>
                        <div class="col-6" style="padding-left:9vw">
                            <p id="jakartaText" style="font-size:3vw ;font-family:HKGroteskBlack;margin-top:3vw;color:#142850">Follow us!</p>
                            <div style="display:flex" class="socmedLogo">
                                <a href="" style="margin-top:20px ;margin-right:40px ">
                                    <img src="/assets/client/images/linkedin.png" class="img-fluid"  alt="" style="width:3vw"> 
                                </a>
                                <a href="" style="margin-top:20px ;margin-right:40px ">
                                    <img src="/assets/client/images/instagram.png"  alt="" style="width:3vw"> 
                                </a>
                                <a href="" style="margin-top:20px ;margin-right:40px ">
                                    <img src="/assets/client/images/youtube.png"  alt="" style="width:4vw"> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <x-with-us :flag="1" /> -->

    <!-- END OF A TEAM THAT HAS YEARS OF EXPERIENCE -->

    <!-- Start of footer -->
    <div class="row m-0" style="padding-left:8.5%;background-color:#EDF7FF;padding-bottom:4vw;padding-right:4vw;padding-top:5vw">
        <div class="col-md-6 p-0" > 
          <div style="display:flex;align-items: center;align-content: flex-start;">
            <div style="display:flex;align-items: center">
              <img src="/assets/client/images/flick-logo-blue.svg" class="img-fluid" style="width:4vw" alt="">
              <h2 id="footer_h2" style="font-family:HKGroteskRegular;color:#3F92D8;margin-left:15px;font-size:2.5vw"><span style="font-family:HKGroteskBlack"> <b>Flick</b></span>Software</h2>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div style="display:flex;align-items: center;justify-content: space-between;font-size:1.4vw;align-content:flex-end" id="footer_a">
            <a class="nav-link" aria-current="page" href="/portofolio" style="margin-right:2vw;color:#3F92D8;font-family:HKGroteskBold;">Portfolio</a>
            <a class="nav-link" aria-current="page" href="/#whatWeProvide" style="margin-right:2vw;color:#3F92D8;font-family:HKGroteskBold;">Services</a>
            <a class="nav-link" aria-current="page" href="/about-us" style="margin-right:2vw;color:#3F92D8;font-family:HKGroteskBold;">The Team</a>
            <a class="nav-link" aria-current="page" href="/join-us" style="color:#3F92D8;font-family:HKGroteskBold;">Career</a>
          </div>
        </div>
        <div class="col-12" style="text-align:right">
          <p id="footer_a" style="font-size:1.5vw;font-family:HKGroteskRegular;color:#142850;margin-bottom:0px !important;margin-top:13px;padding-right:16px">&copy;2021 PT. Kreigan Sentral Teknologi</p>
        </div>
    </div>
    <!-- end of footer -->
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



    <!-- WOW JS -->
    <script src="/WOW-master/dist/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
  
  </body>
</html>