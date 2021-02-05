<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title></title>
    <style>
      @font-face {
        font-family: HKGroteskBold;
        src: url(/fonts/hk-grotesk/HKGrotesk-Bold.otf);
      }

      @font-face {
        font-family: HKGroteskRegular;
        src: url(/fonts/hk-grotesk/HKGrotesk-Regular.otf);
      }

      body{
        background-color:#EEEEEE;
      }

      .text{
        text-align:center;
      }

      h1 {
        font-family: 'HKGroteskBold';
        font-size:30px;
      }

      h5, p {
        font-family: 'HKGroteskRegular';
      }

      .block {
        display: block;
        width: 40%;
        border: none;
        background-color: #3F92D8;
        padding: 14px 28px;
        font-size: 16px;
        font-family:HKGroteskBold;
        cursor: pointer;
        border-radius:10px;
        text-align: center;
        margin: 0 auto;
        color:white;
      }
    </style>
  </head>
  <body>
    <div style="background-color:white; margin:50px 400px;">
      <div class="container pt-5 text">
        <img src="assets/logoflick.svg" alt="Flick Software">
      </div>
      <div class="text pt-5">
        <h1>New Project Offer Available!</h1>
      </div>
      <div class="text pt-3" style="padding:0px 50px">
        <h5 class="pb-2" ><b>Client Details:</b></h5>
        <p><b>Name:</b> {{ $client->name }}</p>
        <p><b>Company:</b> {{ $client->company }}</p>
        <p><b>Phone:</b> {{ $client->phone }}</p>
        <p><b>Email:</b> {{ $client->email }}</p>
        <p><b>Description:</b> {{ $client->description }}</p>
        {{-- Example Data --}}
        {{-- <p><b>Name:</b> Alifio Rasendriya Rasyid</p>
        <p><b>Company:</b> NinetySevenDevID</p>
        <p><b>Phone:</b> 08112383399</p>
        <p><b>Email:</b> official.alifio@gmail.com</p>
        <p><b>Description:</b> I want to build an app that travels through time!</p> --}}
      </div>
      <div class="text pt-3 pb-4">
        <a type="button" class="block" href="{{ url('/admin/client') }}">Click here to check the new client out.</a>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>