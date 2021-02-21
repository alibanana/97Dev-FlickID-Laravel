@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')
<!-- START OF POPUP -->
<div id="change_password" class="overlay">
    <div class="popup">
    <a class="close" href="#" >&times;</a>
    
    <div class="content" style="padding:20px">
        <h1>Change password</h1>
        <div class="col-md-12">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <p>{{ session('error') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('admin.user.passwordUpdate') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group pt-3">
                    <label for="inputName">Old password</label>
                    <input name="old_password" type="password" class="form-control mt-2" id="" placeholder="Here insert old password">
                    @error('old_password')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group pt-3">
                    <label for="inputName">New password</label>
                    <input name="password" type="password" class="form-control mt-2" id="" placeholder="Here insert new password">
                    @error('password')
                    <span class="invalid-feedback" role="alert" style="display: block !important;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group pt-3">
                    <label for="inputName">New Confirmed password</label>
                    <input name="password_confirmation" type="password" class="form-control mt-2" id="" placeholder="Here insert new password">
                </div>
                <div style="text-align:right;margin-top:10px">
                    <button type="submit" class="btn btn-primary btn-sm" >Change Password</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
<!-- END OF POPUP -->

  
<div class="container" >
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2 mb-0" role="alert">
            <h4 class="alert-heading">Success!</h4>
            <p>{{ session()->get('success') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div style="display:flex;justify-content:space-between;align-items:center">
        <h2 style="font-family:HKGroteskBlack !important;">Welcome Back, {{ Auth::user()->name }}!</h2>
        <a href="#change_password" class="btn btn-warning" title="Tooltip">Change Passsword</a>

    </div>
</div>
    
<div class="container pt-3">
    <div class="row ">
    <!-- start client section -->
        <div class="col-md-4 p-3">
            <div class="card">
            <h3>Client</h3>
                <hr>
                    <div class="card-body" style="background-color:#145CA8">
                        <h5 class="card-title">Accepted Client</h5>
                        <div>
                            <p class="card-text">{{ $client_counts['Accepted'] }}</p>
                            <i class="fas fa-arrow-circle-right"></i><p >View details</p>
                        </div>
                    </div>
                    <div class="card-body" style="background-color:#149211">
                        <h5 class="card-title">Finished Clients</h5>
                        <div>
                            <p class="card-text">{{ $client_counts['Finished'] }}</p>
                            <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                        </div>                 
                    </div>
                    <div class="card-body" style="background-color:#FFBC69">
                        <h5 class="card-title">Pending Clients</h5>
                        <div>
                            <p class="card-text">{{ $client_counts['Pending'] }}</p>
                            <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                        </div>                   
                    </div>
                    <div class="card-body" style="background-color:#A02B2B">
                        <h5 class="card-title">Rejected Client</h5>
                        <div>
                            <p class="card-text">{{ $client_counts['Rejected'] }}</p>
                            <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                        </div>                  
                    </div> 
            </div>
            
        </div>
        <!-- end client section -->
        <!-- start applicants section -->
        <div class="col-md-4 p-3 ">
            <div class="card">
                <h3>Applicants</h3>
                <hr>
                <div class="card-body" style="background-color:#145CA8">
                    <h5 class="card-title">Accepted Client</h5>
                    <div>
                        <p class="card-text">{{ $applicant_counts['Accepted'] }}</p>
                        <i class="fas fa-arrow-circle-right"></i><p >View details</p>
                    </div>
                </div>
                <div class="card-body" style="background-color:#FFBC69">
                    <h5 class="card-title" >Pending Applicants</h5>
                    <div>
                        <p class="card-text">{{ $applicant_counts['Pending'] }}</p>
                        <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                    </div>                   
                </div>
                <div class="card-body" style="background-color:#A02B2B">
                    <h5 class="card-title">Rejected Applicants</h5>
                    <div>
                        <p class="card-text">{{ $applicant_counts['Rejected'] }}</p>
                        <i class="fas fa-arrow-circle-right"></i><p>View details</p>
                    </div>                  
                </div>
                    
            </div>
            
        </div>
        <!-- end applicant section -->
        <!-- start client total project -->
        <div class="col-md-4 p-3">
            <div class="card">
                <h3>Projects</h3>
                <hr>
                <div class="card-body" style="background-color:#145CA8">
                    <h5 class="card-title">Total Projects</h5>
                    <div>
                        <p class="card-text">{{ $project_count }}</p>
                        <i class="fas fa-arrow-circle-right"></i><p >View details</p>
                    </div>
                </div>

            </div>
            
        </div>
        <!-- end client total project -->
    </div>
</div>
@endsection