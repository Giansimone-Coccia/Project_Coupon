@php
$currentDate = \Carbon\Carbon::today();
$scadenza = \Carbon\Carbon::createFromFormat('Y-m-d', $offerta->tempoFruiz);
$giorniRimanenti = $currentDate->diffInDays($scadenza, false);
@endphp

@can('isUser')
@if($currentDate < $scadenza)
    <div class="price red" ><strong>Affrettati! Hai ancora {{ $giorniRimanenti }} giorni a disposizione per riscattare l'offerta</strong></div>
@else
    <div class="price red"><strong>Tempo scaduto</strong></div>
@endif
@endcan

@guest
@if($currentDate < $scadenza)
    <div class="price red"  ><strong>Affrettati! Hai ancora {{ $giorniRimanenti }} giorni a disposizione per riscattare l'offerta</strong></div>
@else
    <div class="price red" ><strong>Tempo scaduto</strong></div>
@endif
@endguest


