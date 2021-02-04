@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')

<div class="container" >
    <h2 style="font-family:HKGroteskBold !important;">FlickSoftware add new projects</h2>
</div>

<div class="container">
    <form>
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Name</label>
                <input type="email" class="form-control border " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%;">
            </div>
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Slogan</label>
                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Description</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
            <div class="mb-3 col-6 ">
                <label for="Insert name" class="form-label">Something</label>
                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="width:70%">
            </div>
        </div>
        <div class="row">
            <form action="/action_page.php">
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            <div style="text-align: right"> 
                <button type="button" class="" style="background-color:#FACA00; border-radius:10px"> 
                  Add projects
                </button> 
            </div> 
            </form>
        </div>
        
    </form>
</div>


@endsection