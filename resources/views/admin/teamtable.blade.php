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
<body>
  <div class="container" style="padding-bottom:20px">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <h2> FlickSoftware Team</h2>
        <button type="button" class="btn btn-primary btn-sm" style="background-color:FACA00;  ">Add Member</button>
      </div>  
    </div>
    <div class="container">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Job</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">j</th>
      <td>1</td>
      <td>1</td>
      <td>
        <button type="button" class="btn btn-primary btn-sm" style="background-color:green">Accept</button>
        <button type="button" class="btn btn-primary btn-sm" style="background-color:red">Reject</button>
      </td>
        
          
    </tr>
    <tr>
      <th scope="row">i</th>
      <td>2</td>
      <td>2</td>
      <td>
        <button type="button" class="btn btn-primary btn-sm" style="background-color:green">Accept</button>
        <button type="button" class="btn btn-primary btn-sm" style="background-color:red">Reject</button>
      </td>
    </tr>
  </tbody>
</table>
    </div>  
</body>

@endsection