@php
$currentUser = Auth::user();
@endphp

@can('isAdmin')

<div class="button-box">
    <div>
        {{ Form::open(array('route' => ['elimina_faq.store', 'faqId' => $faq->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
        @csrf  
        {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationFaq()']) }} 
        {{ Form::close() }}
    </div>
    <div class="margin-left-10">
        <button class="pulsanti_staff" onclick=" window.location.href = '{{ route('modifica_faq', [$faq->id]) }}'; event.stopPropagation()"> Modifica </button>   
    </div>
</div>

@endcan