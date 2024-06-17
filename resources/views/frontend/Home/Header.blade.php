@php
    use App\Models\IndexHeader;
    $headerContent = IndexHeader::where('status', 'active')->first();
@endphp

    <section id="hero" class="hero section">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5 justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    @if($headerContent)
                        <h2><span>Welcome to </span><span class="accent">{{ $headerContent->title }}</span></h2>
                        <p>{{ $headerContent->description }}</p>
                        <a href="{{ $headerContent->url }}" class="btn btn-primary">Learn More</a>
                    @else
                        <h2><span>Welcome to </span><span class="accent">Impact</span></h2>
                        <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                    @endif
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    @if ($headerContent && $headerContent->media)
                        @php
                            $extension = pathinfo($headerContent->media, PATHINFO_EXTENSION);
                        @endphp
                        @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                            <img src="{{ $headerContent->media }}" class="img-fluid" alt="{{ $headerContent->title }}">
                        @elseif (in_array($extension, ['mp4', 'mov', 'avi']))
                            <video src="{{ $headerContent->media }}" controls class="img-fluid"></video>
                        @endif
                    @else
                        <img src="{{ asset('src/img/hero-img.svg') }}" class="img-fluid" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
