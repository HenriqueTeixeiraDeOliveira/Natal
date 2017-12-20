@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($topics as $topic)
                @component('questions.panel',[
                'link'=> $topic->id,
                'topic'=> $topic->name,
                'description'=> $topic->description])
                @endcomponent
            @endforeach
        </div>
    </div>

@endsection

