@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')
<div class="container">
    <h2 style="font-family:HKGroteskBold !important;">FlickSoftware - Add New Projects</h2>
</div>

<div class="container">
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.project.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 pt-5 mb-4">
                <p>Project Logo</p>
                <input type="file" id="logo_image" name="logo_file" accept=".jpg,.jpeg,.png,.svg" hidden/>
                <label id="uploadButton" for="logo_image">Choose Image</label>
                <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
                @error('logo_file')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- START OF UPLOADED IMAGE -->
                <div id="logo_preview" class="row m-0">
                </div>
            </div>

            <div class="col-md-6 pt-5 mb-4" style>
                <p>Project Illustration</p>
                <input type="file" id="project_illustration" name="ilustration_file" accept=".png,.svg" hidden/>
                <label id="uploadButton" for="project_illustration">Choose Image</label>
                <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
                @error('ilustration_file')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- START OF UPLOADED IMAGE -->
                <div id="illustration_preview" class="row m-0">
                </div>
            </div>

            <div class="mb-4 col-6">
                <label for="project_type" class="form-label">Project Type</label>
                <select class="form-control" id="project_type" name="project_type_id" style="width:70%;">
                @foreach ($project_types as $project_type)
                    <option value="{{ $project_type->id }}">{{ $project_type->type }}</option>
                @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-4" style>
                <p>Background Image</p>
                <input type="file" id="image-background" name="background_file" accept=".jpg,.jpeg,.png" hidden/>
                <label id="uploadButton" for="image-background">Choose Image</label>
                <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
                @error('background_file')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- START OF UPLOADED IMAGE -->
                <div id="background_preview" class="row m-0">
                </div>
            </div>
        </div>
        <!-- end of choosing file -->

        <hr>
        <h3 style="font-family:HKGroteskBold !important;margin-top:40px">Featured Project Asset</h3>

        <div class="row">    
          <div class="col-md-12 pt-2 mb-4" style>
              <p>Featured Illustration</p>
              <input type="file" id="featured_project_illustration" name="featured_ilustration_file" accept=".jpg,.jpeg,.png" hidden/>
              <label id="uploadButton" for="featured_project_illustration">Choose Image</label>
              <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
              @error('featured_ilustration_file')
              <span class="invalid-feedback" role="alert" style="display: block !important;">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <!-- START OF UPLOADED IMAGE -->
              <div id="featured_illustration_preview" class="row m-0">
              </div>
          </div>
          <p style="margin-bottom: 0px !important;">Click the link down below to change hex into filter</p>
          <a style="margin-bottom: 2vw !important;" target="_blank" href="https://codepen.io/sosuke/pen/Pjoqqp">https://codepen.io/sosuke/pen/Pjoqqp</a>
          <div class="mb-3 col-6">
            <label for="Insert_invert" class="form-label">Invert</label>
            <input name="filter_invert" value="{{ old('filter_invert') }}" type="text" class="form-control border" id="Insert_invert" aria-describedby="Insert_invert" style="width:70%;">
            @error('filter_invert')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-6">
            <label for="Insert_Sepia" class="form-label">Sepia</label>
            <input name="filter_sepia" value="{{ old('filter_sepia') }}" type="text" class="form-control border " id="Insert_Sepia" aria-describedby="Insert_invert" style="width:70%;">
            @error('filter_sepia')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-6">
            <label for="Insert_Saturate" class="form-label">Saturate</label>
            <input name="filter_saturate" value="{{ old('filter_saturate') }}" type="text" class="form-control border " id="Insert_Saturate" aria-describedby="Insert_invert" style="width:70%;">
            @error('filter_saturate')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-6">
            <label for="Insert_Hue_Rotate" class="form-label">Hue_Rotate</label>
            <input name="filter_hue_rotate" value="{{ old('filter_hue_rotate') }}" type="text" class="form-control border " id="Insert_Hue_Rotate" aria-describedby="Insert_invert" style="width:70%;">
            @error('filter_hue_rotate')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-6">
            <label for="Insert_Brightness" class="form-label">Brightness</label>
            <input name="filter_brightness" value="{{ old('filter_brightness') }}" type="text" class="form-control border " id="Insert_Brightness" aria-describedby="Insert_invert" style="width:70%;">
            @error('filter_brightness')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-6">
            <label for="Insert_Contrast" class="form-label">Contrast</label>
            <input name="filter_contrast" value="{{ old('filter_contrast') }}" type="text" class="form-control border " id="Insert_Contrast" aria-describedby="Insert_invert" style="width:70%;">
            @error('filter_contrast')
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <hr>
        <div class="row">
            <div class="mb-3 col-6 pt-5">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control border" id="title" name="title" value="{{ old('title') }}" aria-describedby="titleHelp" style="width:70%;">
                @error('title')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 col-6 pt-5">
                <label for="scope" class="form-label">Scope</label>
                <textarea type="text-area" class="form-control" cols="30" rows="3" id="scope" name="scope" aria-describedby="scopeHelp" style="width:70%">{{ old('scope') }}</textarea>
                @error('scope')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="description" class="form-label">Description</label>
                <textarea type="text-area" cols="30" rows="3" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" style="width:70%">{{ old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 col-6 ">
                <label for="technologies" class="form-label">Technologies</label>
                <textarea type="text-area" cols="30" rows="3" class="form-control " id="technologies" name="technologies" aria-describedby="technologiesHelp" style="width:70%">{{ old('technologies') }}</textarea>
                @error('technologies')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="sub-description" class="form-label">Sub Description</label>
                <textarea type="text-area" cols="30" rows="3" class="form-control" id="sub-description" name="sub_description" aria-describedby="sub-descriptionHelp" style="width:70%">{{ old('sub_description') }}</textarea>
                @error('sub_description')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 col-6 ">
                <label for="deliverables" class="form-label">Deliverables</label>
                <textarea type="text-area" cols="30" rows="3" class="form-control " id="deliverables" name="deliverables" aria-describedby="deliverablesHelp" style="width:70%">{{ old('deliverables') }}</textarea>
                @error('deliverables')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="headline" class="form-label">Headline</label>
                <input type="text" class="form-control" id="headline" name="headline" value="{{ old('headline') }}" aria-describedby="headlineHelp" style="width:70%">
                @error('headline')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 col-6 ">
                <label for="sub-headline" class="form-label">Sub-Headline</label>
                <input type="text" class="form-control " id="sub-headline" name="sub_headline" value="{{ old('sub_headline') }}" aria-describedby="sub-headlineHelp" style="width:70%">
                @error('sub_headline')
                <span class="invalid-feedback" role="alert" style="display: block !important;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <hr>
        <!-- start of project detail -->
        <h3 style="font-family:HKGroteskBold !important;margin-top:40px">Project Details</h3>
        
        <div>
            <div class="row" id="project_detail_duplicater">
                <div class="mb-3 col-6 mt-5">
                    <label for="Insert name" class="form-label">Title</label>
                    <input type="text" class="form-control" name="project_detail_title[]" aria-describedby="project-detail-title-help" style="width:70%">
                    @error('project_detail_title.*')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 col-6 mt-5">
                    <label for="Insert name" class="form-label">Description</label>
                    <textarea type="text-area" cols="30" rows="3" class="form-control" name="project_detail_description[]" aria-describedby="project-detail-description-help" style="width:70%"></textarea>
                </div>
                <div class="col-md-6 mt-3">
                    <p>Project Detail Illustration</p>
                    <input type="file" name="project_detail_ilustration[]" accept=".jpg,.jpeg,.png"/>
                    @error('project_detail_ilustration.*')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <!-- end of project details -->
        <hr>

        <div class="row">
            <div class="mb-3 col-6 mt-5" >
                <button type="button" id="add_project_detail" onlick="duplicate()" class="" style="background-color:#3F92D8; border-radius:10px;border:none;color:white;padding: 6px 12px;"> Add project Details</button> 
            </div>
        </div>

        <div class="container" style="text-align:right;padding-right:12.5vw;padding-bottom:7vw">
            <button type="submit" class="" style="background-color:#FACA00; border-radius:10px;border:none;color:black;padding: 6px 12px;font-size:20px"> Submit New Project</button> 
        </div>
        <!-- END OF UPLOADED IMAGE -->
    </form>
    <!-- end form add new project -->
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
// START OF IMAGE PREVIEW AND DELETE
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#logo_image").on("change", function(e) {
      var fileName = document.getElementById("logo_image").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("logo_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#logo_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
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
    $("#image-background").on("change", function(e) {
      var fileName = document.getElementById("image-background").value;
      console.log("test")
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("background_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#background_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:px;max-height:px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove1\"></i>" + 
                "<input name=\"imagename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove1").click(function(){
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

    $("#image-portofolio").on("change", function(e) {
      var fileName = document.getElementById("image-portofolio").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("project_detail_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#project_detail_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:px;max-height:px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove1\"></i>" + 
                "<input name=\"imagename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove1").click(function(){
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

    $("#project_illustration").on("change", function(e) {
      var fileName = document.getElementById("project_illustration").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("illustration_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#illustration_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:px;max-height:px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove1\"></i>" + 
                "<input name=\"imagename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove1").click(function(){
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

    $("#featured_project_illustration").on("change", function(e) {
      var fileName = document.getElementById("featured_project_illustration").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("featured_illustration_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#featured_illustration_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:px;max-height:px\" />" + 
                "<i style=\"color:#145CA8;font-size:20px\" class=\"fas fa-minus-circle mt-2 remove1\"></i>" + 
                "<input name=\"imagename\" value=\"" + f.name + "\" hidden/>" + "</div>");
              $(".remove1").click(function(){
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

<script>
document.getElementById('add_project_detail').onclick = duplicate;

var i = 0;
var original = document.getElementById('project_detail_duplicater');

function duplicate() {
    var clone = original.cloneNode(true); // "deep" clone
    clone.id = "project_detail_duplicater" + ++i; // there can only be one element with an ID
    original.parentNode.appendChild(clone);
}
</script>
@endsection