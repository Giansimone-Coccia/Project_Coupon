@extends('layouts.public')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >



<div class="main content padding dimentioncontent" >

    <h1 class="center"> Le nostre aziende</h1>

    <!-- First Photo Grid-->
    <div class="row-padding padding-16 center">
        @isset($allAziende)
        @foreach ($allAziende as $azienda)
        <div class="quarter" >
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/' . $azienda->image) }}" class="width100">              
                </div>
            </div>
            <h3>{{$azienda->nome}}</h3>
        </div>
        @endforeach
        @endisset


    </div>
</div>


<!-- Pagination -->
<div class="center padding-32">
    <div class="bar">
        <a href="#" class="bar-item button hover-black">«</a>
        <a href="#" class="bar-item black button">1</a>
        <a href="#" class="bar-item button hover-black">2</a>
        <a href="#" class="bar-item button hover-black">3</a>
        <a href="#" class="bar-item button hover-black">4</a>
        <a href="#" class="bar-item button hover-black">»</a>
    </div>
</div>
@endsection

