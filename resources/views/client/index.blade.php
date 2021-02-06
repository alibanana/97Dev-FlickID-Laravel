<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- INDEX CSS -->
    <link rel="stylesheet"  type="text/css"  href="/css/client/index.css">
    <!--load all fontawesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    
    <title>Flick Software</title>
    <style>
      html{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
      }
      body{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/background-image-landing-page-with-hexagons.png");
        background-position:right top;
        background-repeat: no-repeat;
        background-size: 65%;
      } 

      .experienceBG{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/landing_page_bg_3.png");
        background-position:right top;
        background-repeat: no-repeat;
        background-size: 100%;
      } 

      .topFooterBG{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        background-image: url("/assets/client/images/landing_page_bg_4.png");
        background-position:left top;
        background-repeat: no-repeat;
        background-size: 93%;
      }

      /* Container holding the image and the text */
      .container {
        position: relative;
        text-align: center;
      }

      /* Centered text */
      .centered {
        position: absolute;
        top: 50%;
        left: 85%;
        transform: translate(-50%, -50%);
        text-align:left;
      }
      /* Container holding the image and the text */
      .containerImage {
        position: relative;
        text-align: center;
        color: black;
      }

      /* Top left text */
      .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
      }

      /* Top left text */
      .top-left2 {
        position: absolute;
        top: 8px;
        left: 0px;
      }
      /* Top right text */
      .top-right {
        position: absolute;
        top: 8px;
        right: 16px;
      }

      /* mobile */
      @media only screen and (max-width: 768px) {
      }

      /* ipad and small laptops */
      @media only screen and (min-width: 768px) {
      }

      /* larger desktops and monitors */
      @media only screen and (min-width: 1500px) {

      }

    </style>
  </head>
  <body style="">
    <!-- START OF NAVBAR -->
    <div class="row m-0" style="z-index:99;padding-top:30px">
      <div class="col-md-12 p-0">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <p></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              </ul>
              <div class="" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:1.5vw;font-family:HKGroteskBold">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" style="margin-right:65px;color:black">Portofolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:65px;color:black;">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:65px;color:black">The Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:65px;color:black">Career</a>
                  </li>
                  <li class="nav-item" style="">
                    <a class="nav-link" href="#" style="color:#3F92D8;background-color:#ffff;margin-right:16px;padding:10px 70px;border-radius:10px">Contact us!</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- END OF NAVBAR -->

    <!-- START OF TOP CONTENT-->
    <div class="row m-0">
      <div class="col-md-6 testing" style="padding-left:8.5%" id="paddingLeft"> 
        <div style="display:flex;align-items: center;margin-top:7vw">
          <img src="/assets/client/images/flick-logo-blue.svg" class="img-fluid" style="width:13%;"  id="flickLogo">
          <h2 style="font-family:HKGroteskRegular;color:#3F92D8;margin-left:15px;font-size:3vw" id="flickLogo"><span style="font-family:HKGroteskBlack"> <b>Flick</b></span>Software</h2>
        </div>
        <p  style="font-size:5vw;margin:2vw 0vw;font-family:HKGroteskBlack;line-height:1.2" id="titleText"> <b> Build and grow<br>together with us</b></p>
        <p style="font-size:1.8vw;margin-bottom:6vw;font-family:HKGroteskBold" id="descriptionText"><span style="font-family:HKGroteskRegular">We develop softwares from</span>  <b>mobile apps, <br> web apps, even advanced app-based services</b> </p>
        <a style="" class="buttonBlue" href="#">Discover our works</a>
      </div>

      <div class="col-md-6 p-0">
        <!-- <img src="/assets/client/images/desktop-icon.svg" style="width:25%" alt=""> -->
        <!--<img src="/assets/client/images/background-image-landing-page-with-hexagons.png" class="img-fluid" style="margin-top:-160px;position:absolute" alt="">-->
      </div>
    </div>
    <!-- END OF TOP CONTENT -->

    <!-- START OF WHAT WE PROVIDE -->
    <div class="row m-0" style="padding-left:8.5%;padding-top:18vw;padding-bottom:14vw">
      <div class="col-md-12" >
        <p style="font-size:5vw;font-family:HKGroteskBlack"> <b>What we provide</b></p>

      </div>
      <div class="col-md-4" style="padding-top:4vw">
        <div >
          <img src="/assets/client/images/mobile-apps-icon.svg" style="width:9vw" alt="">
          <p style="font-size:2.6vw;font-family:HKGroteskBlack;margin-top:15px">Mobile Apps</p>
          <div style="padding-right:100px">
            <p style="font-size:1.5vw;font-family:HKGroteskRegular">Android Java, Android Kotlin, iOS Objective C, iOS Swift</p>
          </div>
          <a href="" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See our work <i style="font-size:25px;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
          
        </div>
      </div>

      <div class="col-md-4" style="padding-top:4vw">
        <div>
          <img src="/assets/client/images/websites-icon.svg" style="width:9vw" alt="">
          <p style="font-size:2.6vw;font-family:HKGroteskBlack;margin-top:15px">Websites</p>
          <div style="padding-right:100px">
            <p style="font-size:1.5vw;font-family:HKGroteskRegular">Android Java, Android Kotlin, iOS Objective C, iOS Swift</p>
          </div>          
          <a href="" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See our work <i style="font-size:25px;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
          
        </div>
      </div>

      <div class="col-md-4" style="padding-top:4vw">
        <div>
          <img src="/assets/client/images/desktop-icon.svg" style="width:9vw" alt="">
          <p style="font-size:2.6vw;font-family:HKGroteskBlack;margin-top:15px">Desktop</p>
          <div style="padding-right:100px">
            <p style="font-size:1.5vw;font-family:HKGroteskRegular">Android Java, Android Kotlin, iOS Objective C, iOS Swift</p>
          </div>          
          <a href="" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See our work <i style="font-size:25px;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
          
        </div>
      </div>
    </div>

    <!-- END OF WHAT WE PROVIDE -->

    <!-- WHAT WE HAVE BUILD -->
    
    <div class="row m-0" style="padding-bottom:7vw" >

      <div class="col-md-7 p-0">
      
        <div class="containerImage">
          <div style="text-align:left">   
              <img src="/assets/client/images/Hex_Left_Path.svg" class="img-fluid" alt="Snow" style="width:93%;filter: invert(88%) sepia(22%) saturate(3974%) hue-rotate(357deg) brightness(94%) contrast(108%);">
          </div>
            <div class="top-left">
              <div style="text-align:left;!important;padding-left:15%;padding-top:18%">
                <div style="display:flex;align-items: flex-start">
                  <img src="/assets/client/images/Flick Featured Project Ilustration.png" class="img-fluid" style="width:16vw" alt="">
                  <div style="margin-left:30px">
                      <img src="/assets/client/images/Flick Featured Project Logo.png" class="img-fluid" style="width:11vw"  alt="">
                    <div style="width:22vw">
                      <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:3vw">A financial technology company providing solutions to users and merchant. <span style="font-family:HKGroteskBold">We have created e-money, peer-to-peer lending, remittance, e-commerce and point-of-sales systems.</span></p>
                    </div>
                    <div style="padding-top:15px">
                      <a href="" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8;">See our work <i style="font-size:1.5vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>                
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-5 p-0">
        <div class="containerImage">
          <div style="">   
            <img src="/assets/client/images/Hex_-_What_weve_build.svg" class="img-fluid" alt="Snow" style="width:65%;margin-top:-40px;margin-left:-20vw">
          </div>
          <div class="top-left2">
            <div style="text-align:left;!important;margin-left:-2vw">
              <p style="font-size:5vw;font-family:HKGroteskBlack"> <b>What we've build</b></p>
              <div>
                <p style="font-size:1.8vw;font-family:HKGroteskRegular">We help business to grow to their fullest <br> potential <span style="font-family:HKGroteskBlack">through technology</span></p>
              </div>              
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5 p-0">
      </div>

      <div class="col-md-7 p-0" style="margin-top:-24vw">
        <div class="containerImage">
          <div style="text-align:right">   
              <img src="/assets/client/images/Hex_Right_Path.svg" class="img-fluid" alt="Snow" style="width:93%;filter: invert(54%) sepia(94%) saturate(669%) hue-rotate(352deg) brightness(91%) contrast(117%);">
          </div>
            <div class="top-right">
              <div style="text-align:left;!important;padding-left:8.5%;padding-top:18%">
                <div style="display:flex;align-items: flex-start">
                  <img src="/assets/client/images/BeePay Featured Project Ilustration.png" class="img-fluid" style="width:16vw" alt="">
                  <div style="margin-left:30px;">
                      <img src="/assets/client/images/BeePay Featured Project Logo.png" class="img-fluid" style="width:11vw;!important"  alt="">
                    <div style="width:22vw;padding-right:3.1vw">
                      <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:22px">Beepay is a financial technology company based in Myanmar. <span style="font-family:HKGroteskBold">creating ecosystem by providing a credit card system that is able to connect to e-commerce and point of sales</span></p>
                    </div>
                    <div style="padding-top:15px">
                      <a href="" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8;">See our work <i style="font-size:1.5vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>                
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-7 p-0" style="margin-top:-24vw">
      
      <div class="containerImage">
        <div style="text-align:left">   
            <img src="/assets/client/images/Hex_Left_Path.svg" class="img-fluid" alt="Snow" style="width:93%;filter: invert(52%) sepia(78%) saturate(1172%) hue-rotate(200deg) brightness(105%) contrast(101%);">
        </div>
          <div class="top-left">
            <div style="text-align:left;!important;padding-left:15%;padding-top:7%">
                <img src="/assets/client/images/mobilocal Featured Project Ilustration.png" class="img-fluid" style="width:28vw" alt="">
                <div style="margin-top:40px">
                    <img src="/assets/client/images/mobilocal Featured Project Logo.png" class="img-fluid" style="width:11vw"  alt="">
                  <div style="width:75%">
                    <p style="font-family:HKGroteskRegular;font-size:1.5vw;margin-top:10px">Mobilocal is a car purchasing platform that connects buyers and dealers in an instant. We help buyers choose and purchase their perfect car as efficiently as possible by comparing best offers from dealers around.<span style="font-family:HKGroteskBold"></span></p>
                  </div>
                  <div style="padding-top:15px">
                    <a href="" style="font-size:1.5vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8;">See our work <i style="font-size:1.5vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
                           
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5 p-0" style="margin-left:-40px;margin-top:7vw;z-index:99">
        <p style="font-size:5vw;font-family:HKGroteskBlack;"> <b>Explore more on <br> our fine works</b></p>
        <div>
          <a href="" style="font-size:1.8vw;font-family:HKGroteskBold;text-decoration:none;color:#3F92D8">See more work <i style="font-size:1.8vw;margin-left:5px" class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>

    </div>
    <!-- END OF WHAT WE HAVE BUILD -->

    <!-- START OF A TEAM THAT HAS YEARS OF EXPERIENCE -->

    <div class="row m-0 experienceBG" >
      <div class="col-md-12 p-0">
        <div style="padding-left:130px;color:white" >
          <p  style="font-size:64px;margin-top:50px;font-family:HKGroteskBlack;"> <b>A team that has years of experience <br> on developing technologies</b></p>
          <p style="font-size:25px;margin-bottom:60px;font-family:HKGroteskRegular">Built by <span style="font-family:HKGroteskBold"> young minds  </span>to deliver techonlogies that we needs.</p>
          <div style="display:flex"> 
            <div style="background-color:#FFA5A5;width:420px;border-radius:15px;color:#142850;padding:25px;">
              <div style="display:flex;justify-content:space-between;align-items:center ">
                <div> 
                  <p style="font-size:35px;font-family:HKGroteskBlack;"> <b>About Us</b></p>
                  <p style="font-size:1.9vw;font-family:HKGroteskRegular;">Know more about how <br>we work in action</p>
                </div>
                <a href="" style="color:white">
                  <i class="fas fa-chevron-circle-right" style="font-size:40px"></i>
                </a>
              </div>
            </div>

            <div style="background-color:#81D1C7;width:460px;border-radius:15px;color:#142850;padding:25px; margin-left:80px">
              <div style="display:flex;justify-content:space-between;align-items:center ">
                <div> 
                  <p style="font-size:35px;font-family:HKGroteskBlack;"> <b>Join the team!</b></p>
                  <p style="font-size:1.9vw;font-family:HKGroteskRegular;">Join our journey to enable <br> and deliver technologies</p>
                </div>
                <a href="" style="color:white">
                  <i class="fas fa-chevron-circle-right" style="font-size:40px"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row m-0" style="background-color:#EDF7FF">
      <div class="col-md-12 p-0" style="margin-top:-180px">
        <div class="containerImage">
          <div style="text-align:left">   
            <img src="assets/client/images/landing_page_bg_4.png" alt="" style="width:93%">
          </div>
            <div class="top-left">
              <div style="text-align:left;!important;padding-top:50px">
                
              <div style="padding-left:130px">
                <p style="font-size:64px;font-family:HKGroteskBlack;color:#142850"> Ready to start a project with us?</p>
                <div style="margin-top:40px">
                  <a href="" style="border:2px solid #3F92D9;padding:10px 50px;text-decoration:none;font-family:HKGroteskBold;border-radius:10px;color:#3F92D9;font-size:1.9 vw;">Let's Talk! <span style="font-size:25px;margin-left:5px;margin-top:200px !important"> <i  class="fas fa-long-arrow-alt-right"></i></span></a>
                </div>
                <div>
                  <hr style="margin-top:140px;width:120%">
                </div>
                <div class="row m-0" >
                  <div class="col-md-6">
                    <p style="font-size:40px;font-family:HKGroteskBlack;margin-top:60px;color:#142850">Jakarta</p>
                    <p style="font-family:HKGroteskRegular;font-size:20px;margin-top:10px"> <b>+62 811 8128 171</b></p>
                    <p style="font-family:HKGroteskRegular;font-size:18px;margin-top:10px">Jl. Harapan 3 No. 5, Malayka Residence <br> Bintaro, Pesanggrahan, Jakarta Selatan, 12330</p>
                  </div>
                  <div class="col-md-6" style="padding-left:150px">
                    <p style="font-size:40px;font-family:HKGroteskBlack;margin-top:60px;color:#142850">Follow us!</p>
                    <div style="display:flex">
                      <a href="" style="margin-top:20px !important;margin-right:40px !important">
                          <img src="/assets/client/images/linkedin.png" class="img-fluid"  alt="" style="width:100%"> 
                      </a>
                      <a href="" style="margin-top:20px !important;margin-right:40px !important">
                          <img src="/assets/client/images/instagram.png"  alt="" style="width:100%"> 
                      </a>
                      <a href="" style="margin-top:20px !important;margin-right:40px !important">
                          <img src="/assets/client/images/youtube.png"  alt="" style="width:100%"> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF A TEAM THAT HAS YEARS OF EXPERIENCE -->

    <!-- Start of footer -->
    <div class="row m-0" style="padding-left:130px;background-color:#EDF7FF;padding-top:60px;padding-bottom:60px">
        <div class="col-6 p-0" > 
          <div style="display:flex;align-items: center;justfiy-content: flex-end;">
            <div style="display:flex;align-items: center">
              <img src="/assets/client/images/flick-logo-blue.svg" class="img-fluid" style="width:16%" alt="">
              <h2 style="font-family:HKGroteskRegular;color:#3F92D8;margin-left:15px;font-size:35px"><span style="font-family:HKGroteskBlack"> <b>Flick</b></span>Software</h2>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div style="display:flex;align-items: center;justfiy-content: space-between;">
            <a class="nav-link" aria-current="page" href="#" style="margin-right:30px;color:#3F92D8;font-family:HKGroteskBold;font-size:22px">Portofolio</a>
            <a class="nav-link" aria-current="page" href="#" style="margin-right:30px;color:#3F92D8;font-family:HKGroteskBold;font-size:22px">Services</a>
            <a class="nav-link" aria-current="page" href="#" style="margin-right:30px;color:#3F92D8;font-family:HKGroteskBold;font-size:22px">The Team</a>
            <a class="nav-link" aria-current="page" href="#" style="color:#3F92D8;font-family:HKGroteskBold;font-size:22px">Career</a>
          </div>
        </div>
        <div class="col-12" style="text-align:right">
          <p style="font-size:20px;font-family:HKGroteskRegular;color:#142850;margin-bottom:0px !important;padding-right:84px;margin-top:13px">&copy;2021 PT. Kreigan Sentral Teknologi</p>
        </div>
    </div>
    <!-- end of footer -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9864pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>