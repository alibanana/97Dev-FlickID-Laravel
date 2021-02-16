@extends('client/layouts/main')

@section('title', 'Flick Software Portofolio Detail')

@section('container')

<!-- START OF TOP CONTENT-->
<div class="row m-0" style="padding: 0px 8.5%;padding-top:9vw">

    <div class="col-md-6 p-0" style="">
        <img id="project_illustration" src="{{ asset($project->ilustration_file) }}" style="width:25vw" alt="">
    </div>

    <div class="col-md-6 col-xs-12 p-0" style="" id=""> 
        <img src="{{ asset($project->logo_file) }}" class="img-fluid" style="width:17vw"  id="logoPorto">

        <p  style="font-size:2.8vw;margin:2vw 0vw;font-family:HKGroteskBlack;line-height:1.2" id="titleText"> <b>{{ $project->description }}</b></p>
        <p style="font-size:1.5vw;margin-bottom:3vw;font-family:HKGroteskRegular" id="descriptionText">{{ $project->sub_description }}</p>
        <!-- <a style="" class="buttonBlue" href="#">Discover our works</a> -->
        <div style="background-color:#3F92D8;color:#ffffff;padding:1.5vw;border-radius:2vw">
            <div class="row m-0">
                <div class="col-4">
                    <p style="font-size:1.1vw;font-family:HKGroteskBold" id="descriptionText"> <b>SCOPE</b> </p>
                    <p style="font-size:1.1vw;font-family:HKGroteskRegular; white-space: pre-wrap" id="descriptionText">{{ $project->scope }}</p>
                </div>
                <div class="col-4">
                    <p style="font-size:1.1vw;font-family:HKGroteskBold" id="descriptionText">TECHNOLOGIES</p>
                    <p style="font-size:1.1vw;font-family:HKGroteskRegular; white-space: pre-wrap" id="descriptionText">{{ $project->technologies }}</p>

                </div>
                <div class="col-4">
                    <p style="font-size:1.1vw;font-family:HKGroteskBold" id="descriptionText">DELIVERABLES</p>
                    <p style="font-size:1.1vw;font-family:HKGroteskRegular; white-space: pre-wrap" id="descriptionText">{{ $project->deliverables }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF TOP CONTENT -->

<!-- START OF PROJECT DETAILS -->
@if ($project->project_details->toArray())
<div class="row m-0" style="padding: 0px 8.5%;padding-top:6vw">
    <div class="col-md-12 p-0">
        <p  style="font-size:2.8vw;margin:2vw 0vw;font-family:HKGroteskBlack;line-height:1.2;color:#3F92D8" id="titleText"> <b>Project Details</b></p>
    </div>
</div>
<div class="row m-0" style="padding: 0px 8.5%;">
    <?php $counter = 0 ?>
    @foreach($project->project_details as $project_detail)
        @if($counter == 0)
            <x-detail-left :projectDetail="$project_detail" />
            <?php $counter++ ?>
        @else
            <x-detail-right :projectDetail="$project_detail" />
            <?php $counter = 0 ?>
        @endif
    @endforeach
</div>
@endif
<!-- END OF PROJECT DETAILS -->

<!-- START OF PROJECT BACKGROUND -->

<div class="containerImage">
<div style="text-align:left">   
    <img src="{{ asset($project->bg_file) }}" class="img-fluid w-100" alt="">
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
            <p style="font-size:3.5vw;font-family:HKGroteskBold;color:#ffffff" id="titleText" > <b>{{ $project->headline }}</b> </p>
            <p style="font-size:1.8vw;font-family:HKGroteskRegular;color:#ffffff" id="descriptionText">{{ $project->sub_headline }}</p>

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