@php
$currentUser = Auth::user();
@endphp

@can('isAdmin')

<div class="button-box">
    <div>
        {{ Form::open(array('route' => ['elimina_utenti_registrati.store', 'userId' => $ruser->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
        @csrf  
        {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationUtente()']) }} 
        {{ Form::close() }}
    </div>
</div>

@endcan