<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    {{-- <title>Document</title> --}}
    @yield('title')
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('src/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{ asset('src/js/theme-appearance.js') }}"></script>
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-6/assets/css/service-6.css">

    <style>
        .link-dark {
            text-decoration: none;
        }
    </style>
    @yield('style_css')

</head>

<body id="body" class="d-flex flex-column min-vh-100">

    <section id="masterTopBar" class="bg-white border-bottom py-2 d-print-none">
        <div class="container d-flex align-items-center justify-content-between">
            <div id="ethPrice" class="d-none d-md-flex align-items-center gap-4 w-100 fs-sm">
                <div class="text-muted"><span class="text-muted">MATIC Price:</span> <a
                        href="chart/maticprice.html">$0.725206</a><span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Changes in the last 24 hours"><span class="text-success"> (+1.13%)</span></span></div>
                <div class="text-muted d-none d-lg-block"><i class="fad fa-gas-pump me-1"></i> Gas: <span
                        id="spanGasTooltip" data-bs-toggle="tooltip" data-bs-html="true"><a href="gastracker.html"><span
                                class="gasPricePlaceHolder">30</span> GWei</a></span></div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <div id="frmMaster" class="search-panel-container flex-grow-1 position-relative">
                    <form action="" method="GET" autocomplete="off">

                        <input type="text" class="form-control bg-light" autocomplete="off" spellcheck="false"
                            id="search-panel" name="q" placeholder="Search" />


                    </form>
                </div>


            </div>
        </div>
    </section>


    <header id="masterHeader" class="header sticky-top bg-white border-bottom d-print-none">
        <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ url('/') }}" target="_parent" aria-label="PolygonScan">
                    Artixcore
                </a>
                <div class="d-flex align-items-center gap-4">
                    <a class="link-dark d-block d-lg-none" href="login.html">
                        <i class="far fa-user-circle me-1"></i> Sign In
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav gap-1 gap-lg-0 pt-4 pt-lg-0">


                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of PolygonScan's tools and services in one place.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Tools</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                    Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="exportData.html" id="LI51" class="dropdown-item">
                                                    <i class="far fa-download fa-fw me-1"></i>CSV Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="balancecheck-tool.html" id="LI52" class="dropdown-item">
                                                    <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account
                                                    Balance Checker
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Explore</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                    <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dex.html" id="LI4" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                    <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                    <i
                                                        class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                    Cloud
                                                </a>
                                            </li>
                                            <li>
                                                <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                    <i
                                                        class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                    Name Lookup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Services</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="tokenapprovalchecker.html" id="LI49"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                    Approvals <span
                                                        class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="verifiedSignatures.html" id="LI29"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                    Signature
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                    <i
                                                        class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                    Filter <span class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of PolygonScan's tools and services in one place.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Tools</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                    Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="exportData.html" id="LI51" class="dropdown-item">
                                                    <i class="far fa-download fa-fw me-1"></i>CSV Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="balancecheck-tool.html" id="LI52"
                                                    class="dropdown-item">
                                                    <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account
                                                    Balance Checker
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Explore</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                    <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dex.html" id="LI4" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                    <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                    <i
                                                        class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                    Cloud
                                                </a>
                                            </li>
                                            <li>
                                                <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                    <i
                                                        class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                    Name Lookup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Services</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="tokenapprovalchecker.html" id="LI49"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                    Approvals <span
                                                        class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="verifiedSignatures.html" id="LI29"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                    Signature
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                    <i
                                                        class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                    Filter <span class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Solutions</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of PolygonScan's tools and services in one place.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Tools</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                    Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="exportData.html" id="LI51" class="dropdown-item">
                                                    <i class="far fa-download fa-fw me-1"></i>CSV Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="balancecheck-tool.html" id="LI52"
                                                    class="dropdown-item">
                                                    <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account
                                                    Balance Checker
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Explore</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                    <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dex.html" id="LI4" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                    <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                    <i
                                                        class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                    Cloud
                                                </a>
                                            </li>
                                            <li>
                                                <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                    <i
                                                        class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                    Name Lookup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Services</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="tokenapprovalchecker.html" id="LI49"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                    Approvals <span
                                                        class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="verifiedSignatures.html" id="LI29"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                    Signature
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                    <i
                                                        class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                    Filter <span class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Research</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of PolygonScan's tools and services in one place.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Tools</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                    Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="exportData.html" id="LI51" class="dropdown-item">
                                                    <i class="far fa-download fa-fw me-1"></i>CSV Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="balancecheck-tool.html" id="LI52"
                                                    class="dropdown-item">
                                                    <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account
                                                    Balance Checker
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Explore</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                    <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dex.html" id="LI4" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                    <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                    <i
                                                        class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                    Cloud
                                                </a>
                                            </li>
                                            <li>
                                                <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                    <i
                                                        class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                    Name Lookup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Services</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="tokenapprovalchecker.html" id="LI49"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                    Approvals <span
                                                        class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="verifiedSignatures.html" id="LI29"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                    Signature
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                    <i
                                                        class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                    Filter <span class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Articles</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of PolygonScan's tools and services in one place.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Tools</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                    Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="exportData.html" id="LI51" class="dropdown-item">
                                                    <i class="far fa-download fa-fw me-1"></i>CSV Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="balancecheck-tool.html" id="LI52"
                                                    class="dropdown-item">
                                                    <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account
                                                    Balance Checker
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Explore</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                    <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dex.html" id="LI4" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                    <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                    <i
                                                        class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                    Cloud
                                                </a>
                                            </li>
                                            <li>
                                                <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                    <i
                                                        class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                    Name Lookup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Services</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="tokenapprovalchecker.html" id="LI49"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                    Approvals <span
                                                        class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="verifiedSignatures.html" id="LI29"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                    Signature
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                    <i
                                                        class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                    Filter <span class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of PolygonScan's tools and services in one place.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Tools</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="unitconverter.html" id="LI50" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrows-rotate dropdown-item-icon fa-fw me-1"></i>Unit
                                                    Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="exportData.html" id="LI51" class="dropdown-item">
                                                    <i class="far fa-download fa-fw me-1"></i>CSV Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="balancecheck-tool.html" id="LI52"
                                                    class="dropdown-item">
                                                    <i class="far fa-file-invoice-dollar fa-fw me-1"></i>Account
                                                    Balance Checker
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Explore</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="gastracker.html" id="LI19" class="dropdown-item">
                                                    <i class="far fa-gas-pump dropdown-item-icon fa-fw me-1"></i>Gas
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dex.html" id="LI4" class="dropdown-item">
                                                    <i
                                                        class="far fa-arrow-right-arrow-left dropdown-item-icon fa-fw me-1"></i>DEX
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="nodetracker.html" id="LI46" class="dropdown-item">
                                                    <i class="far fa-server dropdown-item-icon fa-fw me-1"></i>Node
                                                    Tracker
                                                </a>
                                            </li>
                                            <li>
                                                <a href="labelcloud.html" id="LI41" class="dropdown-item">
                                                    <i
                                                        class="far fa-signs-post dropdown-item-icon fa-fw me-1"></i>Label
                                                    Cloud
                                                </a>
                                            </li>
                                            <li>
                                                <a href="name-lookup.html" id="LI26" class="dropdown-item">
                                                    <i
                                                        class="far fa-magnifying-glass-chart dropdown-item-icon fa-fw me-1"></i>Domain
                                                    Name Lookup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm py-5">
                                        <h6 class="px-3 mb-3">Services</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="tokenapprovalchecker.html" id="LI49"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-shield-keyhole dropdown-item-icon fa-fw me-1"></i>Token
                                                    Approvals <span
                                                        class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="verifiedSignatures.html" id="LI29"
                                                    class="dropdown-item">
                                                    <i
                                                        class="far fa-signature-lock dropdown-item-icon fa-fw me-1"></i>Verified
                                                    Signature
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanced-filter.html" id="LI31" class="dropdown-item">
                                                    <i
                                                        class="far fa-filters dropdown-item-icon fa-fw me-1"></i>Advanced
                                                    Filter <span class="badge border bg-light text-muted">Beta</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item align-self-center d-none d-lg-block">
                            <span class="text-secondary">|</span>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="">
                                <i class="far fa-user-circle me-1"></i> Sign In
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main id="content" class="main-content" role="main">

        @yield('content')


    </main>
    <footer id="masterFooter" class="bg-light mt-auto d-print-none">
        <div class="container">

            <div class="row justify-content-md-between py-8 py-lg-10">
                <div class="col-lg-4 pe-xl-16 mb-4 mb-lg-0">

                    <p class="fs-sm"></p>

                </div>
                <div class="col-6 col-md-4 col-lg mb-10 mb-md-0">
                    <h4 class="h6 mb-3">Company</h4>

                    <ul class="list-unstyled list-sm-space fs-sm mb-0">
                        <li><a class="link-dark" href="brandassets.html">Brand Assets</a></li>
                        <li><a class="link-dark" href="contactus.html">Contact Us</a></li>
                        <li><a class="link-dark" href="terms.html">Terms</a> & <a class="link-dark"
                                href="privacyPolicy.html">Privacy</a></li>
                        <li><a class="link-dark" href="https://etherscan.io/bugbounty" target="_blank">Bug Bounty</a>
                            <i class="far fa-arrow-up-right-from-square text-muted ms-1"></i>
                        </li>
                    </ul>

                </div>
                <div class="col-6 col-md-4 col-lg mb-10 mb-md-0">
                    <h4 class="h6 mb-3">Community</h4>

                    <ul class="list-unstyled list-sm-space fs-sm mb-0">
                        <li><a class="link-dark" href="https://docs.polygonscan.com/" target="_blank">API
                                Documentation</a></li>
                        <li><a class="link-dark" href="https://info.polygonscan.com/">Knowledge Base</a></li>
                        <li><a class="link-dark" href="https://polygonscan.freshstatus.io/" rel="nofollow noopener"
                                target="_blank">Network Status</a></li>
                    </ul>

                </div>
                <div class="col-6 col-md-4 col-lg">
                    <h4 class="h6 mb-3">Products &amp; Services</h4>

                    <ul class="list-unstyled list-sm-space fs-sm mb-0">
                        <li><a class="link-dark" href="https://etherscan.io/contactusadvertise?type=137">Advertise <i
                                    class="far fa-arrow-up-right-from-square text-muted ms-1"></i></a></li>
                        <li><a class="link-dark" href="https://etherscan.io/eaas"
                                target="_blank">Explorer-as-a-Service (EaaS) <i
                                    class="far fa-arrow-up-right-from-square text-muted ms-1"></i></a></li>
                        <li><a class="link-dark" href="apis.html">API Plans</a></li>
                        <li><a class="link-dark" href="priority-support.html">Priority Support</a></li>
                        <li><a class="link-dark" href="https://blockscan.com/" target="_blank">Blockscan <i
                                    class="far fa-arrow-up-right-from-square text-muted ms-1"></i></a></li>
                    </ul>

                </div>
            </div>


            <div class="border-top py-4">
                <div class="row justify-content-between align-items-center fs-sm">
                    <div class="col-md mb-2 mb-md-0">
                        <p class="mb-0">
                            Artixcore © 2024
                            <span class="mx-1">|</span>
                            Built by Team <a style="text-decoration:none;" href="https://artixcore.com/"
                                target="_blank"><strong>Artixcore</strong></a>
                        </p>
                    </div>
                    <div class="col-md text-md-end">
                        <p class="mb-0">
                            <a class="me-1" href=""><span id="spanDonateAddress"
                                    runat="server">0</span></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </footer>


    <div id="masterDivCookie">
        <div class="fixed-bottom text-center" id="divcookie" style="display: none;">
            <div class="alert alert-light fade show border shadow-sm d-inline-flex flex-wrap flex-sm-nowrap align-items-sm-center text-start gap-3 mx-3"
                role="alert">
                <p class="text-dark mb-0">
                    <i class="far fa-cookie-bite text-muted"></i> This website <a href="terms.html#cookiestatement"
                        target="_blank">uses cookies to improve your experience</a>. By continuing to use this website,
                    you agree to its <a href="terms.html" target="_blank">Terms</a> and <a href="privacyPolicy.html"
                        target="_blank">Privacy Policy</a>.
                </p>
                <button id="btnCookie" type="button" class="btn btn-primary text-nowrap px-4"
                    data-bs-dismiss="alert" aria-label="Close">Got it!</button>
            </div>
        </div>
    </div>
    @yield('footer_js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"
        integrity="sha512-Ww1y9OuQ2kehgVWSD/3nhgfrb424O3802QYP/A5gPXoM4+rRjiKrjHdGxQKrMGQykmsJ/86oGdHszfcVgUr4hA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('src/js/app.js') }}"></script>
</body>

</html>
