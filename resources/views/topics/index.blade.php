@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @component('layouts.panel',['link'=> 1,'topic'=> "Conhecimentos Gerais",'image' => "/img/conhecimentos-gerais-1.jpg"])@endcomponent
            @component('layouts.panel',['link'=> 2,'topic'=> "Lógica",'image' => "/img/logica-2.jpg"])@endcomponent
            @component('layouts.panel',['link'=> 3,'topic'=> "Entretenimento",'image' => "/img/entretenimento-1.jpg"])@endcomponent
            @component('layouts.panel',['link'=> 4,'topic'=> "Ciência",'image' => "/img/ciencia-1.jpg"])@endcomponent
            @component('layouts.panel',['link'=> 5,'topic'=> "Família",'image' => "/img/familia-1.jpg"])@endcomponent
            @component('layouts.panel',['link'=> 6,'topic'=> "?",'image' => "/img/surpresa-1.jpg"])@endcomponent
        </div>
    </div>

@endsection

