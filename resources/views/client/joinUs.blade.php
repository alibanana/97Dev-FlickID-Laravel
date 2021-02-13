@extends('client/layouts/main')

@section('title', 'Flick Software Join Us')

@section('container')
<div>
    <div class="row m-0" style="padding-bottom:5vw">
        <div class="col-md-12 p-0">  
            <div class="containerImage">
                <div style="text-align:left">   
                    <img src="/assets/client/images/Career_Background_Top.png" class="img-fluid" alt="Snow" style="">
                    
                </div>
                <div class="top-left">
                    <div style="text-align:left;padding-right:6.5vw !important;padding-left:6.5vw;padding-top:12vw">
                        <p  style="font-size:4vw;font-family:HKGroteskBlack;line-height:1.2"><b>Join our <br> incredible Journey</b></p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="row m-0" style="padding:0px 16vw">
        <div class="col-md-12" style="text-align:center;padding:0px 10vw">
            <div style="background-color:#E8F5FF;border-radius:60px;padding:3vw">
                <p  style="font-size:3.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Apply now!</b></p>
                <p  style="font-size:1.4vw;font-family:HKGroteskRegular;color:#262626"><b>Team up with talented people inside FlickSoftware! <br>
                    We are working together making the utmost of technology,<br>
                    helping businesses to grow and fulfill their potential.</b>
                </p>
            </div>
        </div>
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
            <p  style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Personal Information</b></p>
        </div>
    </div>


    <!-- START OF FORM -->

    <form enctype="multipart/form-data" method="" action="" style="font-family:HKGroteskBold">
    <div class="row m-0" style="padding:0px 16vw;font-size:1.2vw">
        <div class="col-md-6" style="text-align:left">
            <div class="form-group">
                <label for="" style="margin:2vw 0px 7px 0px">First Name</label>
                <input name="firstName" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Rizha">
            </div>
        </div>

        <div class="col-md-6" style="text-align:left">
            <div class="form-group">
                <label for="" style="margin:2vw 0px 7px 0px">Last Name</label>
                <input name="lastName" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Teuku">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="" style="margin:2vw 0px 7px 0px">Email</label>
                <input name="email" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="zhoonnaga@gmail.com">
            </div>
        </div>
        <div class="col-md-12">
            <label for="" style="margin:2vw 0px 7px 0px">Phone Number</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" style="border-radius: 15px 0px 0px 15px;padding:12px 15px" >
                    +62
                    </div>
                </div>
                <input name="phone" type="number" style="border:1px solid gray;border-radius: 0px 15px 15px 0px;padding:12px 15px" class="form-control" placeholder="Username">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="" style="margin:2vw 0px 7px 0px">Address</label>
                <input name="address" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="">
            </div>
        </div>
        <!-- start of drag and drop -->
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
            <p  style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Profile</b></p>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="file">
            </div>
        </div>
        <!-- end of drag and drop -->

        <div class="col-md-12" style="text-align:left;margin-top:5vw">
            <p  style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Job Position</b></p>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <select class="form-control" id="contactInputForm" style="border:1px solid gray"  >
                    <option >Chief Executive Officer</option>
                    <option>Chief Operational Officer</option>
                    <option>Chief Marketing Officer</option>
                </select>
            </div>
        </div>

        <!-- START OF ADDED INFORMATION-->
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
            <p  style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Added Information</b></p>
        </div>
        <x-slider-question />
        <x-mcq-question />
        <x-open-question />

       


        
        <!-- END OF ADDED INFORMATION -->
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
            <button type="submit" class="buttonBlue w-100" style="border:0px">Submit</button>
        </div>

    </form>
    <!-- END OF FORM -->
    <div style="margin-top:10vw"></div>

</div>
<x-flick-footer />


<!-- Script -->
<script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone",{ 
        maxFilesize: 3,  // 3 mb
        acceptedFiles: ".jpeg,.jpg,.png,.pdf",
    });
    myDropzone.on("sending", function(file, xhr, formData) {
       formData.append("_token", CSRF_TOKEN);
    }); 
</script>
@endsection