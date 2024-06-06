@extends('layouts.app')

@section('content')
    <main id="content" class="main-content" role="main">

        <section class="bg-white pt-14 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>
                            BROWSE OUR TECHNOLOGY
                        </h1>
                        <br>
                        <h4>
                            Browse a list of Artixcore Technology to help you work and find solutions, stay
                            organized, get answers, keep in touch, grow your business, and more.
                        </h4>
                    </div>
                    <div class="col-md-5">
                        {{-- <img src="{{ asset('images/bg.jpg') }}" class="img-rounded" style="height:280px; width:480px;"> --}}
                        <iframe width="560" height="315" style="border-radius: 10px;"
                            src="https://www.youtube.com/embed/aUPn2_39rzc?si=L3wc8hd-y35HQNUT&amp;controls=0&amp;start=2"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-white">
            <div class="container">

                <div class="row row-cols-auto justify-content-center g-3">
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>
                    <div class="col"><img
                            src="https://assets-global.website-files.com/5b3213161e5234bf1cfff9e1/6126e97d17d7b87c0be5f795_betakit.webp"
                            alt="Betakit logo" style="width: 150px; height:70px;" style="width: 100px; height:70px;"
                            class="img-fluid"></div>

                </div>

            </div>
        </div>

        <section class="container mb-4 py-4">

            <div class="row mb-4 py-4">

                <h3 style="text-align: center;">Artixcore Reduces capital costs by 25% & improves ROI.</h3>
                <br>
                <br>
                <br>
                @foreach ($services as $service)
                    <div class="col-md-4 mb-4">



                        <div class="position-relative py-4 d-flex flex-column text-center justify-content-between p-3 w-100 bg-white rounded-3 overflow-hidden shadow-sm"
                            style="height: 274px; transition: all 0.3s; box-shadow: 0 0 0 rgba(0,0,0,0);">
                            <div class="mb-3">

                                <i class="material-symbols-rounded animated-icon">
                                    {{ $service->tag }}
                                </i>

                            </div>
                            <div class="d-flex flex-column gap-3 mb-4">
                                <a href="{{ $service->url }}" class="h5 text-dark text-decoration-none" target="_blank">
                                    {{ $service->title }}
                                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none"
                                        class="d-none d-block ms-2" style="width: 20px; height: 20px;">
                                        <path d="M13.25 24L21.25 16L13.25 8" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <span class="text-secondary">{{ $service->desc }}</span>
                            </div>
                            <!-- Hidden arrow link for mobile -->
                            <div class="py-2">
                                <a href="{{ $service->url }}" style="float:right;" target="_blank">
                                    <img src="{{ asset('images/arrow.svg') }}" style="height:20px; width: 50px;">
                                </a>
                            </div>
                        </div>


                    </div>
                @endforeach


            </div>

        </section>


        <section class="pt-14 pb-20" style="background-image: url(images/artixcorebg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-7" style="color: #fcf5f5;">
                        <h1>
                            Top Guide to Consumer Solutions & Services | Artixcore
                        </h1>
                        <br>
                        <h4>
                            Explore consumer solutions, Understand consumer service, leading consumer services companies,
                            job opportunities, and more in the consumer services field.
                        </h4>
                    </div>

                </div>
            </div>
        </section>


        <section class="pt-14 pb-20">
            <div class="container">
                <div class="row">


                    <div class="col-md-3 text-center">

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/452159/app-store.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/452223/google-play.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/308968/smart-work-artificial-intelligence-ai.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 70%; width:50%;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="https://www.svgrepo.com/show/1699/web-development.svg"
                                        style="height: 50%; width:50%;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container my-5">
                <div class="row">
                    <!-- Each column represents a review box -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm" style="border-radius: 12px;">
                            <div class="card-body">
                                <h5 class="card-title">John Martin</h5>
                                <div class="rating-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the above block for each review -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm" style="border-radius: 12px;">
                            <div class="card-body">
                                <h5 class="card-title">John Martin</h5>
                                <div class="rating-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More review blocks as needed -->
                </div>
            </div>
        </section>
        <div class="container">

            <div class="accordion" id="accordionExample">
                <!-- Accordion item 1 -->
                <div class="accordion-item border-theme mb-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1 <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod.
                        </div>
                    </div>
                </div>
                <!-- Accordion item 2 -->
                <div class="accordion-item border-theme mb-3">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2 <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod.
                        </div>
                    </div>
                </div>
                <!-- Additional accordion items as needed -->
            </div>

        </div>

    </main>
@endsection
