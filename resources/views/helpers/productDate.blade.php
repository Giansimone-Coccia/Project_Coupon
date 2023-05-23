@php
    function scadenza($dataScadenza)
    {
        $dataAttuale = date('Y-m-d');
        
        return $dataScadenza < $dataAttuale;
    }
@endphp

@if (scadenza($dataScadenza))
     <div class="scaduto-banner">Scaduto</div>
@endif