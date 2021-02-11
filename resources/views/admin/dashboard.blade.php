@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')


  
<div class="container" >
    <h2 style="font-family:HKGroteskBlack !important;">Welcome Back, Admin!</h2>
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