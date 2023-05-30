@extends('layouts.public')

@section('title', 'Crea faq')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
@endsection

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}"></script>


<script>
$(function () {
    var actionUrl = "{{ route('crea_faq.store') }}";
    var formId = 'FAQform';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#FAQform").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
    <div class="creazioneOfferta">

            {{ Form::open(array('route' => 'crea_faq.store', 'id' => 'FAQform', 'class' => 'productForm')) }}
            <h1>Crea FAQ</h1>

                {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
                {{ Form::text('domanda', '', ['class' => 'input', 'id' => 'domanda', 'value' => old('domanda')]) }}
         
                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
                {{ Form::text('risposta', '', ['class' => 'input', 'id' => 'risposta', 'value' => old('risposta')]) }}
                                   
                {{ Form::submit('Registra', ['class' => "buttonOfferta"]) }}
            
            {{ Form::close() }}

    </div>

</div>
@endsection