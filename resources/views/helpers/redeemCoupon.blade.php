@php
    $currentDate = date('Y-m-d');
    $scadenza=$offerta->tempoFruiz;
    $currentUser = auth()->user();
@endphp

@guest
@if($currentDate < $scadenza)
    <button>Riscatta</button>
    <p><a href="{{route('register')}}">Registrati</a> per riscattare il coupon!</p>
@else
    <button id="unredeemable">Scaduto</button>
@endif
@endguest

@can('isUser')
@if(($currentDate < $scadenza) && ($currentUser->id != $buono->utenteRich))
    <button id="reedem">Riscatta</button>
@elseif(($currentDate < $scadenza) && ($currentUser->id == $buono->utenteRich))
    <button>Già riscattato</button>
    <p>Visita le <a href="{{route('FAQ')}}">FAQ</a> per saperne di più!</p>
@else
    <button id="unredeemable">Scaduto</button>
@endif
@endcan