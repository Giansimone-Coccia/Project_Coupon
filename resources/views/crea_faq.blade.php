@extends('layouts.public')

@section('title', 'Crea faq')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    <div class="creazioneOfferta">

            {{ Form::open(array('route' => 'crea_faq.store', 'class' => 'productForm')) }}
            <h1>Crea FAQ</h1>

                {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
                {{ Form::text('domanda', '', ['class' => 'input', 'id' => 'domanda']) }}
                @if ($errors->first('domanda'))
                <ul class="errors">
                    @foreach ($errors->get('domanda') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
    

         
                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
                {{ Form::text('risposta', '', ['class' => 'input', 'id' => 'risposta']) }}
                @if ($errors->first('risposta'))
                <ul class="errors">
                    @foreach ($errors->get('risposta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
          
                          
                {{ Form::submit('Registra', ['class' => "buttonOfferta"]) }}
            
            {{ Form::close() }}

    </div>

</div>
@endsection