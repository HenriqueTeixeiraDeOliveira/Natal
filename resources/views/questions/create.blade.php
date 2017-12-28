@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crie uma Nova Questão</div>

                    <div class="panel-body">
                        <form method="POST" action="/perguntas">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="topic_id">Escolha um tópico</label>
                                <select name="topic_id" id="topic_id" class="form-control" required>
                                    <option value="">Escolha um tópico</option>
                                    @foreach($topics as $topic)
                                        <option value="{{ $topic->id }}" {{ old('topic_id') == $topic->id ? 'selected' : ''}}>
                                            {{ $topic->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="question">Body:</label>
                                <textarea name="question" id="question" class="form-control" rows="8" style="overflow: hidden" required>
                                    {{ old('question') }}
                                </textarea>
                            </div>

                            @component('layouts.textinput',['column'=>'first','title'=>'Opção 1:','type'=>'text','validate'=>'required']) @endcomponent
                            @component('layouts.textinput',['column'=>'second','title'=>'Opção 2:','type'=>'text','validate'=>'required']) @endcomponent
                            @component('layouts.textinput',['column'=>'third','title'=>'Opção 3:','type'=>'text','validate'=>'required']) @endcomponent
                            @component('layouts.textinput',['column'=>'fourth','title'=>'Opção 4:','type'=>'text','validate'=>'required']) @endcomponent
                            @component('layouts.textinput',['column'=>'answer','title'=>'Answer:','type'=>'number','validate'=>'required']) @endcomponent
                            @component('layouts.textinput',['column'=>'link','title'=>'Video Link:','type'=>'text','validate'=>'']) @endcomponent


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>

                            @if(count($errors))
                                <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li style="list-style: none">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection