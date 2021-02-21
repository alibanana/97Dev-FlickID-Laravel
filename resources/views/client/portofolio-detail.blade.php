@extends('client/layouts/main')

@section('title', 'Flick Software Portofolio Detail')

@section('container')

<!-- START OF TOP CONTENT-->
<div class="row m-0 topPortofolioDetail" style="padding: 0px 8.5%;padding-top:6vw">
    <div class="col-md-6 p-0  wow fadeInLeft">
        <img id="project_illustration" src="{{ asset($project->ilustration_file) }}" style="max-width:25vw;height:auto" alt="">
    </div>

    <div class="col-md-6 col-xs-12 p-0 " style="" id=""> 
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
<div class="row m-0 project_detail_BG" style="padding: 0px 8.5%;">
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
    <img src="{{ asset($project->bg_file) }}" class="img-fluid w-100 wow fadeInRight" alt="">
</div>
<div class="top-right-3">
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
    <div class="col-md-12 p-0 " style="margin-top:4vw">
        <div style="background-color:#3F92D8;color:#ffffff;padding:3vw 1.5vw;border-radius:25px;text-align:center" class="">
            <p style="font-size:3.5vw;font-family:HKGroteskBold;color:#ffffff" id="titleText" class="wow pulse" > <b>{{ $project->headline }}</b> </p>
            <p style="font-size:1.8vw;font-family:HKGroteskRegular;color:#ffffff" id="descriptionText">{{ $project->sub_headline }}</p>

        </div>
    </div>  
</div>
<!-- END OF SLOGAN -->

<!-- mobile view -->
<div class="row m-0 MobileView" style="padding-left:8.5%;padding-top:10vw;padding-bottom:4vw;display:none">
    <div class="col-12 p-0" >
    <p style="font-size:10vw;font-family:HKGroteskBlack;line-height:1.2" id="whatWeProvide"><b>See other projects</b></p>
    <div>
        <a href="/portofolio" style="font-size:6vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:6vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
    </div>
    </div>
</div>
<!-- end of mobile view -->

<div class="row m-0 " style="padding-bottom:7vw;padding-top:7vw" >
    <?php $counter = 0;
        $featuredDiscussion = null;
    ?>
    @foreach($related_projects as $related_project)
      <?php $flag = 0 ?>
      @if($loop->first)
        <?php $flag = 1 ?>
      @elseif ($loop->last)
        <?php $flag = 2 ?>
      @endif

      @if($counter == 0)
        @if($related_project->project_type->type == 'Mobile Apps')
          <x-mobile-left :flag="$flag" :relatedProject="$related_project" :featuredProject="$featuredDiscussion" />
        @else
          <x-desktop-left :flag="$flag" :relatedProject="$related_project" :featuredProject="$featuredDiscussion"/>
        @endif
        <?php $counter++ ?>
      @else
        @if($related_project->project_type->type == 'Mobile Apps')
          <x-mobile-right :flag="$flag" :relatedProject="$related_project" :featuredProject="$featuredDiscussion"/>
        @else
          <x-desktop-right :flag="$flag" :relatedProject="$related_project" :featuredProject="$featuredDiscussion" />
        @endif
        <?php $counter = 0 ?>
      @endif
    @endforeach

    </div>

<!-- RELATED PORTOFOLIO -->
<div class="row m-0" style="padding-bottom:0vw" >
</div>
<!-- END OF RELATED PORTOFOLIO -->

<x-with-us :flag="0" />

<div style="margin-top:10vw"></div>
<x-flick-footer />

@endsection