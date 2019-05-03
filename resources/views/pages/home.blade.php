@extends('layouts.default')

@section('content')

{{-- MAIN-CONTAINER --}}
<section class="splash">
    <div>
        <div class="main-logo">
            <img src="images/wynpng.png" alt="" width="100%">
        </div>

        <div class="arrow" id="splash_arrow">
            <a href="#intro">
                <i class="fas fa-chevron-down fa-bounce"></i>
            </a>
        </div>
    </div>
</section>

<section class="intro" id="intro">
    <div class="intro--content">
        <h1>Professional - Qualified - Reliable</h1>
        <p>Limited Company Number 11285968</p>
        <p>Welcome to the Wyn Edwards Electrical website, We are a family run electrical installation company based
            in Rhyl, on the beautiful North Wales coast. We undertake a variety of work from simple socket changes
            to full re-wires. We take great pride in our work and our business relies on our customer satisfaction.
            If you visit our Facebook page you can see our 5 star feedback.</p>
    </div>

    <div class="arrow" id="intro_arrow">
        <a href="#cards">
            <i class="fas fa-chevron-down fa-bounce"></i>
        </a>
    </div>
</section>

{{-- SERVICES-CONTAINER --}}
<section class="services" id="services">

    @include('includes.cards')

</section>
{{-- END SERVICES --}}

{{-- TESTIMONIALS --}}
<section class="testimonials">

</section>
{{-- END TESTIMONIALS --}}
{{-- END MAIN --}}




@endsection
