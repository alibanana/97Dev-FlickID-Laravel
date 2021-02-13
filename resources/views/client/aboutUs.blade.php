@extends('client/layouts/main')

@section('title', 'Flick Software About Us')


@section('container')
<div class="aboutUsBackground">
    <div style="padding-right:9%;padding-left:9%">
        <div class="row m-0">
            <div class="col-md-12" style="padding-top:22vw;">
                <p style="font-size:3.5vw;font-family:HKGroteskRegular;color:#FFFFFF">Built by <span style="font-family:HKGroteskBlack;">young minds</span> to deliver technology <br> that the world needs</p>
            </div>
        </div>
        <div class="row m-0" style="padding-top: 17vw;">
            <div class="col-md-12" style="padding-top:5vw;">
                <p style="font-size:4.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850"> <b>Meet the team behind the <br> incredible work</b></p>
            </div>
        </div>

        <!-- START OF MEMBER IMAGE -->
        <div class="row m-0" style="padding-bottom:5vw;padding-top:2vw">

            <!-- start of one card -->
            <div class="col-6 pt-5">
                <div class="memberCard" style="display:flex;align-content:flex-start;" >
                    <img src="/assets/client/images/member_photo_dummy.png" style="width:180px" alt="">
                    <p style="font-size:2vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850;margin-left:3vw"> <b>Abhista Gatya</b> <br> <span style="font-family:HKGroteskRegular !important">CEO</span></p>

                </div>
            </div>
            <!-- end of one card -->

            <!-- start of one card -->
            <div class="col-6 pt-5">
                <div class="memberCard" style="display:flex;align-content:flex-start;" >
                    <img src="/assets/client/images/member_photo_dummy.png" style="width:180px" alt="">
                    <p style="font-size:2vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850;margin-left:3vw"> <b>Abhista Gatya</b> <br> <span style="font-family:HKGroteskRegular !important">CEO</span></p>

                </div>
            </div>
            <!-- end of one card -->

            <!-- start of one card -->
            <div class="col-6 pt-5">
                <div class="memberCard" style="display:flex;align-content:flex-start;" >
                    <img src="/assets/client/images/member_photo_dummy.png" style="width:180px" alt="">
                    <p style="font-size:2vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850;margin-left:3vw"> <b>Abhista Gatya</b> <br> <span style="font-family:HKGroteskRegular !important">CEO</span></p>

                </div>
            </div>
            <!-- end of one card -->

            <!-- start of one card -->
            <div class="col-6 pt-5">
                <div class="memberCard" style="display:flex;align-content:flex-start;" >
                    <img src="/assets/client/images/member_photo_dummy.png" style="width:180px" alt="">
                    <p style="font-size:2vw;font-family:HKGroteskBlack;line-height:1.2;color:#142850;margin-left:3vw"> <b>Abhista Gatya</b> <br> <span style="font-family:HKGroteskRegular !important">CEO</span></p>

                </div>
            </div>
            <!-- end of one card -->
            
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
                    <div style="background-color:#81D1C7;width:460px;border-radius:15px;color:#142850;padding:1.7vw;margin-top:3vw">
                        <div style="display:flex;justify-content:space-between;align-items:center ">
                            <div> 
                            <p style="font-size:2.3vw;font-family:HKGroteskBlack;"> <b>Join the team!</b></p>
                            <p style="font-size:1.7vw;font-family:HKGroteskRegular;line-height:1.2">Join our journey to enable <br> and deliver technologies</p>
                            </div>
                            <a href="/join-us" style="color:white">
                            <i class="fas fa-chevron-circle-right" style="font-size:40px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div style="margin-top:9vw">
                    <p style="font-size:5vw;font-family:HKGroteskBlack;color:#142850"> Ready to start a project with us?</p>
                    <div style="margin-top:2.5vw">
                        <a href="/contact-us" style="border:4px solid #3F92D9;padding:1vw 50px;text-decoration:none;font-family:HKGroteskBold;border-radius:15px;color:#3F92D9;font-size:2vw;">Let's Talk! <span style="font-size:2vw;margin-left:5px;margin-top:200px !important"> <i  class="fas fa-long-arrow-alt-right"></i></span></a>
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