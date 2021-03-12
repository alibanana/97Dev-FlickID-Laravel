<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/client/index.css">

    <!-- CSS -->
    
    <!-- <link rel="stylesheet" type="text/css" href="/dropzone-5.7.0/dist/min/dropzone.min.css"> -->

    <!-- JS -->
    <!-- <script src="/dropzone-5.7.0/dist/min/dropzone.min.js'" type="text/javascript"></script> -->

    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- wow js -->
    <link rel="stylesheet" href="/WOW-master/css/libs/animate.css">

    <!-- webicon -->
    <link rel="shortcut icon" type="image/jpg" href="/assets/client/images/flick-logo-blue.svg"/>
 
    <title>@yield('title')</title>

    <style>


.drop-zone {
  max-width: 100%;
  height: 14vw;
  padding: 4vw;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 20px;
  cursor: pointer;
  color: #cccccc;
  border: 4px dashed #707070;
  background-color: #EFEFEF;
  border-radius: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #707070;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}

    .navbarText {
      margin-left:100px
    }
    /* Container holding the image and the text */
    .containerImage {
      position: relative;
      text-align: center;
      color: white;
    }

    /* Top left text */
    .top-left {
      position: absolute;
      top: 8px;
      left: 16px;
    }
    .top-right-3{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }
    /* Bottom left text */
    .bottom-left {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;

    }

    /* Top right text */
    .top-right {
      position: absolute;
      top: 8px;
      right: 16px;
    }

    .nav-colored { 
      -webkit-box-shadow: 0 10px 6px -6px  #e5e5e5;
      -moz-box-shadow: 0 10px 6px -6px  #e5e5e5;
      box-shadow: 0 2px 4px -1px rgba(0,0,0,0.25);      background-color:white;
      transition: 0.3s ease-in-out;
    }

    .nav-transparent { 
      background-color:transparent;
      transition: 0.3s ease-in-out;
    }

    .memberCard{
      background-color:#E8F5FF;
      padding:2.4vw;
      border-radius:3vw
    }

    .experienceBG{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/landing_page_bg_3.png");
        background-position:right top;
        background-repeat: no-repeat;
        background-size: 100%;
      }
      .topPortofolioDetail{
        /* width:100%;
        height:100%; */
        margin:0;
        top: 10vw;
        padding:0;
    
        background-image: url("/assets/client/images/Portofolio_Detail_Top_BG.png");
        background-position:left top;
        background-repeat: no-repeat;
        /* background-position: left; */
        background-size: 40%;
      }

      .aboutUsBackground{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/About_Us_Top_Background.png");
        background-position:left top;
        background-repeat: no-repeat;
        background-size: 100%;
      }

      .aboutUsBottomBG{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/About_Us_Bottom_Background.png");
        background-position:left top;
        background-repeat: no-repeat;
        background-size: 100%;
      }
      .portofolioBG{
        /* width:100%;
        height:100%; */
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/Portofolio_BG_Top.png");
        background-position:top right;
        background-repeat: no-repeat;
        background-size: 30%;
      }
      .project_detail_BG{
        /* width:100%;
        height:100%; */
        margin:0;
        /* padding:20vw; */
        background-image: url("/assets/client/images/PortofolioDetail_Detail_BG.png");
        background-position:center;
        background-repeat: no-repeat;
        background-size: 80%;
      }

        /* Portrait Ipad */
        @media only screen and (min-device-width: 1024px) and (max-device-height: 1366px) and (-webkit-min-device-pixel-ratio: 2)  and (orientation: portrait)  {

          .page-container{
            padding-left:8.5% !important;
            padding-right:8.5% !important;
          }
          .navbar{
            padding:20px 0vw !important
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

      @media only screen and (device-width: 768px) {
        #navbar_text{
          font-size: 3vw !important;
        }
        #buttonContactUs{
          border: 3px solid  #3F92D8;
          text-align: center;
          padding: 0px !important;
          width: 50% !important;
          margin-top: 10px;
        }
        #mynav img{
          margin-right: 5% !important;
          width: 30% !important;
        }
      }

      @media only screen and (max-width: 600px) {

        #navbar_text{
          font-size: 5vw !important;
        }
        .drop-zone__prompt{
          font-size: 4vw !important
        }
        input[type="radio"]{

          width: 15px;
          height: 15px;

        } 
        #buttonContactUs{
          border: 3px solid  #3F92D8;
          text-align: center;
          padding: 0px !important;
          width: 50% !important;
          margin-top: 10px;
        }
        #mynav img{
          margin-right: 5% !important;
          width: 40% !important;
        }
        #paddingTopFooter{
          padding-top: 0px !important;
        }
        #paddingTopFooter p{
          font-size: 2vw!important;
          padding-right: 0px !important;
        }
        #paddingTopFooter img{
          width: 40% !important
        }
        .MobileView{
          display: block !important;
        }
        .DesktopView{
          display: none !important;
        }
        .marginTopPortofolio{
          margin-top:4vw !important
        }
        .portofolioTextAndImage{
          padding-left: 4% !important;
        }
        .portofolioMobileRight{
          padding-left: 0px !important;
        }
        .portofolioTextAndImage #illustration{
          width: 24vw !important;
        }
        .portofolioTextAndImage #illustrationDesktop{
          width: 50vw !important;
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
          width: 40vw !important;
        }
        .portofolioTextAndImageInner{
          margin-left: 15px !important;
        }

        .withUsSection{
          padding-top: 2vw !important;
        }
        #readyToStartWithUs{
          font-size: 4.5vw !important;
        }
        #withUsHr{
          width:70vw !important;
          margin-top:4vw !important;
        }
        #jakartaText{
          margin-top: 0vw !important;
        }
        #noTelp{
          margin-bottom: 0px !important;
          font-size: 1.5vw !important;
        }
        .socmedLogo a{
          margin-right: 10px !important;
          margin-top: 10px !important
        }
        .buttonBlue{
          padding:2vw 3.5vw;
          font-size: 4vw !important
        }
        #portofolioBGImage{
          width: 68% !important;
        }
        #exploreOurFinest{
          font-size: 4.5vw !important
        }

        #project_illustration{
          width: 45vw !important;
        }
        #logoPorto{
          width: 30vw !important;
          margin-top: 5vw !important;
        }
        #titleText{
          font-size: 5vw !important
        }
        #descriptionText{
          font-size: 3vw !important
        }
        #descriptionText2{
          font-size: 2.5vw !important

        }
        #project_detail_img{
          width: 35vw !important;
        }
        .mobilePadding{
          padding: 0vw 5vw !important;
        }
        .joinUsForm label{
          font-size: 4vw !important;
        }
        #contactIllustration{
          width: 100% !important;
        }
        #CotactTitleText{
          font-size: 8vw !important;
        }
        #CotactDescriptionText{
          font-size: 5vw !important;
        }
        #CotactSubDescriptionText{
          font-size: 4vw !important;
        }
        .formContactUs{
          padding: 5vw !important;
        }
        .memberCard img{
          width: 30vw !important;
        }
        .hexagon img{
          width:100% !important 
        }
        
      }

    </style>
  </head>
  <body>
    <!-- NAVBAR DESKTOP -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mynav" style="padding:20px 0px">
      <div class="container-fluid" style="padding-left:60px"> 
          <img src="/assets/client/images/Flick Software Logo Blue.png" class="img-fluid" style="width:15%;margin-right:18%;cursor:pointer"  alt="" onclick="window.open('/','_self');">

     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:1.3vw;font-family:HKGroteskBold;text-align:right !important">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/portofolio" style="margin-right:65px;color:black">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#whatWeProvide" style="margin-right:65px;color:black;">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about-us" style="margin-right:65px;color:black">The Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/join-us" style="margin-right:65px;color:black">Career</a>
              </li>
              @if (Request::path() != 'contact-us')
              <li class="nav-item" style="">
                <a class="nav-link" href="/contact-us" style="color:#3F92D8;border:3px solid #3F92D8;padding:8px 50px;border-radius:15px">Contact us!</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </nav> -->
    <!-- END OF NAVBAR DESKTOP -->
    <!-- START OF NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mynav" style="padding:2vw 4vw">
      <div class="container-fluid page-container" > 
        <img src="/assets/client/images/Flick Software Logo Blue.png" class="img-fluid" style="width:15%;margin-right:18%;cursor:pointer"  alt="" onclick="window.open('/','_self');">
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
                <a class="nav-link" aria-current="page" href="/portofolio" style="margin-right:5vw;color:black;padding-top:10px">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link DesktopView" href="/#whatWeProvide" style="margin-right:5vw;color:black;padding-top:10px">Services</a>
                <a class="nav-link MobileView" href="/#whatWeProvideMobile" style="margin-right:5vw;color:black;padding-top:10px;display:none">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about-us" style="margin-right:5vw;color:black;padding-top:10px">The Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/join-us" style="margin-right:5vw;color:black;padding-top:10px">Career</a>
              </li>
              @if (Request::path() != 'contact-us')
              <li class="nav-item" style="">
              <a class="nav-link" id="buttonContactUs" href="/contact-us" style="color:#3F92D8;background-color:#ffff;margin-right:16px;padding:0.5vw 3vw;border-radius:1vw;border: 3px solid  #3F92D8;">Contact us!</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- END OF NAVBAR -->

        
    @yield('container')

    <script>
      console.log('SCRIPT CALLED');

      var myNav = document.getElementById('mynav');
      window.onscroll = function () { 
          "use strict";
          if (document.body.scrollTop >= 10 || document.documentElement.scrollTop >= 10 ){
              console.log('ADD THE BORDER');
              myNav.classList.add("nav-colored");
              myNav.classList.remove("nav-transparent");
          } 
          else {
              console.log('REMOVE THE BORDER');
              myNav.classList.add("nav-transparent");
              myNav.classList.remove("nav-colored");
          }
      };
    </script>

 
    <!-- WOW JS -->
    <script src="/WOW-master/dist/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>