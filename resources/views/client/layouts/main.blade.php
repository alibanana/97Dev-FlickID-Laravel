<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/client/index.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>@yield('title')</title>

    <style>
    .navbar {
      -webkit-box-shadow: 0 10px 6px -6px  #e5e5e5;
      -moz-box-shadow: 0 10px 6px -6px  #e5e5e5;
      box-shadow: 0 10px 6px -6px  #e5e5e5;
      background-color:white;
    }

    header.nav-fixed {
    transition: 0.3s ease-in-out;
    }

    .nav-active {
        background-color:red;
    }
    </style>
  </head>
  <body>
    <!-- NAVBAR DESKTOP -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-fixed" style="padding:14px 0px">
      <div class="container-fluid container">
        <div style="display:flex;align-items: center" class="navbar-brand">
          <img src="/assets/client/images/flick-logo-blue.svg" class="img-fluid" style="width:15%;"  alt="">
          <h2 style="font-family:HKGroteskRegular;color:#3F92D8;margin-left:5px;margin-bottom:0px !important;font-size:20px"><span style="font-family:HKGroteskBlack"> <b>Flick</b></span>Software</h2>
        </div>        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END OF NAVBAR DESKTOP -->

        
    @yield('container')

    <!-- NAVBAR CHANNGE COLOR WHEN SCROLL -->

    <script>
      const navbar = document.querySelector('.nav-fixed');
      window.onscroll = () => {
          if (window.scrollY > 300) {
              navbar.classList.add('nav-active');
          } else {
              navbar.classList.remove('nav-active');
          }
      };
    </script>

    <!-- END OF CHANGE NAVBAR COLOR WHEN SCROLL -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>