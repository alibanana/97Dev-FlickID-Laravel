<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/admin/index.css">
    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>@yield('title')</title>
  </head>
  <!-- styling -->
  <style>
  a{
    color:black !important;
    font-family: 'HKGroteskBold';
    font-size: 22px;
  }
  h2{
    padding-top: 50px;  
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0);
    padding: 16px;
    text-align: center;
    background-color: #EEEEEE;    
    border-radius: 10px;
    margin-bottom: 50px
  }
  .card-body {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0);
    padding: 16px;
    text-align: left;
    color: white;   
    margin-bottom:25px;
  }
  .flex-item {
    justify-content: space-between;
  }
  .card-text{
    font-size: 50px;
  }
  #uploadButton{
    background-color: #145CA8;
    color: white;
    padding: 8px 15px;
    border-radius: 0.3rem;
    cursor: pointer;
  }
  .block-left {
    display: block;
    width: 30%;
    border: none;
    background-color: #3F92D8;
    padding: 6px 12px;
    margin-left:0px;
    font-size: 14px;
    font-family:HKGroteskBold;
    cursor: pointer;
    border-radius:10px;
    text-align: center;
    
    color:white;
  }
  .block {
    display: block;
    width: 30%;
    border: none;
    background-color: #3F92D8;
    padding: 6px 12px;
    font-size: 14px;
    font-family:HKGroteskBold;
    cursor: pointer;
    border-radius:10px;
    text-align: center;
    color:white;
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
</style>   
<!-- end styling -->
<body style='font-family:HKGroteskBold;'>

 <!-- START OF NAVBAR -->

 <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mynav" style="padding:20px 0px">
      <div class="container-fluid" style="padding-left:4vw"> 
        <img src="/assets/client/images/Flick Software Logo Blue.png" class="img-fluid" style="width:15%;margin-right:18%;cursor:pointer"  alt="" onclick="window.open('/admin','_self');">
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
                <a class="nav-link" aria-current="page" href="/admin/services" style="margin-right:65px;color:black">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/project" style="margin-right:65px;color:black">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/team" style="margin-right:65px;color:black;">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/applicant" style="margin-right:65px;color:black">Applicant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/client" style="margin-right:65px;color:black">Client</a>
              </li>
              
              <li class="nav-item" style="">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:#3F92D8;border:3px solid #3F92D8;padding:8px 50px;border-radius:15px">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- END OF NAVBAR -->

   
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white m-0 mt-4 mb-3" style="padding:0px 100px">
<div class="container">
  <div class="col-4 ">
    <a class="navbar-brand pl-1" href="/"><img style="width: 250px" src="{{ asset('assets/client/images/Flick Software Logo Blue.png') }}" alt="Flick Software"></a>
  </div>
    <div class="col-8 row " id="navbarNav" >
      <ul class="justify-content-between nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin/project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/team">The Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Applicant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Client</a>
        </li>
        <div class="nav-item">
            <button type="button" class="btn btn-primary ">Log out</button>
        </div>
        
        
        
      </ul>
    </div>
  </div>
</nav> -->

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
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>