@extends('layouts.public')

@section('title', 'Crea faq')

@section('scripts')
@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('modifica_faq.store', ['id' => $faq->id]) }}";
    var formId = 'formModificaFaq';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#formModificaFaq").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
    <div class="creazioneOfferta">
        @include('helpers/buttonIndietro')

            {{ Form::open(array('route' => ['modifica_faq.store', 'id' => $faq->id], 'id' => 'formModificaFaq', 'class' => 'productForm')) }}
            @csrf
            <h1>Modifica FAQ</h1>

                {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
                {{ Form::textarea('domanda', $faq->domanda, ['class' => 'input', 'id' => 'domanda', 'rows' => 3]) }}
    
                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
                {{ Form::textarea('risposta', $faq->risposta, ['class' => 'input', 'id' => 'risposta', 'rows' => 3]) }}
          
                          
                {{ Form::submit('Modifica', ['class' => "buttonOfferta"]) }}
            
            {{ Form::close() }}

    </div>

</div>
@endsection