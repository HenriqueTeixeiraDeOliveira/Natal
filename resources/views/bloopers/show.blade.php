@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron" style="background-color: white;">
                <form class="form-horizontal" method="POST" action="/micos/{{$competitor->id}}">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}

                    <h1 style="text-align: center;"> {{$blooper->title}} </h1>
                    <p style="text-align: center;"> {{$blooper->description}} </p>

                    <button type="submit" class="btn btn-success btn-lg btn-block" style="margin-top: 0.5em">
                        Continuar
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection