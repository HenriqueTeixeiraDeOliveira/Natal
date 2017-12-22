@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastre o Competidor</div>

                    <div class="panel-body">
                        <form method="POST" action="/competidores">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="age">Idade:</label>
                                <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
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