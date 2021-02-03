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
    <!-- font awesome -->
    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
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
  color: white;   
  margin-bottom:25px;
  
  
}

.flex-item {
  justify-content: space-between;
}
.card-text{
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
    <!-- start client section -->
        <div class="col-md-4 p-3">
            <div class="card">
            <h3>Client</h3>
                <hr>
                    <div class="card-body" style="background-color:#145CA8">
                        <h5 class="card-title">Accepted Client</h5>
                        <div>
                            <p class="card-text">5</p>
                            <i class="fas fa-arrow-circle-right"></i><p >View details</p>
                        </div>
                    </div>
                    <div class="card-body" style="background-color:#149211">
                        <h5 class="card-title" >Finished Clients</h5>
                        <div>
                            <p class="card-text">5</p>
                            <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                        </div>                 
                    </div>
                    <div class="card-body" style="background-color:#FFBC69">
                        <h5 class="card-title" >Pending Clients</h5>
                        <div>
                            <p class="card-text">5</p>
                            <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                        </div>                   
                    </div>
                    <div class="card-body" style="background-color:#A02B2B">
                        <h5 class="card-title">Rejected Client</h5>
                        <div>
                            <p class="card-text">5</p>
                            <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                        </div>                  
                    </div> 
            </div>
            
        </div>
        <!-- end client section -->
        <!-- start applicants section -->
        <div class="col-md-4 p-3 ">
            <div class="card">
                <h3>Applicants</h3>
                <hr>
                <div class="card-body" style="background-color:#145CA8">
                    <h5 class="card-title">Accepted Client</h5>
                    <div>
                        <p class="card-text">5</p>
                        <i class="fas fa-arrow-circle-right"></i><p >View details</p>
                    </div>
                </div>
                <div class="card-body" style="background-color:#FFBC69">
                    <h5 class="card-title" >Pending Applicants</h5>
                    <div>
                        <p class="card-text">5</p>
                        <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                    </div>                   
                </div>
                <div class="card-body" style="background-color:#A02B2B">
                    <h5 class="card-title">Rejected Applicants</h5>
                    <div>
                        <p class="card-text">5</p>
                        <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                    </div>                  
                </div>
                    
            </div>
            
        </div>
        <!-- end applicant section -->
        <!-- start client total project -->
        <div class="col-md-4 p-3">
            <div class="card">
                <h3>Clients</h3>
                <hr>
                <div class="card-body" style="background-color:#145CA8">
                    <h5 class="card-title">Total Projects</h5>
                    <div>
                        <p class="card-text">5</p>
                        <i class="fas fa-arrow-circle-right"></i><p >View details</p>
                    </div>
                </div>

            </div>
            
        </div>
        <!-- end client total project -->
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