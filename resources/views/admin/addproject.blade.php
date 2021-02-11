@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')

<div class="container mb-4">
    <h2 style="font-family:HKGroteskBold !important;">FlickSoftware add new projects</h2>
</div>
<div class="container">
<!-- start form add new projects -->
  <form enctype="multipart/form-data" method="POST" action="{{ route('admin.project.store') }}">
    @csrf

    <div class="row">
      <div class="mb-4 col-6">
        <label for="project_type" class="form-label">Project Type</label>
        <select class="form-control" id="project_type" name="project_type_id" style="width:70%;">
          @foreach ($project_types as $project_type)
            <option value="{{ $project_type->id }}">{{ $project_type->type }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="row">
      <div class="mb-3 col-6 ">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control border" id="title" name="title" aria-describedby="titleHelp" style="width:70%;">
      </div>
      <div class="mb-3 col-6 ">
        <label for="scope" class="form-label">Scope</label>
        <textarea class="form-control" type="text-area" cols="30" rows="3" id="scope" name="scope" aria-describedby="scopeHelp" style="width:70%"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-6 ">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" type="text-area" cols="30" rows="3" id="description" name="description" aria-describedby="descriptionHelp" style="width:70%"></textarea>
      </div>
      <div class="mb-3 col-6 ">
        <label for="technologies" class="form-label">Technologies</label>
        <textarea class="form-control" type="text-area" cols="30" rows="3" id="technologies" name="technologies" aria-describedby="technologiesHelp" style="width:70%"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-6 ">
        <label for="sub_description" class="form-label">Sub Description</label>
        <textarea class="form-control" type="text-area" cols="30" rows="3" id="sub_description" name="sub_description" aria-describedby="sub-descriptionHelp" style="width:70%"></textarea>
      </div>
      <div class="mb-3 col-6 ">
        <label for="delivarables" class="form-label">Deliverables</label>
        <textarea class="form-control" type="text-area" cols="30" rows="3" id="delivarables" name="delivarables" aria-describedby="delivarablesHelp" style="width:70%"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-6 ">
        <label for="headline" class="form-label">Headline</label>
        <input class="form-control" type="text" id="headline" name="headline" aria-describedby="headlineHelp" style="width:70%">
      </div>
      <div class="mb-3 col-6 ">
        <label for="sub_headline" class="form-label">Sub-Headline</label>
        <input class="form-control" type="text" id="sub_headline" name="sub_headline" aria-describedby="sub-headlineHelp" style="width:70%">
      </div>
    </div>
    
    <!-- choosing file -->
    
    <div class="row">
      <div class="col-md-6">
        <p>Logo</p>
        <input type="file" id="image-logo" name="logo_file" accept=".jpg,.jpeg,.png" hidden/>
        <label id="uploadButton" for="image-logo">Choose Image</label>
        <label for="" style="margin-left:10px;font-family:HKGroteskBold">Insert Image</label>
        @error('logo_file')
        <span class="invalid-feedback" role="alert" style="display: block !important;">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <!-- START OF UPLOADED IMAGE -->
        <div id="logo_preview" class="m-0"></div>
        <!-- END OF UPLOADED IMAGE -->
      </div>
      
      <div class="col-md-6" style>
        <p>Background Image</p>
        <input type="file" id="image-background" name="background_file" accept=".jpg,.jpeg,.png" hidden/>
        <label id="uploadButton" for="image-background">Choose Image</label>
        <label for="" style="margin-left:10px;font-family:HKGroteskBold">Insert Image</label>
        @error('background_file')
        <span class="invalid-feedback" role="alert" style="display: block !important;">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <!-- START OF UPLOADED IMAGE -->
        <div id="background_preview" class="m-0"></div>
        <!-- END OF UPLOADED IMAGE -->
      </div>
    </div>

    <div class="row">
      <div class="mb-3 col-6 mt-5" >
        <button type="button" class="" style="background-color:#3F92D8; border-radius:10px;border:none;color:white;padding: 6px 12px;"> Add project Details</button> 
      </div>
    </div>

    {{-- SUBMIT BUTTON --}}
    <div class="container" style="text-align:right;padding-right:12.5vw;padding-bottom:7vw">
      <button type="submit" class="" style="background-color:#FACA00; border-radius:10px;border:none;color:black;padding: 6px 12px;"> Add projects</button> 
    </div>
  </form>
    
    <!-- end form add new project -->
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
// START OF IMAGE PREVIEW AND DELETE
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#image-logo").on("change", function(e) {
      var fileName = document.getElementById("image-logo").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpeg" || extFile=="jpg" || extFile=="png" || extFile=="svg") {
        document.getElementById("logo_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();
          fileReader.onload = (function(f) {
            return function(e) {
              $("#logo_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:400px;max-height:400px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove\"></i>" + 
                "<input name=\"logo_filename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove").click(function(){
                $(this).parent(".pip").remove();
              });
            };
          })(file);

          fileReader.readAsDataURL(file);
        }
      } else {
          alert("Only jpg/jpeg, png and svg files are allowed!");
      }
    });

    $("#image-background").on("change", function(e) {
      var fileName = document.getElementById("image-background").value;
      console.log("test")
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpeg" || extFile=="jpg" || extFile=="png" || extFile=="svg") {
        document.getElementById("background_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();
          fileReader.onload = (function(f) {
            return function(e) {
              $("#background_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:400px;max-height:400px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove1\"></i>" + 
                "<input name=\"background_filename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove1").click(function(){
                $(this).parent(".pip").remove();
              });
            };
          })(file);
          fileReader.readAsDataURL(file);
        }
      } else {
          alert("Only png and svg files are allowed!");
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
// END OF IMAGE PREVIEW AND DELETE
</script>
@endsection