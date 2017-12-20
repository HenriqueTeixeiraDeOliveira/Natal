@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="POST" action="/question">
                    {{ csrf_field() }}
                    <h4>{{ $question->question }}</h4>
                    <br>
                    <div class="funkyradio">
                        <div class="funkyradio-primary">
                            <input type="radio" name="option" id="radio1" value="1" />
                            <label for="radio1">{{ $question->first }}</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="radio" name="option" id="radio2" value="2" />
                            <label for="radio2">{{ $question->second }}</label>
                        </div>
                        <div class="funkyradio-danger">
                            <input type="radio" name="option" id="radio3" value="3" />
                            <label for="radio3">{{ $question->third }}</label>
                        </div>
                        <div class="funkyradio-warning">
                            <input type="radio" name="option" id="radio4" value="4"/>
                            <label for="radio4">{{ $question->fourth }}</label>
                        </div>
                        <div class="funkyradio-info">
                            <input type="radio" name="option" id="radio5" value="5" />
                            <label for="radio5">{{ $question->fifth }}</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" style="margin-top: 0.5em">
                        Responder
                    </button>
                </form>

            </div>
        </div>
    </div>

@endsection

