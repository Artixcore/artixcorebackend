@php
    $testimonials = App\Models\Testimonial::all();
@endphp
<section id="testimonials" class="testimonials section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            @foreach ($testimonials as $testimonial)
                <div class="col-md-3">
                    <div class="card">
                        @if ($testimonial->image)
                            <img src="{{ $testimonial->image }}" class="card-img-top"
                                alt="{{ $testimonial->first_name }} {{ $testimonial->last_name }}">
                        @else
                            <img src="assets/img/default-avatar.png" class="card-img-top"
                                alt="{{ $testimonial->first_name }} {{ $testimonial->last_name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $testimonial->first_name }} {{ $testimonial->last_name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $testimonial->source }}</h6>
                            <div class="stars">
                                @for ($i = 0; $i < $testimonial->stars; $i++)
                                <i class="fa-solid fa-star"></i>
                                @endfor
                                @for ($i = $testimonial->stars; $i < 5; $i++)
                                <i class="fa-regular fa-star"></i>
                                @endfor
                            </div>
                            <p class="card-text">
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>{{ $testimonial->review }}</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
            @endforeach
        </div>

        <!-- Add more testimonial items here -->
    </div>
</section><!-- /Testimonials Section -->
