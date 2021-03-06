@extends('client/layouts/main')

@section('title', 'Flick Software Contact Us')

@section('container')
<div class="row m-0" style="padding-bottom:60px">
    <div class="col-md-6 p-0">  
        <div class="containerImage">
            <div style="text-align:left">   
                <img id="contactIllustration" src="/assets/client/images/Contact_Us_Background.png" class="img-fluid" alt="Snow" style="width:92%;">
                
            </div>
            <div class="top-left wow fadeInLeft">
                <div style="text-align:left;padding-right:6.5vw !important;padding-left:6.5vw;padding-top:5vw">
                    <p id="CotactTitleText" style="font-size:4vw;font-family:HKGroteskBlack;line-height:1.2"><b>Do you have a <br> project to work  <br> with? Tell it to us!</b></p>
                    <div style="padding-right:6.5vw;padding-top:3vw">
                        <p id="CotactDescriptionText" style="font-size:1.5vw;font-family:HKGroteskRegular">If you have some interests in building your <br> project with us,</p>
                        <p id="CotactSubDescriptionText" style="font-size:1.5vw;margin-bottom:60px;font-family:HKGroteskBold"><span style="font-family:HKGroteskBold">Fill out the form and one of our team <br> members will get back to you right away.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 formContactUs" style="padding-right:15%;padding-top:80px;padding-left:5%">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Success!</h4>
                <p>{{ session()->get('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('client.store') }}" style="font-family:HKGroteskBold">
                @csrf
                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Full Name</label>
                    <input name="name" value="{{ old('name') }}" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Rizha Teuku">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Company or Organization Name</label>
                    <input name="company" value="{{ old('company') }}" style="border:1px solid gray"  type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Flick">
                </div>
                @error('company')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Phone Number</label>
                    <input name="phone" value="{{ old('phone') }}" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="08826543789">
                </div>
                @error('phone')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Email (Optional)</label>
                    <input name="email" value="{{ old('email') }}" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="zhoonnaga@gmail.com">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">About The Project</label>
                    <textarea name="description" style="border:1px solid gray"  class="form-control" id="contactInputForm" rows="3" placeholder="I want to build an app that travels through time!">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <button type="submit" class="buttonBlue" style="border:0px;width:100%;margin-top:50px">Submit</button>
            </form>
        </div>
    </div>
</div>


<x-flick-footer />

@endsection