@extends('client/layouts/main')

@section('title', 'Flick Software About Us')


@section('container')
<div class="aboutUsBackground">
    <div style="padding-right:9%;padding-left:9%">
        <div class="row m-0">
            <div class="col-md-12 wow fadeInLeft" style="padding-top:22vw;">
                <p id="titleText" style="font-size:3.5vw;font-family:HKGroteskRegular;color:#FFFFFF">Built by <span style="font-family:HKGroteskBlack;">young minds</span> to deliver technology <br> that the world needs</p>
            </div>
        </div>
        <div class="row m-0" style="padding-top: 17vw;">
            <div class="col-md-12" style="padding-top:5vw;">
                <p id="CotactTitleText" style="font-size:4.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850"> <b>Meet the team behind the <br> incredible work</b></p>
            </div>
        </div>

        <!-- START OF MEMBER IMAGE -->
        <div class="row m-0" style="padding-bottom:5vw;padding-top:2vw">
            @foreach ($team_members as $team_member)
                <div class="col-md-6 pt-5">
                    <div class="memberCard" style="display:flex;align-content:flex-start;" >
                        <img src="{{ asset($team_member->photo_file) }}" style="width:11vw" alt="">
                        <p id="titleText" style="font-size:2vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850;margin-left:3vw"> <b>{{ $team_member->name }}</b> <br> <span style="font-family:HKGroteskRegular !important">{{ $team_member->job->title }}</span></p>
                    </div>
                </div>  
            @endforeach
        </div>
        <!-- END OF MEMBER IMAGE -->
    </div>

</div>

<div class="aboutUsBottomBG" style="margin-top:2vw">
    <div class="row m-0">
        <div class="col-md-12 p-0">
            <div style="padding-left:9%;color:white" >
                <p  style="font-size:5vw;margin-top:7vw;font-family:HKGroteskBlack;line-height:1.2"> <b>A team that has years of experience <br> on developing technologies</b></p>
                <div> 
                    <div style="background-color:#81D1C7;width:30vw;border-radius:2vw;color:#142850;padding:1.7vw;margin-top:3vw">
                        <div style="display:flex;justify-content:space-between;align-items:center ">
                            <div> 
                            <p style="font-size:2.3vw;font-family:HKGroteskBlack;"> <b>Join the team!</b></p>
                            <p style="font-size:1.7vw;font-family:HKGroteskRegular;line-height:1.2;margin-bottom:0px">Join our journey to enable <br> and deliver technologies</p>
                            </div>
                            <a href="/join-us" style="color:white">
                            <i class="fas fa-chevron-circle-right" style="font-size:3vw"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="margin-top:9vw">
                    <p id="readyToStartWithUs" style="font-size:5vw;font-family:HKGroteskBlack;color:#142850"> Ready to start a project with us?</p>

                    <div class="wow fadeInLeft" style="margin-top:2.5vw">
                        <a href="/contact-us" style="border:4px solid #3F92D9;padding:1vw 4vw;text-decoration:none;font-family:HKGroteskBold;border-radius:1.5vw;color:#3F92D9;font-size:2vw;">Let's Talk! <span style="font-size:2vw;margin-left:5px;margin-top:200px !important"> <i  class="fas fa-long-arrow-alt-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:10vw">

    </div>
    <x-flick-footer />
</div>


@endsection