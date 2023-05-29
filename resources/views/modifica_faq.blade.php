@extends('layouts.public')

@section('title', 'Crea faq')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

@section('scripts')
@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('modifica_faq.store', ['id' => $faq->id]) }}";
    var formId = '{{$faq->id}}';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("{{$faq->id}}").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
    <div class="creazioneOfferta">

            {{ Form::open(array('route' => ['modifica_faq.store', 'id' => $faq->id], 'class' => 'productForm')) }}
            <h1>Modifica FAQ</h1>

                {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
                {{ Form::text('domanda', $faq->domanda, ['class' => 'input', 'id' => 'domanda']) }}
    
                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
                {{ Form::text('risposta', $faq->risposta, ['class' => 'input', 'id' => 'risposta']) }}
          
                          
                {{ Form::submit('Registra', ['class' => "buttonOfferta"]) }}
            
            {{ Form::close() }}

    </div>

</div>
@endsection