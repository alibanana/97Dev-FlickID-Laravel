<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/admin/index.css">
    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>@yield('title')</title>
  </head>
  <!-- styling -->
  <style>
  a{
    color:black !important;
    font-family: 'HKGroteskBold';
    font-size: 22px;
  }
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
    color: white;   
    margin-bottom:25px;
  }
  .flex-item {
    justify-content: space-between;
  }
  .card-text{
    font-size: 50px;
}
#uploadButton{

background-color: #145CA8;
color: white;
padding: 8px 15px;
border-radius: 0.3rem;
cursor: pointer;

}
.block-left {
        display: block;
        width: 30%;
        border: none;
        background-color: #3F92D8;
        padding: 6px 12px;
        margin-left:0px;
        font-size: 14px;
        font-family:HKGroteskBold;
        cursor: pointer;
        border-radius:10px;
        text-align: center;
        
        color:white;
      }
.block {
    display: block;
    width: 30%;
    border: none;
    background-color: #3F92D8;
    padding: 6px 12px;
    
    font-size: 14px;
    font-family:HKGroteskBold;
    cursor: pointer;
    border-radius:10px;
    text-align: center;
    color:white;
}



    
</style>   
<!-- end styling -->
<body style='font-family:HKGroteskBold;'>
    <!-- START OF POPUP -->
    <div id="create_member" class="overlay">
      <div class="popup">
        <a class="close" href="#" >&times;</a>
        
        <div class="content" style="padding:20px">
          <h1>Add New Member</h1>
          <div class="col-md-12">
          <form>
            <div class="form-group">
              <label for="inputName">Name</label>
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
<nav class="navbar navbar-expand-lg navbar-light bg-white m-0 mt-4 mb-3" style="padding:0px 100px">
<div class="container">
  <div class="col-4 ">

    <a class="navbar-brand pl-1" href="/"><img src="http://ninetysevendev-flick-profile.herokuapp.com/assets/logoflick.png" alt=""></a>

  </div>
    <div class="col-8 row " id="navbarNav" >
      <ul class="justify-content-between nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin/project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/team">The Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Applicant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Client</a>
        </li>
        <div class="nav-item">
            <button type="button" class="btn btn-primary ">Log out</button>
        </div>
        
        
        
      </ul>
    </div>
  </div>
</nav>
@yield('container')


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
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
                    "<img src=\"" + e.target.result + "\" class=\"img-fluid\" style=\"object-fit: cover;width:300px;height:200px\" />" + 
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
    </script>

  </body>
</html>