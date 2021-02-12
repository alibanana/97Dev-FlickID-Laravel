@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')
 <!-- START OF POPUP -->
 <div id="create_member" class="overlay">
    <div class="popup">
      <a class="close" href="#" >&times;</a>
      
      <div class="content" style="padding:20px">
        <h1>Add New Member</h1>
        <div class="col-md-12">
        <form>
          <div class="form-group">
            <label for="inputName">Full Name</label>
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
          <h5 style="color:#145CA8;margin-top:30px">Picture</h5>
          <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png" hidden/>
          <label id="uploadButton" for="image">Choose File</label>
          @error('image')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('imagename')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
            <strong>{{ $message }}</strong>
          </span>
            @enderror
          <!-- START OF UPLOADED IMAGE -->
          <div id="gallery_preview" class="row m-0">
          </div>
          <!-- END OF UPLOADED IMAGE -->
          

          <div style ="display:flex; justify-content: flex-end; ">
            <button type="submit" class="btn btn-warning btn-sm">Add Member</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF POPUP -->

 
<div class="container" style="padding-bottom:20px;padding-top:40px !important">
    <div class = "row"> 
      <div class ="col-md-6">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <h2 style="padding-top:0px !important"> FlickSoftware Team</h2>
          <a href="#create_member" class="btn btn-warning" title="Tooltip">Add Member</a>
        </div>
      </div> 

      <div class ="col-md-6">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <h2 style="padding-top:0px !important">Position</h2>
          <form action="">
          <input type="text" placeholder="Front End Web Developer" style="font-family:HKGroteskRegular !important;padding:5px">
            <button type="submit" class="btn btn-warning">Add New Position</button>
          </form>
        </div>
      </div>  
    </div>    
</div>
      

<div class="container">
  <div class = "row"> 
    <div class ="col-md-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Full Name</th>
            <th scope="col">Position</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fernandha Dzaky</td>
            <td>Chief Executive Officer</td>
            <td>
              <div style="display:flex;justify-content:space-between;align-items:center">

                <button type="button" class="btn btn-secondary" >Update</button>
                <button type="button" class="btn btn-danger" >Reject</button>
              </div>
            </td>
              
                
          </tr>
        </tbody>
      </table>
    </div>  

    <!-- position table -->
    <div class ="col-md-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Poisition Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chief Executive Officer</td>
            <td style="color:green">Available</td>
            <td>
              <div style="display:flex;justify-content:space-between;align-items:center">
                <button type="button" class="btn btn-secondary" >Unavailable</button>
                <button type="button" class="btn btn-danger" >Delete</button>
              </div>
            </td>
              
                
          </tr>

          <tr>
            <td>Chief Marketing Officery</td>
            <td style="color:green">Unavailable</td>
            <td>
              <div style="display:flex;justify-content:space-between;align-items:center">
                <button type="button" class="btn btn-success" >Available</button>
                <button type="button" class="btn btn-danger" >Delete</button>
              </td>
            </div>
              
                
          </tr>
        </tbody>
      </table>
    </div>  

    <!-- end of position table -->
  </div>
</div>

@endsection