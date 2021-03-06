@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="POST" action="/perguntas/{{$question->topic_id}}">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}

                    @if($question->topic_id == 6)
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="/video/Renata-{{$question->link}}.mp4"></iframe>
                        </div>
                    @endif


                    <div class="well" style="background-color: white;">
                        {{ $question->question }}
                    </div>

                        <div class="funkyradio">
                            <div class="{{ $question->answer == 1 ? 'funkyradio-success' : 'funkyradio-danger' }}">
                                <input type="checkbox" name="option" id="check1" value="1" />
                                <label for="check1">{{ $question->first }}</label>
                            </div>
                            <div class="{{ $question->answer == 2 ? 'funkyradio-success' : 'funkyradio-danger' }}">
                                <input type="checkbox" name="option" id="check2" value="2" />
                                <label for="check2">{{ $question->second }}</label>
                            </div>
                            <div class="{{ $question->answer == 3 ? 'funkyradio-success' : 'funkyradio-danger' }}">
                                <input type="checkbox" name="option" id="check3" value="3" />
                                <label for="check3">{{ $question->third }}</label>
                            </div>
                            <div class="{{ $question->answer == 4 ? 'funkyradio-success' : 'funkyradio-danger' }}">
                                <input type="checkbox" name="option" id="check4" value="4"/>
                                <label for="check4">{{ $question->fourth }}</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block" style="margin-top: 0.5em">
                            Próxima
                        </button>
                </form>

            </div>
        </div>
    </div>

@endsection

