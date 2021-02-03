@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
  </head>
  <!-- styling -->
  <style>
  
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
  background-color: #145CA8;
  color: white;   
  margin-bottom:50px;
  
}

.flex-item {
  justify-content: space-between;
}
.card-text{
    font-size: 50px;
}
.alignleft {
	float: left;
    font-size: 50px;
}

    
  /* end styling */
  </style>
  <!-- start body -->
  <body>
    <div class="container">
        <h2>Welcome Back, Admin!</h2>
    </div>
    
<div class="container pt-3">
    <div class="row ">
        <div class="col-md-4 card ">
            <h3>Client</h3>
            <hr>
                <div class="card-body " >
                    <h5 class="card-title">Accepted Client</h5>
                    <p class="alignleft">5</p>
                   
                </div>
                <div class="card-body">
                    <h5 class="card-title">Accepted Client</h5>
                    <p class="card-text">5</p>                   
                </div>
                <div class="card-body">
                    <h5 class="card-title">Accepted Client</h5>
                    <p class="card-text">5</p>                   
                </div>
                <div class="card-body">
                    <h5 class="card-title">Accepted Client</h5>
                    <p class="card-text">5</p>                   
                </div> 
        </div>
        <div class="col-md-4 card">
            <h3>Applicants</h3>
            <hr>
        </div>
        <div class="col-md-4 card">
            <h3>Client</h3>
            <hr>
        </div>
    </div>
</div>



    
    
    
    


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

@endsection