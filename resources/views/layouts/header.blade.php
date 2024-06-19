@php
    $menus = App\Models\Menu::with('children')->whereNull('parent_id')->orderBy('order')->get();
@endphp
<header id="masterHeader" class="header sticky-top bg-white border-bottom d-print-none">
    <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0">
        <div class="container position-relative">
            <a class="navbar-brand" style="color:black;" href="{{ url('/') }}" target="_parent" aria-label="PolygonScan">
                <img src="{{ asset('icon.png') }}" alt="" style="height: 30px; width:30px;">
            </a>
            <div class="d-flex align-items-center gap-4">
                <a class="link-dark d-block d-lg-none" href="{{ route('login') }}">
                    <i class="far fa-user-circle me-1"></i> Sign In
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-1 gap-lg-0 pt-4 pt-lg-0">
                    @foreach ($menus as $menu)
                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_{{ $menu->id }}" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $menu->title }}
                            </a>
                            @if ($menu->children->count())
                                <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                    <div class="row">
                                        <div class="col-lg order-last order-lg-first">
                                            <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                                <div>
                                                    <h6>{{ $menu->title }} &amp; Services</h6>
                                                    <p>{{ $menu->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($menu->children->chunk(4) as $chunk)
                                            <div class="col-sm py-5">
                                                <h6 class="px-3 mb-3">{{ $chunk->first()->title }}</h6>
                                                <ul class="list-unstyled">
                                                    @foreach ($chunk as $child)
                                                        <li>
                                                            <a href="{{ $child->url }}" id="LI_{{ $child->id }}" class="dropdown-item">
                                                                ∘ {{ $child->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </li>
                    @endforeach

                    <li class="nav-item align-self-center d-none d-lg-block">
                        <span class="text-secondary">|</span>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="far fa-user-circle me-1"></i> Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
