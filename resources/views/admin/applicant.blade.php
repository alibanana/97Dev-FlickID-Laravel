@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')
<div class="container" style="padding-bottom:20px;padding-top:40px;">
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-0 mb-4" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session()->get('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class = "row"> 
    <div class ="col-md-12">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <h2 style="padding-top:0px !important"> FlickSoftware Job Applicants</h2>
        <a href="{{ route('admin.question.index') }}" class="btn btn-warning" title="Tooltip">View Question List</a>
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
      @foreach ($applicants as $applicant)
        <tr>
          <td scope="col">{{ $applicant->firstname }} {{ $applicant->lastname }}</td>
          <td scope="col">{{ $applicant->email }}</td>
          <td scope="col">{{ $applicant->phone }}</td>
          <td scope="col">{{ $applicant->address }}</td>
          <td scope="col"><a  style="font-family:HKGroteskRegular !important" href="{{ asset($applicant->cv_file) }}" target="_blank">Open CV</a></td>
          <td scope="col">{{ $applicant->job->title }}</td>
          <td scope="col">
            @foreach ($applicant->applicant_answers as $applicant_answer)
              {{ $loop->iteration }}. {{ $applicant_answer->question->question  }}<br>
              Answer: {{ $applicant_answer->answer }}@if($loop->last)<br>@else<br><br>@endif
            @endforeach
          </td>
          @if ($applicant->status == "Pending")
            <td scope="col" style="color: orange;">{{ $applicant->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <form action="{{ route('admin.applicant.update', $applicant->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Accepted">
                <button class="btn" type="submit" style="color: white; background-color:ForestGreen;" onclick='return confirm("Are you sure you want to Accept this applicant?")'>Accept</button>
              </form>
              <form action="{{ route('admin.applicant.update', $applicant->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Rejected">
                <button class="btn" type="submit" style="color: white; background-color:Crimson;" onclick='return confirm("Are you sure you want to Reject this applicant?")'>Reject</button>
              </form>
            </td>
          @elseif ($applicant->status == "Rejected")
            <td scope="col" style="color: red;">{{ $applicant->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <form action="{{ route('admin.applicant.update', $applicant->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Pending">
                <button class="btn" type="submit" style="color: black; background-color:NavajoWhite;" onclick='return confirm("This will change the applicant status to Pending, are you sure?")'>Undo</button>
              </form>
            </td>
          @else
            <td scope="col" style="color: green;">{{ $applicant->status }}</td>
              <td scope="col" style="white-space: nowrap; width: 1%;">
                <form action="{{ route('admin.applicant.update', $applicant->id) }}" method="post" style="display: inline-block">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="status" value="Pending">
                  <button class="btn" type="submit" style="color: black; background-color:NavajoWhite;" onclick='return confirm("This will change the applicant status to Pending, are you sure?")'>Undo</button>
                </form>
              </td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection