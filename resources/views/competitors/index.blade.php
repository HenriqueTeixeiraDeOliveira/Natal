@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($competitors as $competitor)
                    <div class="well">
                        {{ $competitor->name }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection