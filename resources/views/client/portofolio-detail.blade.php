@extends('client/layouts/main')

@section('title', 'Flick Software Portofolio Detail')

@section('container')

<!-- START OF TOP CONTENT-->
<div class="row m-0" style="padding: 0px 8.5%;padding-top:9vw">
    

    <div class="col-md-6 p-0" style="">
        <img id="project_illustration" src="/assets/client/images/Flick_Project_Ilustration.png" style="width:25vw" alt="">
    </div>
    <div class="col-md-6 col-xs-12 p-0" style="" id=""> 
       
        <img src="/assets/client/images/Flick_Project_Logo.png" class="img-fluid" style="width:17vw"  id="logoPorto">

        <p  style="font-size:2.8vw;margin:2vw 0vw;font-family:HKGroteskBlack;line-height:1.2" id="titleText"> <b>A financial technology company providing solutions to users and merchant.</b></p>
        <p style="font-size:1.5vw;margin-bottom:3vw;font-family:HKGroteskRegular" id="descriptionText">We have created e-money, peer-to-peer lending, remittance, e-commerce and point-of-sales systems.</p>
        <!-- <a style="" class="buttonBlue" href="#">Discover our works</a> -->
        <div style="background-color:#3F92D8;color:#ffffff;padding:1.5vw;border-radius:2vw">
            <div class="row m-0">
                <div class="col-4">
                    <p style="font-size:1.1vw;font-family:HKGroteskBold" id="descriptionText"> <b>SCOPE</b> </p>
                    <p style="font-size:1.1vw;font-family:HKGroteskRegular" id="descriptionText">Design <br> Implementation</p>
                </div>
                <div class="col-4">
                    <p style="font-size:1.1vw;font-family:HKGroteskBold" id="descriptionText">TECHNOLOGIES</p>
                    <p style="font-size:1.1vw;font-family:HKGroteskRegular" id="descriptionText">Android Mobile <br> iOS Mobile <br> Web Console <br> AWS Integration</p>

                </div>
                <div class="col-4">
                    <p style="font-size:1.1vw;font-family:HKGroteskBold" id="descriptionText">DELIVERABLES</p>
                    <p style="font-size:1.1vw;font-family:HKGroteskRegular" id="descriptionText">iOS and Android User App<br>Admin Web Console<br>Payments Integration<br>Geolocation & Tracking</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF TOP CONTENT -->

<!-- START OF PROJECT DETAILS -->
<div class="row m-0" style="padding: 0px 8.5%;padding-top:6vw">
    <div class="col-md-12 p-0">
        <p  style="font-size:2.8vw;margin:2vw 0vw;font-family:HKGroteskBlack;line-height:1.2;color:#3F92D8" id="titleText"> <b>Project Details</b></p>
    </div>
</div>
<div class="row m-0" style="padding: 0px 8.5%;">
    <!-- <div class="col-6" style="padding-top:5vw" id="">
        <p  style="font-size:3.5vw;margin-bottom:3vw;font-family:HKGroteskBlack;line-height:1.2" id="titleText"> <b>FlickPay</b></p>
        <p style="font-size:1.5vw;margin-bottom:3vw;font-family:HKGroteskRegular" id="descriptionText">We are responsible of Flick's financial ecosystem development, we developed e-Money to support money flow throughout the ecosystem</p>
    </div>

    <div class="col-6" style="text-align:center;padding-top:5vw" id="">
        <img src="/assets/client/images/FlickPay_Ilustration.png" id="project_detail_img" style="width:25vw" alt="">
    </div> -->
    <x-detail-left />
    <x-detail-right />
    

</div>
<!-- END OF PROJECT DETAILS -->

<!-- START OF PROJECT BACKGROUND -->

<div class="containerImage">
<div style="text-align:left">   
    <img src="/assets/client/images/Flick_Project_Background.png" class="img-fluid w-100" alt="">
    
</div>
<div class="top-left-3">
    <div style="">
        <img src="/assets/client/images/portofolio_detail.png" class="" alt="" style="width: 100%;">
    </div>
</div>
<div class="bottom-left">
    <div style="">
        <img src="/assets/client/images/portofolio_detail_bottom.png" class="" alt="" style="width: 100%;">
    </div>
</div>
</div>
<!-- <div class="row m-0">
    <div class="col-md-12 p-0">
        <img src="/assets/client/images/Flick_Project_Background.png" class="img-fluid w-100" alt="">
    </div>
</div> -->
<!-- END OF PROJECT BACKGROUND -->

<!-- START OF SLOGAN -->
<div class="row m-0" style="padding: 0px 8.5%;">
    <div class="col-md-12 p-0" style="margin-top:4vw">
        <div style="background-color:#3F92D8;color:#ffffff;padding:3vw 1.5vw;border-radius:25px;text-align:center">
            <p style="font-size:3.5vw;font-family:HKGroteskBold;color:#ffffff" id="titleText" > <b>Flick now has 150+ restaurant partners</b> </p>
            <p style="font-size:1.8vw;font-family:HKGroteskRegular;color:#ffffff" id="descriptionText">We help business grow to their fullest potential through technology</p>

        </div>
    </div>  
</div>
<!-- END OF SLOGAN -->

<!-- RELATED PORTOFOLIO -->
<div class="row m-0" style="padding-bottom:7vw" >
</div>
<!-- END OF RELATED PORTOFOLIO -->

<x-with-us :flag="0" />

<div style="margin-top:10vw"></div>
<x-flick-footer />

@endsection