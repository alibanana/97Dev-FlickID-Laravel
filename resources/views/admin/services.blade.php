@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')


<!-- START OF POPUP -->
<div id="add-service" class="overlay">
    <div class="popup">
      <a class="close" href="#" >&times;</a>
      <div class="content" style="padding:20px">
        <h1>Add New Service</h1>
        <div class="col-md-12">
          <form enctype="multipart/form-data" action="{{ route('admin.service.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputName">Type</label>
                <input name="type" value="{{ old('type') }}" type="text" class="form-control" placeholder="e.g. Mobile Application">
            </div>
            @error('type')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-group mt-3">
                <label for="description">Enter Description</label>
                <input name="description" value="{{ old('description') }}" type="text" class="form-control" id="" placeholder="Enter Description">
            </div>
            @error('description')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <h5 style="color:#145CA8;margin-top:30px">Picture</h5>
            <input type="file" id="image" name="ilustration_file" accept=".jpg,.jpeg,.png" hidden/>
            <label id="uploadButton" for="image">Choose File</label>
            @error('ilustration_file')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <!-- START OF UPLOADED IMAGE -->
            <div id="image_preview" class="row m-0">
            </div>
            <!-- END OF UPLOADED IMAGE -->
            <div style ="display:flex; justify-content: flex-end; ">
              <button type="submit" class="btn btn-warning btn-sm">Add Service</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- END OF POPUP -->
<div class="container" style="padding-bottom:20px">
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2 mb-0" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session()->get('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="row">
    <div style="display: flex;justify-content:space-between;align-items:center">
      <h2 class="pt-4 pb-4 m-0">FlickSoftware Services</h2>
      <a href="#add-service" class="btn btn-warning pull-right" title="Tooltip">Add New Service</a>
    </div>
  </div>
  <p class="m-0" style="color: red">WARNING - Deleting a Service will delete all corresponding Projects.</p>
</div>
      
</div>
  <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title & Image</th>
        <th scope="col">Description</th>
        <th scope="col">Upload Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="font-family:HKGroteskRegular !important">
      @foreach ($project_types as $project_type)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <form enctype="multipart/form-data" id="update-project-type-{{ $loop->index }}" method="POST" action="{{ route('admin.service.update', $project_type->id) }}">
            @csrf
            @method('PUT')
            <td style="width: 20%">
              <input type="text" value="{{ $project_type->type }}" name="type"><br>
              <label style="font-family: HKGroteskRegular">Current Pic:</label>
              <img style="object-fit: cover; width: 100px; margin-top: 10px" src="{{ asset($project_type->ilustration_file) }}" alt="">
            </td>
            <td>
              <textarea type="text-area" cols="60" rows="3" class="form-control" id="description" name="description" style="width: 80%" aria-describedby="descriptionHelp">{{ $project_type->description }}</textarea>
            </td>
            <td style="width: 15%">
              <div class="form-group" style="">
                <label for="ilustration_file">Upload New File</label>
                <input type="file" class="form-control-file" id="ilustration_file" name="ilustration_file" style="margin-top: 10px">
              </div>
            </td>
          </form>
          <td style="width: 15%">
            <button type="submit" form="update-project-type-{{ $loop->index }}" class="btn btn-secondary" style="margin-right: 10px" onclick='return confirm("Are you sure you want to Update this service?")'>Update</button>
            <form action="{{ route('admin.service.destroy', $project_type->id) }}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit" onclick='return confirm("Deleting this Service will delete all corresponding Projects.\r\nAre you sure you still want to delete this Service?")'>Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
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
@endsection