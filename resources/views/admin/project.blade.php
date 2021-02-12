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
      <h2 class="pt-4 pb-4 m-0">FlickSoftware Projects</h2>
    </div>
    <div class="col-md-10">
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
            @foreach ($project_types as $project_type)
              <a class="dropdown-item @if (Request::get('filter') == $project_type->type) active @endif" href="{{ request()->fullUrlWithQuery(['filter'=>$project_type->type]) }}">{{ $project_type->type }}</a>
            @endforeach
            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['filter'=>'']) }}">None</a>
          </div>
        </div>
        <form method="GET" action="{{ route('admin.project.index') }}" style="margin-left: 40px">
          <div class="row">
            <div class="col-md-8" style="padding: 0px">
              <input class="form-control" style="background-color: #EDEDED;color:#B1B1B1;" type="search" name="search" placeholder="Search Projects Here" aria-label="Search" value="{{ Request::get('search') }}">
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
    <div class="col-md-2">
      <a href="/admin/add-project" class="btn btn-warning pull-right">Add Project</a>
    </div>
  </div> 
</div>
      
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Logo + Description & Sub-Description</th>
        <th scope="col">Scope</th>
        <th scope="col">Technologies</th>
        <th scope="col">Deliverables</th>
        <th scope="col">Headline & Sub</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="font-family: HKGroteskMedium">
      @foreach ($projects as $project)
        <tr>
          <td scope="row" style="font-family: HKGroteskBold">{{ $loop->iteration }}</td>
          <td scope="col">
            <img style="height: 50px" class="mb-1" src="{{ $project->logo_file }}" alt="{{ $project->title }}">
            <p style="font-family: HKGroteskBold" class="mb-1">{{ $project->description }}</p>
            <p>{{ $project->sub_description }}</p>
          </td>
          <td scope="col">{{ $project->scope }}</td>
          <td scope="col">{{ $project->technologies }}</td>
          <td scope="col">{{ $project->deliverables }}</td>
          <td scope="col">
            <p style="font-family: HKGroteskBold" class="mb-1">{{ $project->headline }}</p>
            <p>{{ $project->sub_headline }}</p>
          </td>
          <td scope="col" style="font-family: HKGroteskBold">{{ $project->project_type->type }}</td>
          <td>
            <button class="btn mb-2" type="button" style="color: white; background-color:CornflowerBlue;" onclick="parent.open('{{ url('/project').'/'.$project->id }}')">View</button>
            @if (!$project->featured_project) 
              <button class="btn btn-info mb-2" type="button" style="color: white; background-color:DarkCyan;" onclick='return confirm("Are you sure you want to Feature this project?")'>Feature</button>
            @endif
            <button class="btn" type="button" style="color: white; background-color:Crimson;" onclick='return confirm("Are you sure you want to Delete this project?")'>Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="d-flex justify-content-center">
  {{ $projects->appends(request()->input())->links() }}
</div>
@endsection