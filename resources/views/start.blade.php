@extends('layouts.public')

@section('title', 'Home')

@section('content')
<div class="center margin-top-minus-10">
    <a href="" target="_blank" class="link" >Premi quì per la documentazione del sito</a>
</div>
    
<div class="main content padding dimentioncontent" >

    <h1 class="center"> Le nostre aziende</h1>

    <!-- First Photo Grid-->
    <div class="row-padding padding-16 center">
        @isset($allAziende)
        @foreach ($allAziende as $azienda)
        <div class="quarter" onclick="window.location.href = '{{ route('offerte_azienda', [$azienda->id]) }}';">
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/' . $azienda->image) }}" class="width100 rounded-corners" alt="{{$azienda->nome}}" title="{{$azienda->nome}}">              
                </div>
            </div>
            <h3>{{$azienda->nome}}</h3>
        </div>
        @endforeach

    </div>
    @include('pagination.paginator', ['paginator' => $allAziende])
    @endisset
</div>





@endsection

