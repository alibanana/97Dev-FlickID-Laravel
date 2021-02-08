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
</style>   
<!-- end styling -->
<body style='font-family:HKGroteskBold;'>
    <!-- START OF POPUP -->
    <div id="create_member" class="overlay">
      <div class="popup">
        <a class="close" href="#" >&times;</a>
        
        <div class="content" style="padding:20px">
          <h1>Add New Member</h1>
          <div class="col-md-12">
          <form>
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="name" class="form-control" id="inputName" placeholder="Enter name">
            </div>
            <div class="form-group" style="padding-bottom:10px">
              <label for="positionControlSelect">Position</label>
                <select class="form-control" id="postionControlSelect">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <div style ="display:flex; justify-content: flex-end; ">
              <button type="submit" class="btn btn-warning btn-sm">Add Member</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF POPUP -->
<nav class="navbar navbar-expand-lg navbar-light bg-white m-0 mt-4 mb-3" style="padding:0px 100px">
<div class="container">
  <div class="col-4 ">
    <a class="navbar-brand pl-1" href="/"><img style="width: 250px" src="{{ asset('assets/client/images/Flick Software Logo Blue.png') }}" alt="Flick Software"></a>
  </div>
    <div class="col-8 row " id="navbarNav" >
      <ul class="justify-content-between nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/projects">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/team">The Team</a>
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