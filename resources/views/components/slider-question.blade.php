<div class="col-md-12">
    <div class="form-group ">
        <label for="" style="margin:2vw 0px 7px 0px">{{ $question->question }}</label> <br>
        <div style="display:flex;justify-content:space-between;align-items:center" class="mt-2">
            <label for="customRange1">{{ $question->question_answers[3]->question_answer }}</label>
            <input name="applicant_answers[]" min="{{ $question->question_answers[0]->question_answer }}" max="{{ $question->question_answers[1]->question_answer }}" step="{{ $question->question_answers[2]->question_answer }}" type="range" class="custom-range" style="width:85%;font-family:HKGroteskRegular" id="customRange1">
            <label for="customRange1">{{ $question->question_answers[4]->question_answer }}</label>
        </div>
    </div>
</div>