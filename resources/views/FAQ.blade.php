@extends('layouts.public')

@section('title', 'FAQ')


@section('scripts')
@parent
@can('isAdmin')
<script src="{{ asset('js/openFAQ.js') }}"></script>
@endcan
<script src="{{ asset('js/alert.js') }}"></script>
@endsection


@section('content')
<div class="main content padding faq-list" >
    <div class="page_title">
        <h1 class="font-weight-600">FAQ</h1>
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
                            @include('helpers/buttonFAQAdmin')
                        </div>
                    </div>

                    @endforeach
                    @endisset
                </div>
            </div>
            @include('pagination.paginator', ['paginator' => $FAQs])
        </div>
    </section>
   
    <!-- End page content -->
</div>
@endsection
