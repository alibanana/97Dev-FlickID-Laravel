@extends('client/layouts/main')

@section('title', 'Flick Software Contact Us')


@section('container')
<div class="row m-0" style="padding-bottom:60px">
    <div class="col-md-6 p-0">  
        <div class="containerImage">
            <div style="text-align:left">   
                <img src="/assets/client/images/Contact_Us_Background.png" class="img-fluid" alt="Snow" style="width:92%;">
                
            </div>
            <div class="top-left">
                <div style="text-align:left;padding-right:6.5vw !important;padding-left:6.5vw;padding-top:5vw">
                    <p  style="font-size:4vw;font-family:HKGroteskBlack;line-height:1.2"><b>Do you have a <br> project to work  <br> with? Tell it to us!</b></p>
                    <div style="padding-right:6.5vw;padding-top:3vw">
                        <p style="font-size:1.5vw;font-family:HKGroteskRegular">If you have some interests in building your <br> project with us,</p>
                        <p style="font-size:1.5vw;margin-bottom:60px;font-family:HKGroteskBold"><span style="font-family:HKGroteskBold">Fill out the form and one of our team <br> members will get back to you right away.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6" style="padding-right:15%;padding-top:5vw;padding-left:5%">
        <div>
            <form style="font-family:HKGroteskBold">
                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Full Name</label>
                    <input style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Rizha Teuku">
                </div>

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Company or Organization Name</label>
                    <input style="border:1px solid gray"  type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Flick">
                </div>

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Phone Number</label>
                    <input style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="08826543789">
                </div>
                
                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Email</label>
                    <input style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="zhoonnaga@gmail.com">
                </div>

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">About The Project</label>
                    <textarea style="border:1px solid gray"  class="form-control" id="contactInputForm" rows="3" placeholder="I want to build an app that travels through time!"></textarea>
                </div>

                <button type="submit" class="buttonBlue" style="border:0px;width:100%;margin-top:50px" >Submit</button>
            </form>
        </div>
    </div>
</div>


<x-flick-footer />

@endsection