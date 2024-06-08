@extends('frontend.layouts')
@section('style_css')
    <style>
        .card-custom {
            transition: all 0.3s ease;
        }

        .card-custom:hover {
            background-color: #f8f9fa;
            /* Bootstrap's neutral-50 equivalent */
        }

        .rounded-3xl {
            border-radius: 1.5rem;
            /* Custom rounded class equivalent to rounded-3xl */
        }

        .custom-title {
            font-size: 1.75rem;
            /* Adjust as needed */
            font-weight: 600;
            /* Semi-bold */
            color: #212529;
            /* text-dark equivalent */
        }

        .text-body-secondary {
            color: #6c757d;
            /* text-secondary equivalent */
        }
    </style>
@endsection
@section('title')
    <title>Welcome to Artixcore</title>
@endsection

{{-- <div class="col-md-4">
    <div class="card card-custom rounded-3xl  shadow-sm">
        <div class="card-body">


            <p class="text-dark">Skip the bank, borrow from those you trust
            </p>
            <p class="mt-3 text-body-secondary">FamilyFund is a crowdfunding platform for friends and
                family. Allowing users to take personal loans from their network without a traditional
                financial institution.</p>
        </div>
    </div>
</div> --}}

@section('content')
    <div class="container position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2><span>Welcome to </span><span class="accent">Impact</span></h2>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum
                    quaerat.</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <section class="container pt-5 pb-12">

        <div id="ContentPlaceHolder1_divStats" class="row g-4 mb-4">
            <!-- Service 6 - Bootstrap Brain Component -->
            <section class="bsb-service-6 py-5 py-xl-8">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                            <h3 class="fs-6 mb-2 text-secondary text-center text-uppercase">What We Do?</h3>
                            <h2 class="display-5 mb-4 mb-md-5 text-center">We are giving you perfect solutions with our
                                proficient services.</h2>
                            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-transparent border-default rounded-0">
                                <div class="card-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hdd text-default mb-4" viewBox="0 0 16 16">
                                        <path d="M4.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                        <path d="M16 11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V9.51c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198V11zM3.655 4.26 1.592 8.043C1.724 8.014 1.86 8 2 8h12c.14 0 .276.014.408.042L12.345 4.26a.5.5 0 0 0-.439-.26H4.094a.5.5 0 0 0-.44.26zM1 10v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z" />
                                    </svg>
                                    <h3 class="h2 mb-4">Machine Vision</h3>
                                    <p class="mb-4 text-secondary">Our machine vision solutions can help businesses to automate tasks, improve quality control, and make better decisions. This can help businesses to save time and money, and improve their efficiency.</p>
                                    <a href="#!" class="fw-bold text-decoration-none link-default">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hdd text-default mb-4" viewBox="0 0 16 16">
                                        <path d="M4.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                        <path d="M16 11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V9.51c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198V11zM3.655 4.26 1.592 8.043C1.724 8.014 1.86 8 2 8h12c.14 0 .276.014.408.042L12.345 4.26a.5.5 0 0 0-.439-.26H4.094a.5.5 0 0 0-.44.26zM1 10v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z" />
                                    </svg> --}}
                                    <h3>Machine Vision</h3>
                                    <p class="text-secondary">Our machine vision solutions can help businesses to automate tasks, improve quality control, and make better decisions. This can help businesses to save time and money, and improve their efficiency.</p>
                                    <a href="#!" class="fw-bold text-decoration-none link-default">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card bg-transparent border-default rounded-0">
                                <div class="card-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hdd text-default mb-4" viewBox="0 0 16 16">
                                        <path d="M4.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                        <path d="M16 11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V9.51c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198V11zM3.655 4.26 1.592 8.043C1.724 8.014 1.86 8 2 8h12c.14 0 .276.014.408.042L12.345 4.26a.5.5 0 0 0-.439-.26H4.094a.5.5 0 0 0-.44.26zM1 10v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z" />
                                    </svg>
                                    <h3 class="h2 mb-4">Machine Vision</h3>
                                    <p class="mb-4 text-secondary">Our machine vision solutions can help businesses to automate tasks, improve quality control, and make better decisions. This can help businesses to save time and money, and improve their efficiency.</p>
                                    <a href="#!" class="fw-bold text-decoration-none link-default">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    @endsection
