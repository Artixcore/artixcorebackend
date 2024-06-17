<!-- Services Section -->
@php
    $services = App\Models\Service::all();
@endphp
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="service-item position-relative">

                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->short_desc }}</p>
                        <a href="{{ route('services.show', $service->slug) }}" class="readmore stretched-link">Read more
                            <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
            @endforeach

        </div>

    </div>

</section><!-- /Services Section -->
