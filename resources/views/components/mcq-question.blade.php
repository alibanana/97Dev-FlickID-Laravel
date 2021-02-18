<div class="col-md-12 ">
    <div class="form-group">
        <label for="" style="margin:2vw 0px 7px 0px">{{ $question->question }}</label> <br>
        @foreach ($question->question_answers as $question_answer)
            <div class="form-check mt-2">
                <input name="applicant_answers[]" value="{{ $question_answer->question_answer }}" class="form-check-input" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="" style="font-family:HKGroteskRegular">
                    {{ $question_answer->question_answer }}
                </label>
            </div>
        @endforeach
    </div>
</div>