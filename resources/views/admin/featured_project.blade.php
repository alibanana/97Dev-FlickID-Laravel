@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')


 
<div class="container" style="padding-bottom:20px;padding-top:40px;">
  <div class = "row"> 
    <div class ="col-md-12">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <h2 style="padding-top:0px !important"> Featured Projects</h2>
      </div>  
    </div>  
  </div>    
</div>
      
      </div>
    <div class="container">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Logo + Description & Sub-Description</th>
      <th scope="col">Type</th>
      <th scope="col">Position</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody style="font-family:HKGroteskRegular !important">
    <tr>
      <td scope="col">here insert logo and desc</td>
      <td scope="col">Mobile App</td>
      <td scope="col">
        <form action="" method="post" style="display:flex;justify-content:space-between;">
          @csrf
          {{ method_field('PUT') }}
          <!-- jangan lupa masukin value nya -->
          <div style="display:flex">
            <input type="text" name="position" value="" style="">
            <button type="submit">Update</button>
          </div>
        </form> 
      </td>  
      <td>
        <div style="display:flex;justify-content:space-between;align-items:center">
          <form action="" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>         
          </td>
      </div>
      
    </tr>
  </tbody>
</table>
    </div>  


@endsection