@php
$currentUser = Auth::user();
@endphp

@can('isStaff')
<ul>
    <button class="pulsanti_staff" onclick="window.location.href = '{{ route('modifica_azienda', [$azienda->id]) }}'; event.stopPropagation();"> Modifica </button>
    <button id="deleteBtn" class="pulsanti_staff" onclick=" event.stopPropagation();"> Elimina </button>
</ul>
@endcan