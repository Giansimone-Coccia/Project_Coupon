@extends('layouts.public')

@section('title', 'mostra membri staff')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>


<div class="overlay" id="overlay"></div>


<div class="main content padding" style="max-width: 1300px; margin-top: 150px;">
    <div class="couponlist" align="center">
        <h1 style="font-weight: 300">Lista membri staff:</h1>
        @isset($allStaffAdmin)
        @foreach($allStaffAdmin as $staff)
        <div class="coupon">
            
            <h3><span>Nome:</span>{{$staff->nome}}</h3>
            <h3><span>Cognome:</span>{{$staff->cognome}}</h3>
            <ul>
                <button class="pulsanti_staff" onclick="window.location.href = '{{ route('modifica_membro_staff', ['staffId' => $staff->id]) }}'; event.stopPropagation();"> Modifica </button>
                <button class="pulsanti_staff" onclick="showConfirmationUtente();"> Elimina </button>
            </ul>
        </div>
        
        <div class="popup center" id="confirmPopup">
            <h3>Sei sicuro di voler eliminare questo membro dello staff?<h3>
                    <div class="button-box">
                        <div>
                            <form method="post" action="{{route('elimina_membri_staff.store', ['staffId' => $staff->id])}}">
                                @csrf
                                <button  type="submit" class="pulsanti_staff" id="yesBtn">Sì</button>
                            </form>
                        </div>
                        <div class="margin-left-10">
                            <button type="" class="pulsanti_staff" id="noBtn">No</button>
                        </div>
                    </div>
        </div>
        @endforeach
        @endisset
        @include('pagination.paginator', ['paginator' => $allStaffAdmin])
</div>
@endsection

