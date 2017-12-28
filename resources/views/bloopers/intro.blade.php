@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Competidores
                    </a>
                    @foreach($competitors as $competitor)
                        <a href="/micos/{{$competitor->id}}" class="list-group-item">{{$competitor->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection