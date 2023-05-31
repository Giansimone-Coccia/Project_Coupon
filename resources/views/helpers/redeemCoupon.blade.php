@php
    $currentDate = date('Y-m-d');
    $scadenza=$offerta->tempoFruiz;
    $currentUser = Auth::user();
    
    $bool=True;
    
    foreach($buoni as $buono){
        if($buono->utenteRich == $currentUser->id)
            $bool=False;
    }
    
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
@if(($currentDate < $scadenza) && ($bool ))
    <button id="reedem" onclick="window.location.href = '{{ route('coupon', [$offerta->id])}}';">Riscatta</button>
@elseif(($currentDate < $scadenza) && (!$bool))
    <button>Già riscattato</button>
    <p>Visita le <a href="{{route('FAQ')}}">FAQ</a> per saperne di più!</p>
@elseif($currentDate > $scadenza)
    <button id="unredeemable">Scaduto</button>
@endif
@endcan