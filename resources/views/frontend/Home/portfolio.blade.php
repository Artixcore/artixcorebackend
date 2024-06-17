@php
    $portfolios = App\Models\Portfolio::all();
@endphp

<style>
    .portfolio-filters li {
        cursor: pointer;
    }

    .portfolio-filters li.filter-active {
        font-weight: bold;
    }

    .portfolio-item {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .portfolio-content {
        position: relative;
    }

    .portfolio-info {
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 20px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
    }

    .glightbox {
        display: block;
        cursor: pointer;
    }
</style>
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($portfolios as $portfolio)
                    <div
                        class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower($portfolio->project_type) }}">
                        <div class="portfolio-content h-100">
                            @if ($portfolio->image)
                                <a href="{{ $portfolio->image }}"
                                    data-gallery="portfolio-gallery-{{ strtolower($portfolio->project_type) }}"
                                    class="glightbox">
                                    <img src="{{ $portfolio->image }}" class="img-fluid" alt="{{ $portfolio->title }}">
                                </a>
                            @endif
                            <div class="portfolio-info">
                                <h4><a href="#" title="More Details">{{ $portfolio->title }}</a></h4>
                                <p>{{ $portfolio->description }}</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->
