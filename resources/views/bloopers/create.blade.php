@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastre o Competidor</div>

                    <div class="panel-body">
                        <form method="POST" action="/micos">
                            {{ csrf_field() }}

                            @component('layouts.textinput',['column'=>'title','title'=>'Mico','type'=>'text','validate'=>'required']) @endcomponent

                            <div class="form-group">
                                <label for="description">Descrição: </label>
                                <textarea name="description" id="description" class="form-control" rows="8" style="overflow: hidden" required>
                                    {{ old('description') }}
                                </textarea>
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