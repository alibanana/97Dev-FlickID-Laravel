@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Client Page')

@section('container')
<div class="container" style="padding-bottom:20px">
  <div class = "row"> 
    <div class ="col-md-12">
      <h2 class="pt-4 pb-1"> FlickSoftware Clients</h2>
      <div style="display:flex; margin-top: 10px">
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
            <a class="dropdown-item @if (Request::get('filter') == "finished") active @endif" href="{{ request()->fullUrlWithQuery(['filter'=>'finished']) }}">Finished</a>
            <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['filter'=>'']) }}">None</a>
          </div>
        </div>
        <form method="GET" action="{{ route('admin.client.index') }}" style="margin-left: 40px">
          <div class="row">
            <div class="col-md-8" style="padding: 0px">
              <input class="form-control" style="background-color: #EDEDED;color:#B1B1B1;" type="search" name="search" placeholder="Search Posts Here" aria-label="Search" value="{{ Request::get('search') }}">
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
  </div>    
</div>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Company</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
        <tr>
          <td scope="row">{{ $loop->iteration }}</td>
          <td scope="col" @if($client->status == "Finished")  style="color: DimGrey;" @endif>{{ $client->name }}</td>
          <td scope="col" @if($client->status == "Finished")  style="color: DimGrey;" @endif>{{ $client->company }}</td>
          <td scope="col" @if($client->status == "Finished")  style="color: DimGrey;" @endif>{{ $client->phone }}</td>
          <td scope="col" @if($client->status == "Finished")  style="color: DimGrey;" @endif>{{ $client->email }}</td>
          <td scope="col" @if($client->status == "Finished")  style="color: DimGrey;" @endif>{{ $client->description }}</td>
          @if ($client->status == "Pending")
            <td scope="col" style="color: orange;">{{ $client->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <button type="button" class="btn" style="color: white; background-color:ForestGreen;" onclick='return confirm("Are you sure you want to Accept this client?")'>Accept</button>
              <button type="button" class="btn" style="color: white; background-color:red;" onclick='return confirm("Are you sure you want to Reject this client?")'>Reject</button>
            </td>
          @elseif ($client->status == "Rejected")
            <td scope="col" style="color: red;">{{ $client->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <button type="button" class="btn" style="color: black; background-color:NavajoWhite;" onclick='return confirm("This will change the client status to Pending, are you sure?")'>Undo</button>
            </td>
          @elseif ($client->status == "Accepted")
            <td scope="col" style="color: green;">{{ $client->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <button type="button" class="btn" style="color: white; background-color:DarkSlateGrey;" onclick='return confirm("Are you sure you want to Close this client?")'>Close</button>
            </td>
          @elseif ($client->status == "Finished")
            <td scope="col" style="color: DimGrey;">{{ $client->status }}</td>
            <td scope="col" style="white-space: nowrap; width: 1%;">
              <button type="button" class="btn" style="color: black; background-color:NavajoWhite;" onclick='return confirm("his will change the client status to Accepted, are you sure?")'>Undo</button>
            </td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="d-flex justify-content-center">
  {{ $clients->appends(request()->input())->links() }}
</div>
@endsection