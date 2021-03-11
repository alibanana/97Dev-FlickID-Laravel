@if($flag == 2)
<div class="col-md-5 p-0 DesktopView" style="margin-top:7vw;z-index:99">
    <div style="padding-left:15%">
        
        <div class="containerImage">
            <div style="text-align:left">   
                <img src="/assets/client/images/Portofolio_Bottom_BG.png" class="img-fluid" alt="Snow" style="width:100%">
                
            </div>
            <div class="top-left DesktopView">
                @if (Request::path() == '/')
                <p style="font-size:4.5vw;font-family:HKGroteskBlack;line-height:1.2;color:black"> <b>Explore more on <br> our fine works</b></p>
                <div>
                    <a href="{{ url()->route('portfolio.index') }}" style="font-size:1.8vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:1.8vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                </div>
                @else
                <p style="font-size:4vw;font-family:HKGroteskBlack;line-height:1.2;color:black;text-align:left !important;margin-top:5vw"> <b>Loving what<br>you're seeing?</b></p>

                @endif
            </div>
        </div>
    </div>
</div>
@else
<div class="col-md-5 p-0 DesktopView"></div>
@endif

<div class="col-md-7 p-0 marginTopPortofolio wow fadeInRight" style="margin-top:-24vw">
    <div class="containerImage hexagon">
        <div style="text-align:right">   
            @if($featuredProject)
                <img src="/assets/client/images/hex-right-new.svg" class="img-fluid" alt="Snow" style="width:93%;filter: invert({{ $featuredProject->project->filter_invert }}%) sepia({{ $featuredProject->project->filter_sepia }}%) saturate({{ $featuredProject->project->filter_saturate }}%) hue-rotate({{ $featuredProject->project->filter_hue_rotate }}deg) brightness({{ $featuredProject->project->filter_brightness }}%) contrast({{ $featuredProject->project->filter_contrast }}%);">
            @else
                <img src="/assets/client/images/hex-right-new.svg" class="img-fluid" alt="Snow" style="width:93%;filter: invert({{ $relatedProject->filter_invert }}%) sepia({{ $relatedProject->filter_sepia }}%) saturate({{ $relatedProject->filter_saturate }}%) hue-rotate({{ $relatedProject->filter_hue_rotate }}deg) brightness({{ $relatedProject->filter_brightness }}%) contrast({{ $relatedProject->filter_contrast }}%);">
            @endif
        </div>
        <div class="top-right">
            <div style="text-align:right !important;padding-left:15%;padding-top:7%;padding-right:3.1vw" class="portofolioTextAndImage">
                @if($featuredProject)
                    <img id="illustrationDesktop" src="{{ asset($featuredProject->project->featured_ilustration_file) }}" class="img-fluid" style="width:28vw;height:auto" alt="">
                @else
                    <img id="illustrationDesktop" src="{{ asset($relatedProject->featured_ilustration_file) }}" class="img-fluid" style="width:28vw;height:auto" alt="">
                @endif
                <div style="margin-top:40px"  id="desktopMarginTop">
                    @if($featuredProject)
                        <img id="logo" src="{{ asset($featuredProject->project->logo_file) }}" class="img-fluid" style="width:11vw"  alt="">
                    @else
                        <img id="logo" src="{{ asset($relatedProject->logo_file) }}" class="img-fluid" style="width:11vw"  alt="">
                    @endif
                    <div style="padding-left:20%">
                    @if($featuredProject)
                        <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:10px;color:black">{{ $featuredProject->project->description }} <span style="font-family:HKGroteskBold">{{ $featuredProject->project->sub_description }}</span></p>
                    @else
                        <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:10px;color:black">{{ $relatedProject->description }} <span style="font-family:HKGroteskBold">{{ $relatedProject->sub_description }}</span></p>
                    @endif
                    </div>
                    <div style="padding-top:15px" id="portofolioTextPadding">
                    @if($featuredProject)
                        <a href="{{ url('portfolio').'/'.$featuredProject->project->id }}" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8;">See our work <i style="font-size:1.5vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                    @else
                        <a href="{{ url('portfolio').'/'.$relatedProject->id }}" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8;">See our work <i style="font-size:1.5vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>