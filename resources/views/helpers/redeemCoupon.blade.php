@php
    $currentDate = date('Y-m-d');
    $scadenza=$offerta->tempoFruiz;
@endphp

@guest
<button>Riscatta</button>
@endguest

@can('isUser')
@if($currentDate < $scadenza)
    <button id="reedem">Riscatta</button>
@else
    <button id="unredeemable">Scaduto</button>
@endif
@endcan