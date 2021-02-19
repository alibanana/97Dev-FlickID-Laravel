@extends('client/layouts/main')

@section('title', 'Flick Software Join Us')

@section('container')
<div>
    <div class="row m-0" style="padding-bottom:5vw">
        <div class="col-md-12 p-0">  
            <div class="containerImage">
                <div style="text-align:left">   
                    <img src="/assets/client/images/Career_Background_Top.png" class="img-fluid" alt="Snow" style="width:100%">
                    
                </div>
                <div class="top-left wow fadeInLeft">
                    <div style="text-align:left;padding-right:6.5vw !important;padding-left:6.5vw;padding-top:12vw">
                        <p  style="font-size:5vw;font-family:HKGroteskBlack;line-height:1.2"><b>Join our <br> incredible journey!</b></p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="row m-0 mobilePadding" style="padding:0px 16vw">
        <div class="col-md-12" style="text-align:center;padding:0px 10vw">
            <div style="background-color:#E8F5FF;border-radius:4vw;padding:3vw">
                <p  style="font-size:3.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626" id="titleText"><b>Apply now!</b></p>
                <p  style="font-size:1.4vw;font-family:HKGroteskRegular;color:#262626" id="descriptionText"><b>Team up with talented people inside FlickSoftware!
                    We are working together making the utmost of technology,
                    helping businesses to grow and fulfill their potential.</b>
                </p>
            </div>
        </div>
        @if (session()->has('success'))
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
          <div class="alert alert-success alert-dismissible fade show mt-2 mb-0" role="alert">
            <h4 class="alert-heading">Success!</h4>
            <p>{{ session()->get('success') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
        @endif
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
            <p id="titleText" style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Personal Information</b></p>
        </div>
    </div>


    <!-- START OF FORM -->

    <form enctype="multipart/form-data" method="POST" action="{{ route('applicant.store') }}" style="font-family:HKGroteskBold" class="joinUsForm">
      @csrf
      <div class="row m-0 mobilePadding" style="padding:0px 16vw;font-size:1.2vw" >
        <div class="col-md-6" style="text-align:left">
          <div class="form-group">
            <label for="" style="margin:2vw 0px 7px 0px;">First Name</label>
            <input name="firstname" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Rizha">
          </div>
          @error('firstname')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="col-md-6" style="text-align:left">
          <div class="form-group">
            <label for="" style="margin:2vw 0px 7px 0px">Last Name</label>
            <input name="lastname" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="Teuku">
          </div>
          @error('lastname')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="" style="margin:2vw 0px 7px 0px">Email</label>
            <input name="email" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="zhoonnaga@gmail.com">
          </div>
          @error('email')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="col-md-12">
          <label for="" style="margin:2vw 0px 7px 0px">Phone Number</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text" style="border-radius: 15px 0px 0px 15px;padding:12px 15px" >
              +62
              </div>
            </div>
            <input name="phone" type="number" style="border:1px solid gray;border-radius: 0px 15px 15px 0px;padding:12px 15px" class="form-control" placeholder="08111377883">
          </div>
          @error('phone')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="" style="margin:2vw 0px 7px 0px">Address</label>
            <input name="address" style="border:1px solid gray" type="text" class="form-control" id="contactInputForm" aria-describedby="" placeholder="">
          </div>
          @error('address')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <!-- start of drag and drop -->
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
          <p id="titleText" style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Profile</b></p>
        </div>

        <div class="col-md-12" style="text-align:left;">
          <div class="drop-zone">
            <span class="drop-zone__prompt" style="font-family:HKGroteskBold;color:black;font-size:1.7vw"> <span style="color:#3F92D8" >Upload a file</span> or drag and drop here</span>
            <input type="file" name="cv_file" class="drop-zone__input" accept=".pdf">
          </div>
          @error('cv_file')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <!-- end of drag and drop -->

        <div class="col-md-12" style="text-align:left;margin-top:5vw">
          <p id="titleText" style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Job Position</b></p>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <select name="job_id" class="form-control" id="contactInputForm" style="border:1px solid gray">
              @foreach ($offerable_positions as $position)
                <option value="{{ $position->id }}">{{ $position->title }}</option>
              @endforeach
            </select>
          </div>
          @error('job_id')
          <span class="invalid-feedback" role="alert" style="display: block !important;">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <!-- START OF ADDED INFORMATION-->
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
          <p id="titleText" style="font-size:2.5vw;font-family:HKGroteskBlack;line-height:1.2;color:#262626"><b>Added Information</b></p>
        </div>

        @if (session()->has('question_unanswered_error'))
        <div class="col-md-12" style="text-align:left;">
          <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <p>{{ session()->get('question_unanswered_error') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
        @endif

        @foreach ($questions as $question)
          <input type="hidden" name="question_ids[]" value="{{ $question->id }}">
          @if ($question->question_type->type == "Multiple-Choice")
            <x-mcq-question :question="$question" />
            @error('applicant_answers.'.$loop->index)
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          @elseif ($question->question_type->type == "Slider")
            <x-slider-question :question="$question" />
            @error('applicant_answers.'.$loop->index)
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          @else
            <x-open-question :question="$question" />
            @error('applicant_answers.'.$loop->index)
            <span class="invalid-feedback" role="alert" style="display: block !important;">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          @endif
        @endforeach

        <!-- END OF ADDED INFORMATION -->
        <div class="col-md-12" style="text-align:left;margin-top:5vw">
          <button type="submit" class="buttonBlue w-100" style="border:0px">Submit</button>
        </div>
      <!-- END OF FORM -->
      <div style="margin-top:10vw"></div>
    </form>

</div>
<x-flick-footer />


<script src="/js/main.js"></script>
@endsection