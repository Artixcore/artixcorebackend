@php
    $faqs = App\Models\Faq::all();
@endphp
<section id="faq" class="faq section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="content px-xl-5">
                    <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.
                    </p>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">
                    @foreach ($faqs as $index => $faq)
                        <div class="faq-item {{ $index === 0 ? 'faq-active' : '' }}">
                            <h3>
                                <span class="num">{{ $index + 1 }}.</span> <span>{{ $faq->title }}</span>
                            </h3>
                            <div class="faq-content" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                                <p>{{ $faq->description }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                    @endforeach
                </div>

            </div>
        </div>

    </div>

</section>

<style>
    .faq-content {
        display: none;
    }

    .faq-active .faq-content {
        display: block;
    }

    .faq-toggle {
        cursor: pointer;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                faqItems.forEach(i => i.classList.remove('faq-active'));
                item.classList.add('faq-active');
            });
        });
    });
</script>
