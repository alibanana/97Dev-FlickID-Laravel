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
      <form enctype="multipart/form-data" method="POST" action="{{ route('admin.team.store') }}">
        @csrf
        <div class="form-group">
          <label for="inputName">Full Name</label>
          <input type="name" class="form-control" id="inputName" name="name" placeholder="Enter name">
          @error('name')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group" style="padding-bottom:10px">
          <label for="positionControlSelect">Position</label>
            <select class="form-control" id="postionControlSelect" name="job_id">
              @foreach ($jobs as $job)
                <option value="{{ $job->id }}">{{ $job->title }}</option>
              @endforeach
            </select>
        </div>
        <h5 style="color:#145CA8;margin-top:30px">Picture</h5>
        <input type="file" id="image" name="photo_file" accept=".jpg,.jpeg,.png" hidden/>
        <label id="uploadButton" for="image">Choose File</label>
        @error('photo_file')
        <span class="invalid-feedback" role="alert" style="display: block !important;">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        <!-- START OF UPLOADED IMAGE -->
        <div id="image_preview" class="row m-0">
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
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session()->get('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
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
          <form method='POST' action="{{ route('admin.job.store') }}">
            @csrf
            <input type="text" name="title" placeholder="Backend Engineer" style="font-family:HKGroteskRegular !important; padding:5px; margin-right: 10px;">
            <button type="submit" class="btn btn-warning">Add New Position</button>
          </form>
        </div>
        @error('title')
        <div class="p-0 m-0" style="text-align: center">
          <span class="invalid-feedback" role="alert" style="display: block !important;">
            <strong>{{ $message }}</strong>
          </span>
        </div>
        @enderror
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
          @foreach ($team_members as $team_member)
            <form action="{{ route('admin.team.destroy', $team_member->id) }}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <tr>
              <td>
                <input name="name" type="text" value="{{ $team_member->name }}">
              </td>
              <td>
                <input name="title" type="text" value=" {{ $team_member->job->title }}">
              </td>
              <td>
                <button type="button" class="btn btn-secondary" style="margin-right: 10px">Update</button>
                </form>
                <button class="btn btn-danger" type="submit" onclick='return confirm("Are you sure you want to Delete this team member?")'>Delete</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>  

    <!-- position table -->
    <div class ="col-md-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" >Title</th>
            <th scope="col" >Offerable</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jobs as $job)
            <tr>
              <td scope="col">{{ $job->title }}</td>
              @if ($job->offerable)
                <td scope="col" style="color:green">
                  <p style="display: inline-block">True</p>
                  <form action="{{ route('admin.job.changeOfferable', $job->id) }}" method="post" style="display: inline-block">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-secondary btn-sm" style="margin-left: 20px" onclick='return confirm("Are you sure you want to make this job Non-Offerable?")'>Change</button>
                  </form>
                </td>
              @else
                <td scope="col" style="color:grey">
                  <p style="display: inline-block">False</p>
                  <form action="{{ route('admin.job.changeOfferable', $job->id) }}" method="post" style="display: inline-block">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success btn-sm" style="margin-left: 20px" onclick='return confirm("Are you sure you want to make this job Offerable?")'>Change</button>
                  </form>
                </td>
              @endif
              <td scope="col">
                <form action="{{ route('admin.job.destroy', $job->id) }}" method="post" style="display: inline-block">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" onclick='return confirm("Are you sure you want to Delete this job?")'>Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>  

    <!-- end of position table -->
  </div>
</div>

@endsection


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
     //your script here

// START OF IMAGE PREVIEW AND DELETE
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#image").on("change", function(e) {
      var fileName = document.getElementById("image").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("image_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#image_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:px;max-height:px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove\"></i>" + 
                "<input name=\"imagename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove").click(function(){
                $(this).parent(".pip").remove();
              });
            };
          })(file);

          fileReader.readAsDataURL(file);
        }
      } else {
          alert("Only jpg/jpeg and png files are allowed!");
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
// END OF IMAGE PREVIEW AND DELETE

</script>