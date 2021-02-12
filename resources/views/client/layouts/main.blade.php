<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/client/index.css">


    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>@yield('title')</title>

    <style>


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

    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mynav" style="padding:20px 0px">
      <div class="container-fluid" style="padding-left:4vw"> 
        <img src="/assets/client/images/Flick Software Logo Blue.png" class="img-fluid" style="width:15%;margin-right:18%;cursor:pointer"  alt="" onclick="window.open('/','_self');">
        <p></p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          </ul>
          <div class="" style="padding-right:4vw">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:1.3vw;font-family:HKGroteskBold">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/portofolio" style="margin-right:65px;color:black">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#whatWeProvide" style="margin-right:65px;color:black;">Services</a>
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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>