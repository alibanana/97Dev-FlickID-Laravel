<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/client/index.css">


    <script src="/js/navbar.js"></script>

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
    .nav-colored { 
      -webkit-box-shadow: 0 10px 6px -6px  #e5e5e5;
      -moz-box-shadow: 0 10px 6px -6px  #e5e5e5;
      box-shadow: 0 10px 6px -6px  #e5e5e5;
      background-color:white;
      transition: 0.3s ease-in-out;
    }
    .nav-transparent { 
      background-color:transparent;
      transition: 0.3s ease-in-out;
    }
    </style>
  </head>
  <body>
    <!-- NAVBAR DESKTOP -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mynav" style="padding:20px 0px">
      <div class="container-fluid container"> 
          <img src="/assets/client/images/Flick Software Logo Blue.png" class="img-fluid" style="width:18%;margin-right:14%"  alt="" onclick="window.open('/','_self');">

     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:20px;font-family:HKGroteskBold">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" style="margin-right:65px;color:black">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:65px;color:black;">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:65px;color:black">The Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin-right:65px;color:black">Career</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END OF NAVBAR DESKTOP -->

        
    @yield('container')

    <script>
      var myNav = document.getElementById('mynav');
      window.onscroll = function () { 
          "use strict";
          if (document.body.scrollTop >= 10 ) {
              myNav.classList.add("nav-colored");
              myNav.classList.remove("nav-transparent");
          } 
          else {
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