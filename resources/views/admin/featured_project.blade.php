@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')


 
<div class="container" style="padding-bottom:20px;padding-top:40px;">
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2 mb-0" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ session()->get('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class = "row"> 
    <div class ="col-md-12">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <h2 style="padding-top:0px !important"> Featured Projects</h2>
      </div>  
    </div>  
  </div>    
</div>
      
</div>
  <div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Logo + Description & Sub-Description</th>
        <th scope="col">Type</th>
        <th scope="col">Position</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="font-family:HKGroteskRegular !important">
      @foreach ($featured_projects as $featured_project)
      <tr>
        <td scope="col">
          <img style="height: 50px" class="mb-1" src="{{ asset($featured_project->project->logo_file) }}" alt="{{ $featured_project->project->title }}">
          <p style="font-family: HKGroteskBold" class="mb-1">{{ $featured_project->project->description }}</p>
          <p>{{ $featured_project->project->sub_description }}</p>
        </td>
        <td scope="col" style="font-family: HKGroteskBold">{{ $featured_project->project->project_type->type }}</td>
        <td scope="col">
          <form action="{{ route('admin.featuredProject.update', $featured_project->id) }}" method="post" style="display:flex;justify-content:space-between;">
            @csrf
            @method('PUT')
            <div style="display:flex">
              <input type="text" name="position" value="{{ $featured_project->position }}" style="">
              <button type="submit">Update</button>
            </div>
          </form> 
        </td>  
        <td>
          <div style="display:flex;justify-content:space-between;align-items:center">
            <form action="{{ route('admin.featuredProject.destroy', $featured_project->id) }}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" onclick='return confirm("Are you sure you want to un feature this project?")'>Unfeature</button>
              </form>         
            </td>
        </div>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection