@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')


 
<div class="container" style="padding-bottom:20px">
  <div class = "row"> 
    <div class ="col-md-6">
      <div style="display:flex;justify-content:flex-start;align-items:center">
        <h2> FlickSoftware Team</h2>
      </div>  
    </div>  
      <div style ="display:flex; justify-content: flex-end; ">
          <a href="#create_member" class="btn btn-warning btn-sm" title="Tooltip">Add Member</a>
      </div>
  </div>    
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
        <button type="button" class="btn btn-success btn-sm" style="background-color:green">Accept</button>
        <button type="button" class="btn btn-danger btn-sm" style="background-color:red">Reject</button>
      </td>
        
          
    </tr>
    <tr>
      <th scope="row">i</th>
      <td>2</td>
      <td>2</td>
      <td>
        <button type="button" class="btn btn-success btn-sm" style="background-color:green">Accept</button>
        <button type="button" class="btn btn-danger btn-sm" style="background-color:red" >Reject</button>
      </td>
    </tr>
  </tbody>
</table>
    </div>  


@endsection