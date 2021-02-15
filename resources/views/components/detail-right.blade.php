<div class="col-6 wow fadeInLeft" style="text-align:center;padding-top:5vw" id="">
    <img src="{{ asset($projectDetail->ilustration_file) }}" id="project_detail_img" style="width:25vw" alt="">
</div>

<div class="col-6" style="padding-top:5vw" id="">
    <p  style="font-size:3.5vw;margin-bottom:3vw;font-family:HKGroteskBlack;line-height:1.2" id="titleText"> <b>{{ $projectDetail->title }}</b></p>
    <p style="font-size:1.5vw;margin-bottom:3vw;font-family:HKGroteskRegular" id="descriptionText">{{ $projectDetail->description }}</p>
</div>