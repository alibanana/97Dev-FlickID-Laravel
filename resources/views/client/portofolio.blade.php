@extends('client/layouts/main')

@section('title', 'Flick Software Contact Us')


@section('container')
<!-- START OF PORTOFOLIO-->
<div class="row m-0" style="padding-bottom:60px;">
    <div class="col-md-12 p-0">
        <div class="containerImage">
            <div style="text-align:left">   
                <img src="/assets/client/images/portofolio_image_header.png" style="width:57%" alt="">
            </div>
            <div class="top-left">
              <div style="text-align:left !important;padding-top:3vw;padding-left:6.5vw;">
                
                <div style="width:120%">
                    <p style="font-size:3.5vw;font-family:HKGroteskBlack;color:#FFFFFF">Explore our finest work, <br> our portofolio</p>    
                    <p style="font-size:1.8vw;margin-bottom:6vw;font-family:HKGroteskBold;margin-top:60px" id="descriptionText"><span style="font-family:HKGroteskRegular">We help businesses to grow to their <br> fullest potential</span>  <b> through technology</b> </p>
            
                </div>
                </div>
            </div>
        </div>
    </div>
    

    <x-mobile-right :flag="0"/>
    <x-mobile-left :flag="0"/>
    <x-desktop-right :flag="2"/>
</div>

<!-- END OF PORTOFOLIO -->

<x-with-us :flag="0" />

<div style="margin-top:6.5vw">
</div>

<x-flick-footer />


@endsection