@php
$currentUser = Auth::user();
@endphp

@can('isAdmin')


<div class="button-box">
    <div>
        {{ Form::open(array('route' => ['elimina_azienda.store', 'aziendaId' => $azienda->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
        @csrf  
        {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationAzienda()']) }}   
        {{ Form::close() }}
    </div>
    <div class="margin-left-10">
        <button class="pulsanti_staff" onclick=" window.location.href = '{{ route('modifica_azienda', [$azienda->id]) }}'; event.stopPropagation()"> Modifica </button>    
    </div>
</div>


@endcan

