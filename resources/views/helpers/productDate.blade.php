@php
   $currentDate = date('Y-m-d');

@endphp
@if ($dataScadenza < $currentDate)
    <div class="scaduto-banner">Scaduto</div>
@endif





