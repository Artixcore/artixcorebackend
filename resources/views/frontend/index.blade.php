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

{{-- <div class="col-md-3">
    <div class="card card-custom rounded-3xl p-4  shadow-sm shadow-sm">
        <div class="card-body">


            <p class="mt-4  text-dark">Skip the bank, borrow from those you trust
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
        <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
      </div>
    </div>
  </div>

    <section class="container pt-5 pb-12">

        <div id="ContentPlaceHolder1_divStats" class="row g-4 mb-4">

            <div class="col-md-3">
                <div class="card card-custom rounded-3xl p-4  shadow-sm shadow-sm">
                    <div class="card-body">


                        <p class="mt-4  text-dark">Skip the bank, borrow from those you trust
                        </p>
                        <p class="mt-3 text-body-secondary">FamilyFund is a crowdfunding platform for friends and
                            family. Allowing users to take personal loans from their network without a traditional
                            financial institution.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card card-custom rounded-3xl p-4  shadow-sm shadow-sm">
                    <div class="card-body">


                        <p class="mt-4  text-dark">Skip the bank, borrow from those you trust
                        </p>
                        <p class="mt-3 text-body-secondary">FamilyFund is a crowdfunding platform for friends and
                            family. Allowing users to take personal loans from their network without a traditional
                            financial institution.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card card-custom rounded-3xl p-4  shadow-sm shadow-sm">
                    <div class="card-body">


                        <p class="mt-4  text-dark">Skip the bank, borrow from those you trust
                        </p>
                        <p class="mt-3 text-body-secondary">FamilyFund is a crowdfunding platform for friends and
                            family. Allowing users to take personal loans from their network without a traditional
                            financial institution.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card card-custom rounded-3xl p-4  shadow-sm shadow-sm">
                    <div class="card-body">


                        <p class="mt-4  text-dark">Skip the bank, borrow from those you trust
                        </p>
                        <p class="mt-3 text-body-secondary">FamilyFund is a crowdfunding platform for friends and
                            family. Allowing users to take personal loans from their network without a traditional
                            financial institution.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
