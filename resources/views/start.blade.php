@extends('layouts.public')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding dimentioncontent" >
    
    <h1 class="center">Le nostre aziende</h1>

    <!-- First Photo Grid-->
    <div class="row-padding padding-16 center">

        <div class="quarter" >
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/logo-oasi.jpg' ) }}" alt="Oasi" class="width100">              
                </div>
            </div>
            <h3>Oasi</h3>
        </div>

        <div class="quarter">
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/Apple-Logo.png' ) }}" alt="Apple" class="width100">
                </div>
            </div>
            <h3>Apple</h3>
        </div>

        <div class="quarter">
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/Conad-logo.png' ) }}" alt="Conad" class="width100">
                </div>
            </div>
            <h3>Conad</h3>
        </div>

        <div class="quarter">
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/samsung-logo.jpg' ) }}" alt="Samsung" class="width100">
                </div>
            </div>
            <h3>Samsung</h3>
        </div>

    </div>

    <!-- Second Photo Grid-->
    <div class="row-padding padding-16 center">

        <div class="quarter" >
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/Timberland-Logo.png' ) }}" alt="Timberland" class="width100">
                </div>
            </div>
            <h3>Timberland</h3>
        </div>

        <div class="quarter " >
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/logo-puma.png' ) }}" alt="Puma" class="width100">
                </div>
            </div>
            <h3>Puma</h3>
        </div>

        <div class="quarter " >
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/Coop-logo.png' ) }}" class="width100" alt="Coop" >
                </div>
            </div>
            <h3>Coop</h3> 
        </div>

        <div class="quarter" >
            <div class="inline-block">
                <div class="centerimages">
                    <img src="{{ asset('images/companies/HP_logo.png' ) }}" class="width100" alt="HP" >
                </div>
            </div>              
            <h3>HP</h3>
        </div> 

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

