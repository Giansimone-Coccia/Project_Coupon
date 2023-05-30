@php
$currentUser = Auth::user();
@endphp

@can('isStaff')
<div class="button-box">
    <div>
        {{ Form::open(array('route' => ['elimina_offerta.store', 'offertaId' => $offerta->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
        @csrf  
        {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationOfferta()']) }}   
        {{ Form::close() }}
    </div>
    <div class="margin-left-10">
        <button class="pulsanti_staff" onclick=" window.location.href = '{{ route('modifica_offerta', [$offerta->id]) }}'; event.stopPropagation()"> Modifica </button>    
    </div>
</div>
@endcan