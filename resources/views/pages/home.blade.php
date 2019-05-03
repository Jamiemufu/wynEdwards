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
        <h1>Professional <span>-</span> Qualified <span>-</span> Reliable</h1>
        <p>Limited Company Number 11285968</p>
        <p>Welcome to the Wyn Edwards Electrical website, We are a family run electrical installation company based in
            Rhyl, on the beautiful North Wales coast. We undertake a variety of work from simple socket changes to full
            re-wires. We take great pride in our work and our business relies on our customer satisfaction. If you visit
            our Facebook page you can see our 5 star feedback.</p>
    </div>

    <div class="arrow" id="intro_arrow">
        <a href="#services">
            <i class="fas fa-chevron-down fa-bounce"></i>
        </a>
    </div>
</section>

{{-- SERVICES-CONTAINER --}}
<section class="services" id="services">
    <div class="services--content">
        <h1>Services</h1>
        <p>Here are some of the services I offer. Please feel free to contact me for a quote, or if any service is
            required that's not on this list.</p>
        <p>(click or hover for more information)</p>
    </div>

    @include('includes.cards')

    <div class="arrow" id="services_arrow">
        <a href="#contact">
            <i class="fas fa-chevron-down fa-bounce"></i>
        </a>
    </div>
</section>
{{-- END SERVICES --}}

{{-- CONTACT SECTION --}}
<section class="contact" id="contact">
    <div class="contact--content">
        <h1>Contact Me</h1>
        <p>Please feel free to fill in the form below and get in touch.</p>
        <p> Wether it's for a quote, some feedback or any question you many about electronics or my services.<br> I will
            repsond at my earliest convenience. You can also contact me on facebook.</p>

        <form action="POST" method="">
            @csrf
            <div class="contact--form">
                <div class="contact--inputs">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                    <input type="text" name="location" id="location" placeholder="Location">
                </div>

                <div class="contact--query">
                    <textarea name="query" id="query" cols="30" rows="8" placeholder="Query"></textarea>
                </div>
            </div>

            <button type="submit">Submit</button>

        </form>
    </div>

    <div class="arrow" id="contact_arrow">
        <a href="#services">
            <i class="fas fa-chevron-down fa-bounce"></i>
        </a>
    </div>
</section>
{{-- TESTIMONIALS --}}
<section class="testimonials" id="testimonials">

</section>
{{-- END TESTIMONIALS --}}
{{-- END MAIN --}}




@endsection
