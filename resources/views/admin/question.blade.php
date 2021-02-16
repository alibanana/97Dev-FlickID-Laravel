@yield('container')
@extends('admin/layout/main')

@section('title', 'Admin Page')

@section('container')
<!-- START OF POPUP -->
<div id="add_mcq" class="overlay">
    <div class="popup">
    <a class="close" href="#" >&times;</a>
    
    <div class="content" style="padding:20px">
        <h1>Add New MCQ Question</h1>
        <div class="col-md-12">
        <form>
        <div class="form-group">
            <label for="inputName">Question</label>
            <input type="text" class="form-control" id="" placeholder="Enter Question">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Choice 1</label>
            <input type="text" class="form-control" id="" placeholder="Enter Choice 1">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Choice 2</label>
            <input type="text" class="form-control" id="" placeholder="Enter Choice 2">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Choice 3</label>
            <input type="text" class="form-control" id="" placeholder="Enter Choice 3">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Choice 4</label>
            <input type="text" class="form-control" id="" placeholder="Enter Choice 4">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Choice 5</label>
            <input type="text" class="form-control" id="" placeholder="Enter Choice 5">
        </div>
        
        

        <div style="text-align:right;margin-top:10px">
            <button type="submit" class="btn btn-warning btn-sm" >Add New Question</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>
</div>
<!-- END OF POPUP -->

<!-- START OF POPUP -->
<div id="add_slider" class="overlay">
    <div class="popup">
    <a class="close" href="#" >&times;</a>
    
    <div class="content" style="padding:20px">
        <h1>Add New Slider Question</h1>
        <div class="col-md-12">
        <form>
        <div class="form-group">
            <label for="inputName">Question</label>
            <input type="text" class="form-control" id="" placeholder="Enter Question">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Min</label>
            <input type="text" class="form-control" id="" placeholder="Enter Minimum Value">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Max</label>
            <input type="text" class="form-control" id="" placeholder="Enter Maximum Value">
        </div>
        <div class="form-group mt-2">
            <label for="inputName">Step</label>
            <input type="text" class="form-control" id="" placeholder="Enter Step">
        </div>
        
        

        <div style="text-align:right;margin-top:10px">
            <button type="submit" class="btn btn-warning btn-sm" >Add New Question</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>
</div>
<!-- END OF POPUP -->
 

 <!-- START OF POPUP -->
<div id="add_open_ended" class="overlay">
    <div class="popup">
    <a class="close" href="#" >&times;</a>
    
    <div class="content" style="padding:20px">
        <h1>Add New Open Ended Question</h1>
        <div class="col-md-12">
        <form>
        <div class="form-group">
            <label for="inputName">Question</label>
            <input type="text" class="form-control" id="" placeholder="Enter Question">
        </div>
        <div style="text-align:right;margin-top:10px">
            <button type="submit" class="btn btn-warning btn-sm" >Add New Question</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>
</div>
<!-- END OF POPUP -->
<div class="container" style="padding-bottom:20px;padding-top:40px;">
  <div class = "row"> 
    <div class ="col-md-12">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <h2 style="padding-top:0px !important"> FlickSoftware Applicants Question</h2>
            <a href="#add_mcq" class="btn btn-info" style="color:white !important" title="Tooltip">Add MCQ</a>
            <a href="#add_slider" class="btn btn-info" style="color:white !important" title="Tooltip">Add Slider</a>
            <a href="#add_open_ended" class="btn btn-info" style="color:white !important" title="Tooltip">Add Open Ended</a>
      </div>  
    </div> 
  </div>    
</div>
      
</div>
  <div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Question</th>
        <th scope="col">Choices</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="font-family:HKGroteskRegular !important">
      @foreach ($questions as $question)
        <tr>
          <td scope="col">{{ $question->question }}</td>
          <td scope="col">
            @if ($question->question_type->type == 'Multiple-Choice')
              @foreach ($question->question_answers as $question_answer)
                <b>{{ $loop->iteration }}.</b> {{ $question_answer->question_answer }}<br>
              @endforeach
            @elseif($question->question_type->type == 'Slider')
              <b>Min Value:</b> {{$question->question_answers[0]->question_answer}}<br>
              <b>Max Value:</b> {{$question->question_answers[1]->question_answer}}<br>
              <b>Steps: </b> {{$question->question_answers[2]->question_answer}}<br>
              <b>Min Label:</b> {{$question->question_answers[3]->question_answer}}<br>
              <b>Max Label:</b> {{$question->question_answers[4]->question_answer}}
            @elseif($question->question_type->type == 'Open-Ended')
              -
            @endif
          </td>
          <td>
            <div style="display:flex;justify-content:space-between;align-items:center">
              <button type="button" class="btn btn-secondary" >Update</button>
              <button type="button" class="btn btn-danger" >Delete</button>
            </div>
          </td>    
        </tr>
      @endforeach
    </tbody>
  </table>
</div>  


@endsection