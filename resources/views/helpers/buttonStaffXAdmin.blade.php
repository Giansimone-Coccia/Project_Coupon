@php
$currentUser = Auth::user();
@endphp

@can('isAdmin')

<div class="button-box">
    <div>
        {{ Form::open(array('route' => ['elimina_membri_staff.store', 'staffId' => $staff->id], 'id' => 'Eliminaform', 'class' => 'productFormNew')) }}
        @csrf  
        {{ Form::submit('Elimina', ['class' => 'pulsanti_staff', 'onclick'=>'showConfirmationStaff()']) }} 
        {{ Form::close() }}
    </div>
    <div class="margin-left-10">
        <button class="pulsanti_staff" onclick=" window.location.href = '{{ route('modifica_membro_staff', [$staff->id]) }}'; event.stopPropagation()"> Modifica </button>   
    </div>
</div>

@endcan