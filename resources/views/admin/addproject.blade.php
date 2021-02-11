@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')

<div class="container" >
    <h2 style="font-family:HKGroteskBold !important;">FlickSoftware add new projects</h2>
</div>
<div class="container">
<!-- start form add new projects -->
    <form>
     <!-- choosing file -->
        
        
        <div class="row">
          <div class="col-md-6 pt-5 mb-4">
              <p>Logo</p>
              <input type="file" id="logo_image" name="image" accept=".jpg,.jpeg,.png" hidden/>
              <label id="uploadButton" for="logo_image">Choose Image</label>
              <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
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
              <div id="logo_preview" class="row m-0">
              </div>
          </div>
          
          <div class="col-md-6 pt-5 mb-4" style>
              <p>Project Illustration</p>
              <input type="file" id="project_illustration" name="image" accept=".jpg,.jpeg,.png" hidden/>
              <label id="uploadButton" for="project_illustration">Choose Image</label>
              <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
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
              <div id="illustration_preview" class="row m-0">
              </div>
          </div>

          <div class="mb-4 col-6">
            <label for="project_type" class="form-label">Project Type</label>
            <select class="form-control" id="project_type" name="project_type_id" style="width:70%;">
              <option value="1">Mobile</option>
              <option value="2">Desktop</option>
            </select>
          </div>
          

          <div class="col-md-6 mb-4" style>
              <p>Background Image</p>
              <input type="file" id="image-background" name="image" accept=".jpg,.jpeg,.png" hidden/>
              <label id="uploadButton" for="image-background">Choose Image</label>
              <label for="" style="margin-left:10px;font-family:HKGroteskBold">max 1 image</label>
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
              <div id="background_preview" class="row m-0">
              </div>
          </div>

        </div>

        <!-- end of choosing file -->

        <hr>
        <div class="row">
            <div class="mb-3 col-6 pt-5">
                <label for="Insert name" class="form-label">Title</label>
                <input type="email" class="form-control border " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%;">
            </div>
            <div class="mb-3 col-6 pt-5">
                <label for="Insert name" class="form-label">Scope</label>
                <textarea class="form-control "  cols="30" rows="3" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Description</label>
                <textarea type="text-area" cols="30" rows="3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%"></textarea>
            </div>
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Technologies</label>
                <textarea type="email" cols="30" rows="3" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Sub Description</label>
                <textarea type="email" cols="30" rows="3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%"></textarea>
            </div>
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Deliverables</label>
                <textarea type="text-area" cols="30" rows="3" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Headline</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Sub-Headline</label>
                <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
        </div>

        <hr>
        <!-- start of project detail -->
        <h3 style="font-family:HKGroteskBold !important;margin-top:40px">Project Details</h3>
        
        <div>
          <div class="row" id="project_detail_duplicater">
            <div class="mb-3 col-6 mt-5">
                  <label for="Insert name" class="form-label">Title</label>
                  <input type="text" class="form-control" name="project_detail_title[]" id="project_detail_title" aria-describedby="emailHelp" style="width:70%">
            </div>
            <div class="mb-3 col-6 mt-5">
                <label for="Insert name" class="form-label">Description</label>
                <input type="text" class="form-control " name="project_detail_desription[]" id="project_detail_desription" aria-describedby="emailHelp" style="width:70%">
            </div>
            <div class="col-md-6 mt-3">
                <p>Project Detail Illustration</p>
                <input type="file" id="image_project_detail" name="image_project_detail[]" accept=".jpg,.jpeg,.png"/>
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
            <button type="button" class="" style="background-color:#FACA00; border-radius:10px;border:none;color:black;padding: 6px 12px;font-size:20px"> Submit New Project</button> 
        </div>
            
            
        
        
        
        <!-- END OF UPLOADED IMAGE -->
        

        
    </form>
    
    <!-- end form add new project -->
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
     //your script here

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