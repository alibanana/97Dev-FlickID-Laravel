@extends('client/layouts/main')

@section('title', 'Flick Software Portofolio')


@section('container')
<!-- START OF PORTOFOLIO-->
<div class="row m-0" style="padding-bottom:4vw;">
    <div class="col-md-12 p-0 portofolioBG">
        <div class="containerImage">
            <div style="text-align:left">   
                <img id="portofolioBGImage" src="/assets/client/images/portofolio_image_header.png" style="width:57%" alt="">
            </div>
            <div class="top-left wow fadeInDown">
                <div style="text-align:left !important;padding-top:3vw;padding-left:6.5vw;">
                    <div style="width:120%">
                        <p style="font-size:3.5vw;font-family:HKGroteskBlack;color:#FFFFFF" id="exploreOurFinest">Explore our finest work, <br> our portofolio</p>    
                        <p style="font-size:1.8vw;margin-bottom:6vw;font-family:HKGroteskBold;margin-top:4vw" id="descriptionText2"><span style="font-family:HKGroteskRegular">We help businesses to grow to their <br> fullest potential</span>  <b> through technology</b> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $counter = 0;
     $relatedProject = null; ?>
    @foreach($featured_projects as $featured_project)
        <?php $flag = 0 ?>
        @if($loop->first)
            <?php $flag = 1 ?>
        @elseif ($loop->last)
            <?php $flag = 2 ?>
        @endif

        @if($counter == 0)
            @if($featured_project->project->project_type->type == 'Mobile Apps')
                <x-mobile-right :flag="$flag" :relatedProject="$relatedProject  " :featuredProject="$featured_project" />
            @else
                <x-desktop-right :flag="$flag" :relatedProject="$relatedProject " :featuredProject="$featured_project" />
            @endif
            <?php $counter++ ?>
        @else
            @if($featured_project->project->project_type->type == 'Mobile Apps')
                <x-mobile-left :flag="$flag" :relatedProject="$relatedProject   " :featuredProject="$featured_project" />
            @else
                <x-desktop-left :flag="$flag" :relatedProject="$relatedProject  " :featuredProject="$featured_project" />
            @endif
            <?php $counter = 0 ?>
        @endif
    @endforeach
</div>
<!-- END OF PORTOFOLIO -->

<x-with-us :flag="0" />

<div style="margin-top:6.5vw"></div>

<x-flick-footer />
@endsection