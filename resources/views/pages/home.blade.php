@extends('layouts.default')

@section('content')

{{-- HERO IMAGE --}}
<section>
    <div class="container-fluid hero text-center">
        <div>
            <img src="images/wynjpeg.jpg" alt="">
        </div>
    </div>
</section>
{{-- END HERO SECTION --}}
{{-- SERVICES SECTION --}}
<section class="services">
    <div class="container-fluid service-container">
        <div class="container service no-padding">
            <div class="row no-padding">

                <div class="col-6 col-md-3 order-1 order-md-1 no-padding">
                    <img src="images/Wyn.jpg" alt="">

                </div>

                <div class="col-6 col-md-3 order-2 order-md-2 no-padding">

                </div>

                <div class="col-6 col-md-3 no-padding order-4 order-md-3">
                    <img src="images/Wyn.jpg" alt="">

                </div>

                <div class="col-6 col-md-3 order-3 order-md-4 no-padding">

                </div>
            </div>
        </div>

        <div class="container service no-padding">
            <div class="row no-padding">
                <div class="col-6 col-md-3 order-2 order-md-1 no-padding">

                </div>

                <div class="col-6 col-md-3 order-1 order-md-2 no-padding">
                    <img src="images/Wyn.jpg" alt="">
                </div>

                <div class="col-6 col-md-3 no-padding order-4 order-md-4">

                </div>

                <div class="col-6 col-md-3 order-4 order-md-4 no-padding">
                    <img src="images/Wyn.jpg" alt="">
                </div>
            </div>
        </div>
        {{-- END SERVICES CONTAINER --}}
    </div>
</section>
{{-- END SERVICES SECTION --}}
@endsection
