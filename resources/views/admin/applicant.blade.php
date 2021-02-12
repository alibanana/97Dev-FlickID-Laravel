@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')


 
<div class="container" style="padding-bottom:20px;padding-top:40px;">
  <div class = "row"> 
    <div class ="col-md-12">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <h2 style="padding-top:0px !important"> FlickSoftware Job Applicants</h2>
        <a href="/admin/applicant/questions" class="btn btn-warning" title="Tooltip">View Question List</a>

      </div>  
    </div>  
  </div>    
</div>
      
      </div>
    <div class="container">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">CV</th>
      <th scope="col">Job Position</th>
      <th scope="col">Info</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody style="font-family:HKGroteskRegular !important">
    <tr>
      <td scope="col">Fernandha Dzaky Saputra</td>
      <td scope="col">fernandhadzaky@gmail.com</td>
      <td scope="col">08111377893</td>
      <td scope="col">Jl. Cipete 2 No. 3, Jakarta Selatan, 14210</td>
      <td scope="col"> <a  style="font-family:HKGroteskRegular !important" href="/assets/client/applicants_cv/CV FERNANDHA DZAKY 2021.pdf" target="_blank">Open CV</a></td>
      <td scope="col">Software Developer</td>
      <td scope="col">How long have you been working in the related field? : 2 years</td>
      <td scope="col" style="color: orange;">Pending</td>
      <td>
        <div style="display:flex;justify-content:space-between;align-items:center">
          <button type="button" class="btn btn-success" >Accept</button>
          <button type="button" class="btn btn-danger" >Reject</button>
        </td>
      </div>
      
    </tr>
  </tbody>
</table>
    </div>  


@endsection