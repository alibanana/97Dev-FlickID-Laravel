@if($flag ==2)
<div class="col-md-5 p-0" style="margin-top:7vw;z-index:99">
    <div style="padding-left:15%">

        <p style="font-size:4.5vw;font-family:HKGroteskBlack;line-height:1.2"> <b>Explore more on <br> our fine works</b></p>
        <div>
            <a href="{{ url()->route('portfolio.index') }}" style="font-size:1.8vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:1.8vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>
@else
<div class="col-md-5 p-0"></div>
@endif

<div class="col-md-7 p-0" style="margin-top:-21vw">
    <div class="containerImage">
        <div style="text-align:right">   
            <img src="/assets/client/images/Hex_Right_Path.svg" class="img-fluid" alt="Snow" style="width:93%; filter: invert({{ $featuredProject->filter_invert }}%) sepia({{ $featuredProject->filter_sepia }}%) saturate({{ $featuredProject->filter_saturate }}%) hue-rotate({{ $featuredProject->filter_hue_rotate }}deg) brightness({{ $featuredProject->filter_brightness }}%) contrast({{ $featuredProject->filter_contrast }}%);">
        </div>
        <div class="top-right">
            <div style="text-align:left !important;padding-top:18%">
                <div style="display:flex;align-items: flex-start">
                    <img src="{{ asset($featuredProject->ilustration_file) }}" class="img-fluid" style="width:16vw" alt="">
                    <div style="margin-left:30px;">
                        <img src="{{ asset($featuredProject->logo_file) }}" class="img-fluid" style="width:11vw !important"  alt="">
                    <div style="width:22vw;padding-right:3.1vw">
                        <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:22px;color:black">{{ $featuredProject->project->description }} <span style="font-family:HKGroteskBold">{{ $featuredProject->project->sub_description }}</span></p>
                    </div>
                    <div style="padding-top:15px">
                        <a href="{{ url('portfolio').'/'.$featuredProject->project->id }}" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8;">See our work <i style="font-size:1.5vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>