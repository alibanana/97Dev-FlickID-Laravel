@extends('client/layouts/main')

@section('title', 'Flick Software Contact Us')

@section('container')
<!-- START OF POPUP -->
<div id="forgot_password" class="overlay">
    <div class="popup">
    <a class="close" href="#" >&times;</a>
    
    <div class="content" style="padding:20px">
        <h1>Forgot your password?</h1>
        <div class="col-md-12">
        <form>
        <div class="form-group">
            <label for="inputName">Enter your email</label>
            <input type="email" class="form-control" id="" placeholder="Here insert your registered email">
        </div>

        <div style="text-align:right;margin-top:10px">
            <button type="submit" class="btn btn-warning btn-sm" >Send Email</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>
</div>
<!-- END OF POPUP -->


<div class="row m-0" style="padding-bottom:60px">
    <div class="col-md-6 p-0">  
        <div class="containerImage">
            <div style="text-align:left">   
                <img src="/assets/client/images/Contact_Us_Background.png" class="img-fluid" alt="Snow" style="width:92%;">
                
            </div>
            <div class="top-left">
                <div style="text-align:left;padding-right:6.5vw !important;padding-left:6.5vw;padding-top:8vw">
                    <p  style="font-size:4vw;font-family:HKGroteskBlack;line-height:1.2"><b>Login to admin dashboard</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6" style="padding-right:15%;padding-top:80px;padding-left:5%">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Alright!</h4>
                <p>{{ session()->get('success') }}</p>
            </div>
        @endif
        <div>
            <form enctype="multipart/form-data" method="POST" action="" style="font-family:HKGroteskBold">
                @csrf
                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Email</label>
                    <input name="email" style="border:1px solid gray" type="email" class="form-control" id="contactInputForm" aria-describedby="" placeholder="zhoonnaga@gmail.com">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="" style="margin:17px 0px 7px 0px">Password</label>
                    <input name="password" style="border:1px solid gray" type="password" class="form-control" id="contactInputForm" aria-describedby="" placeholder="zhoonnaga@gmail.com">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div  style="padding-top:10px !important">
                    <a href="#forgot_password">Forgot your password?</a>
                </div>
                <button type="submit" class="buttonBlue" style="border:0px;width:100%;margin-top:50px">Login</button>
            </form>
        </div>
    </div>
</div>


<x-flick-footer />

@endsection