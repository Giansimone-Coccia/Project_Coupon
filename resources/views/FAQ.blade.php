@extends('layouts.public')

@section('title', 'FAQ')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div class="main content padding" style="max-width: 1300px; margin-top: 100px;">
    <div class="page_title pb-3">
        <h1 style="font-weight: 600">FAQ</h1>
    </div>
    <section class="faq-section">
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
                <div class="offset-md-3">
                    <div class="faq" id="accordion">
                        @isset($FAQs)
                        @foreach($FAQs as $faq)
                        
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                               
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="true" data-aria-controls="faqCollapse-2">{{$faq->domanda}}</h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
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
