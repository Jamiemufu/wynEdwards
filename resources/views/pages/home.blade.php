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
        <h1>Contact me</h1>
        <p>Please feel free to fill in the form below and get in touch.</p>
        <p> Wether it's for a quote, some feedback or any questions you many about electronics or my services.<br> I
            will
            respond as soon as possible. You can also contact me on facebook.</p>

        <form action="/" method="POST">
            @csrf
            <div class="contact--form">
                <div class="contact--inputs">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                    <input type="text" name="location" id="location" placeholder="Location">
                </div>

                <div class="contact--query">
                    <textarea name="message" id="message" cols="30" rows="9" placeholder="message"></textarea>
                </div>
            </div>

            <button type="submit">Submit</button>

        </form>
    </div>

    <div class="arrow" id="contact_arrow">
        <a href="#testimonials">
            <i class="fas fa-chevron-down fa-bounce"></i>
        </a>
    </div>
</section>
{{-- TESTIMONIALS --}}
<section class="testimonials" id="testimonials">
    <div class="testimonials--title">
        <h1>What customers say about my work</h1>
    </div>
    {{-- slider --}}
    <div class="slider">
        {{-- testimonial --}}
        <div class="testimonials--customer">
            <h1>
                <sup><i class="fas fa-quote-left"></i></sup>
                The dear the had vast but whence who. He her had taste flow and and done sighed. Wins old deemed they was happy, none consecrate what wandered a condole third change break and. It the all when drowsy and to.
                <sup><i class="fas fa-quote-right"></i></sup>
            </h1>

            <h5>Person One, North Wales</h5>

            <div class="testimonials--rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
        </div>
        {{-- testimonial --}}
        <div class="testimonials--customer">
            <h1>
                <sup><i class="fas fa-quote-left"></i></sup>
               Dolor diam lorem lorem takimata clita consetetur clita invidunt. Ipsum eirmod nonumy consetetur dolores accusam sit invidunt ut ipsum, diam diam sit sed ea diam sed. Stet ut rebum ipsum kasd dolor, no et elitr sit duo diam lorem kasd.
                <sup><i class="fas fa-quote-right"></i></sup>
            </h1>

            <h5>Person 2, North Wales</h5>

            <div class="testimonials--rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
        </div>
    </div>
    {{-- end slider --}}

    <div class="arrow" id="testimonials_arrow">
        <a href="#footer">
            <i class="fas fa-chevron-down fa-bounce"></i>
        </a>
    </div>
</section>
{{-- END TESTIMONIALS --}}

{{-- END MAIN --}}

@endsection
