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
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Title</label>
                <input type="email" class="form-control border " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%;">
            </div>
            <div class="mb-3 col-6 ">
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
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Sub-Headline</label>
                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
        </div>
        
        <!-- choosing file -->
        
        
        <div class="row">
            <div class="col-md-6">
                <p>Logo</p>
                <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png" hidden/>
                <label id="uploadButton" for="image">Choose Image</label>
                <label for="" style="margin-left:10px;font-family:HKGroteskBold">Insert Image</label>
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
            </div>
            
            <div class="col-md-6" style>
                <p>Background Image</p>
                <input type="file" id="image-background" name="image" accept=".jpg,.jpeg,.png" hidden/>
                <label id="uploadButton" for="image-background">Choose Image</label>
                <label for="" style="margin-left:10px;font-family:HKGroteskBold">Insert Image</label>
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

        <div class="row">
            <div class="mb-3 col-6 mt-5" >
            <button type="button" class="" style="background-color:#3F92D8; border-radius:10px;border:none;color:white;padding: 6px 12px;"> Add project Details</button> 
            </div>
        </div>
        <div class="container" style="text-align:right;padding-right:12.5vw;padding-bottom:7vw">
            <button type="button" class="" style="background-color:#FACA00; border-radius:10px;border:none;color:black;padding: 6px 12px;"> Add projects</button> 
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
    $("#image").on("change", function(e) {
      var fileName = document.getElementById("image").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
      if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
        document.getElementById("gallery_preview").innerHTML = "";
        var files = e.target.files;
        var filesLength = files.length;
        for (var i = 0; i < files.length; i++ ) {
          var file = files[i];
          var fileReader = new FileReader();

          fileReader.onload= (function(f) {
            return function(e) {
              $("#gallery_preview").append("<div class=\"col-md-3 mt-4 pip\"  style=\"text-align: center;\">"+
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:400px;max-height:400px\" />" + 
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
                "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;max-width:400px;max-height:400px\" />" + 
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





@endsection