@if($flag == 1)
<div class="col-md-7 p-0 wow fadeInLeft" >
@else
<div class="col-md-7 p-0 marginTopPortofolio wow fadeInLeft" style="margin-top:-24vw" >
@endif
    <div class="containerImage">
        <div style="text-align:left">  
        @if($featuredProject)
            <img src="/assets/client/images/Hex_Left_Path.svg" class="img-fluid" alt="Snow" style="width:93%; filter: invert({{ $featuredProject->project->filter_invert }}%) sepia({{ $featuredProject->project->filter_sepia }}%) saturate({{ $featuredProject->project->filter_saturate }}%) hue-rotate({{ $featuredProject->project->filter_hue_rotate }}deg) brightness({{ $featuredProject->project->filter_brightness }}%) contrast({{ $featuredProject->project->filter_contrast }}%);">
        @else
            <img src="/assets/client/images/Hex_Left_Path.svg" class="img-fluid" alt="Snow" style="width:93%; filter: invert({{ $relatedProject->filter_invert }}%) sepia({{ $relatedProject->filter_sepia }}%) saturate({{ $relatedProject->filter_saturate }}%) hue-rotate({{ $relatedProject->filter_hue_rotate }}deg) brightness({{ $relatedProject->filter_brightness }}%) contrast({{ $relatedProject->filter_contrast }}%);">

        @endif
        </div>
        <div class="top-left">
            <div style="text-align:left !important;padding-left:15%;padding-top:18%" class="portofolioTextAndImage">
            <div style="display:flex;align-items: flex-start">
                @if($featuredProject)
                <img id="illustration" src="{{ asset($featuredProject->project->featured_ilustration_file) }}" class="img-fluid" style="width:16vw" alt="">

                @else
                <img id="illustration" src="{{ asset($relatedProject->featured_ilustration_file) }}" class="img-fluid" style="width:16vw" alt="">

                @endif
                <div style="margin-left:30px">
                @if($featuredProject)
                    <img id="logo" src="{{ asset($featuredProject->project->logo_file) }}" class="img-fluid" style="width:11vw"  alt="">
                @else
                    <img id="logo" src="{{ asset($relatedProject->logo_file) }}" class="img-fluid" style="width:11vw"  alt="">
                @endif
                <div style="width:22vw" id="portofolioTextWidth">
                    @if($featuredProject)
                        <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:3vw;color:black">{{ $featuredProject->project->description }} <span style="font-family:HKGroteskBold">{{ $featuredProject->project->sub_description }}</span></p>
                    @else
                        <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:3vw;color:black">{{ $relatedProject->description }} <span style="font-family:HKGroteskBold">{{ $relatedProject->sub_description }}</span></p>
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
</div>

@if($flag == 1)
<div class="col-md-5 p-0 DesktopView">
    <div class="containerImage">
        <div style="">   
        <img src="/assets/client/images/Hex_-_What_weve_build.svg" class="img-fluid" alt="Snow" style="width:65%;margin-top:-40px;margin-left:-20vw">
        </div>

        <div class="top-left">
        @if($featuredProject)
        <div style="text-align:left !important;margin-left:-2vw">
            <p style="font-size:5vw;font-family:HKGroteskBlack;line-height:1.2;color:black"> <b>What we've build</b></p>
            <div>
            <p style="font-size:1.8vw;font-family:HKGroteskRegular;color:black">We help business to grow to their fullest <br> potential <span style="font-family:HKGroteskBlack">through technology</span></p>
            </div>              
        </div>
        @else
        <div style="text-align:left !important;margin-left:-4vw">
            <p style="font-size:5vw;font-family:HKGroteskBlack;line-height:1.2;color:black"> <b>See other projects</b></p>
            <div>
                <a href="{{ url()->route('portfolio.index') }}" style="font-size:1.8vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:1.8vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
            </div>              
        </div>
        @endif
        </div>
    </div>
</div>
@elseif($flag ==2)
<div class="col-md-5 p-0" style="margin-left:-40px;margin-top:7vw;z-index:99">
    <p style="font-size:5vw;font-family:HKGroteskBlack;line-height:1.2"> <b>Explore more on <br> our fine works</b></p>
    <div>
        <a href="{{ url()->route('portfolio.index') }}" style="font-size:1.8vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:1.8vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
@else
<div class="col-md-5 p-0"></div>
@endif