<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
  a{
      color:black !important;
      font-family: 'Roboto';
      font-size: 22px;
  }
  </style>   
  <body>
  
 
<nav class="navbar navbar-expand-lg navbar-light bg-white m-0 mt-3" style="padding:0px 100px">
  <div class="col-4 ">
    <a class="navbar-brand pl-1" href="#"><img src="assets/logoflick.png" alt=""></a>
  </div>
    <div class="col-8 row " id="navbarNav" >
      <ul class="justify-content-between nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">The Team</a>
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
</nav>
@yield('container')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>