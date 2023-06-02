@php
    $currentDate = date('Y-m-d');
    $scadenza=$offerta->tempoFruiz;
    $currentUser = Auth::user();
    
    $riscattato=True;
    
    if(auth()->check() && auth()->user()->can('isUser')){
        foreach($buoni as $buono){
            if($buono->utenteRich == $currentUser->id)
                $riscattato=False;
        }
    }
    
    $counter=0;
    
    foreach($buoni as $buono){
        if($buono->offPromo == $offerta->id)
            ++$counter;
    }
    
@endphp

@guest
@if($currentDate < $scadenza)
    <button>Riscatta</button>
    <p><a href="{{route('register')}}" class="link">Registrati</a> per riscattare il coupon!</p>
@else
    <button id="unredeemable">Scaduto</button>
@endif
@endguest

@can('isUser')
@if(($currentDate < $scadenza) && ($riscattato ))
    <button id="reedem" onclick="window.location.href = '{{ route('coupon', [$offerta->id])}}';">Riscatta</button>
@elseif(($currentDate < $scadenza) && (!$riscattato))
    <button>Già riscattato</button>
    <p>Visita le <a href="{{route('FAQ')}}">FAQ</a> per saperne di più!</p>
@elseif($currentDate > $scadenza)
    <button id="unredeemable">Scaduto</button>
@endif
@endcan

@can('isAdmin')
    <div class="price"><strong>Numero di coupon emessi per questa offerta:</strong> {{$counter}}</div>
@endcan
