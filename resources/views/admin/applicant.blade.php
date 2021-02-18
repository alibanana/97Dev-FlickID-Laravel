@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')
<div class="container" style="padding-bottom:20px">
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2 mb-0" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session()->get('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class = "row"> 
    <div class ="col-md-12">
      <h2 class="pt-4 pb-4 m-0">FlickSoftware Job Applicants</h2>
    </div>
    <div class="col-md-8">
      <div style="display:flex">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Request::get('sort')) Sorted By: {{ Request::get('sort') }} @else Sort By @endif
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item @if (Request::get('sort') == "latest") active @endif" href="{{ request()->fullUrlWithQuery(['sort'=>'latest']) }}">Latest</a>
            <a class="dropdown-item @if (Request::get('sort') == "oldest") active @endif" href="{{ request()->fullUrlWithQuery(['sort'=>'oldest']) }}">Oldest</a>
          </div>
        </div>
        <div class="dropdown" style="margin-left: 10px">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Request::get('filter')) Filtered By: {{ Request::get('filter') }} @else Filter By @endif
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item @if (Request::get('filter') == "pending") active @endif" href="{{ request()->fullUrlWithQuery(['filter'=>'pending']) }}">Pending</a>
            <a class="dropdown-item @if (Request::get('filter') == "rejected") active @endif" href="{{ request()->fullUrlWithQuery(['filter'=>'rejected']) }}">Rejected</a>
            <a class="dropdown-item @if (Request::get('filter') == "accepted") active @endif" href="{{ request()->fullUrlWithQuery(['filter'=>'accepted']) }}">Accepted</a>
            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['filter'=>'']) }}">None</a>
          </div>
        </div>
        <form method="GET" action="{{ route('admin.applicant.index') }}" style="margin-left: 40px">
          <div class="row">
            <div class="col-md-8" style="padding: 0px">
              <input class="form-control" style="background-color: #EDEDED;color:#B1B1B1;" type="search" name="search" placeholder="Search Applicants Here" aria-label="Search" value="{{ Request::get('search') }}">
              @if (Request::get('filter'))
              <input name="filter" value="{{ Request::get('filter') }}" hidden>
              @endif
              @if (Request::get('sort'))
              <input name="sort" value="{{ Request::get('sort') }}" hidden>
              @endif
            </div>
            <div class="col-md-4">
              <input class="btn btn-primary" type="submit" value="Search">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-4">
      <a href="{{ route('admin.question.index') }}" class="btn btn-warning pull-right" title="Tooltip">View Question List</a>
    </div>
  </div>    
</div>
      
</div>
  <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Personal Info</th>
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
          <td scope="col">
            <b>Name:</b> {{ $applicant->firstname }} {{ $applicant->lastname }}<br><br>
            <b>Email:</b> {{ $applicant->email }}<br><br>
            <b>Phone:</b> {{ $applicant->phone }}<br><br>
            <b>Address:</b> {{ $applicant->address }}
          </td>
          <td scope="col"><a  style="font-family:HKGroteskRegular !important" href="{{ asset($applicant->cv_file) }}" target="_blank">Open CV</a></td>
          <td scope="col">{{ $applicant->job->title }}</td>
          <td scope="col">
            @foreach ($applicant->applicant_answers as $applicant_answer)
              {{ $loop->iteration }}. {{ $applicant_answer->question->question  }}<br>
              Answer: {{ $applicant_answer->answer }}@if($loop->last)<br>@else<br><br>@endif
            @endforeach
          </td>
          @if ($applicant->status == "Pending")
            <td scope="col" style="color: orange; font-family: HKGroteskMedium">{{ $applicant->status }}</td>
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
            <td scope="col" style="color: red; font-family: HKGroteskMedium">{{ $applicant->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <form action="{{ route('admin.applicant.update', $applicant->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Pending">
                <button class="btn" type="submit" style="color: black; background-color:NavajoWhite;" onclick='return confirm("This will change the applicant status to Pending, are you sure?")'>Undo</button>
              </form>
            </td>
          @else
            <td scope="col" style="color: green; font-family: HKGroteskMedium">{{ $applicant->status }}</td>
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

<div class="d-flex justify-content-center">
  {{ $applicants->appends(request()->input())->links() }}
</div>
@endsection