@extends('layouts.public')

@section('title', 'FAQ')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 100px;">
    <div class="page_title pb-3">
        <h1 style="font-weight: 600">FAQ</h1>
    </div>
    <section class="faq-section padding-bottom-16">
        <div class="container">
            <div class="row">
                <div class="mx-auto">
                    <div class="faq-title text-center pb-3">
                        <h2>Generali</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- ***** FAQ Start ***** -->
                <div class="offset-md-3 ">
                    <div class="faq" id="accordion">
                                            
                        @isset($FAQs)
                        @foreach($FAQs as $faq)

                        <div class="card">
                            <div class="card-header" id="faqHeading-{{$faq->idFaq}}">
                                <div class="mb-0">

                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$faq->idFaq}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$faq->idFaq}}">{{$faq->domanda}}</h5>
                                </div>
                            </div>
                            <div id="faqCollapse-{{$faq->idFaq}}" class="collapse" aria-labelledby="faqHeading-{{$faq->idFaq}}" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{$faq->risposta}}</p>
                                </div>
                            </div>
                        </div>    
                                    
                        @endforeach
                        @endisset

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End page content -->
</div>
@endsection
