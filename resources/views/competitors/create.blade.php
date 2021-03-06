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
                                <label for="age">Escolha a sua idade</label>
                                <select name="age" id="age" class="form-control" required>
                                    <option value="">   Escolha a sua idade</option>
                                    <option value="1" > Bebezinho(a) da Mamãe - Até 12 anos</option>
                                    <option value="2" > Criança - Entre 12 e 18 anos </option>
                                    <option value="3" > Adulto - Entre 19 e 40 anos </option>
                                    <option value="4" > Idoso(a) - Entre 40 e 65 anos </option>
                                    <option value="5" > Melhor Idade - Mais de 65 anos </option>
                                </select>
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