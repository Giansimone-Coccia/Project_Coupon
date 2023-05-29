@extends('layouts.public')

@section('title', 'FAQ')

@section('content')

<script>
    window.addEventListener('DOMContentLoaded', function () {
    var containers = document.getElementsByClassName('card');

    Array.from(containers).forEach(function (container) {
        var question = container.querySelector('.open-faq');
        var answer = container.querySelector('.card-body');

        question.addEventListener('click', function () {
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        });
    });

    Array.from(containers).forEach(function (container) {
        var modify_button = container.querySelector('#pulsante_modifica');
        var delete_button = container.querySelector('#pulsante_elimina');

        modify_button.addEventListener('click', function (event) {
            event.stopPropagation();
        });

        delete_button.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});
</script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 100px;">
    <div class="page_title">
        <h1 style="font-weight: 600">FAQ</h1>
    </div>
    <section class="faq-section padding-bottom-16">
        <div class="container">

            <div class="mx-auto">
                <div class="faq-title center">
                    <h2>Generali</h2>
                </div>
            </div>
            <!-- ***** FAQ Start ***** -->
            <div class="">
                <div class="faq" id="accordion">

                    @isset($FAQs)
                    @foreach($FAQs as $faq)

                    <div class="card">
                        <div class="open-faq padding card-header ">
                            <h3 class="open-faq">{{$faq->domanda}}</h3>
                            <div class="card-body" style="display:none;" >
                                <p>{{$faq->risposta}}</p>
                            </div>
                            @can('isAdmin')
                            <div class="inline-block">
                                <button class="pulsanti_staff" id='pulsante_modifica' onclick="window.location.href = '{{ route('modifica_faq', ['id' => $faq->id])}}';">Modifica</button>
                                <button class="pulsanti_staff" id='pulsante_elimina' onclick="window.location.href = '{{ route('modifica_faq', ['id' => $faq->id])}}';">Elimina</button>
                            </div>
                            @endcan
                        </div>
                    </div>

                    @endforeach
                    @endisset
                </div>
            </div>
            @include('pagination.paginator', ['paginator' => $FAQs])
        </div>
    </section>
    @can('isAdmin')
    <div class="aggiungiFAQAdmin center">
        <a href="{{route('crea_faq')}}">Aggiungi altre FAQ</a>
    </div>
    @endcan
    <!-- End page content -->
</div>
@endsection
