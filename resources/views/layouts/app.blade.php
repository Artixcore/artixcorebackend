<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min2a89.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/autocomplete/dist/css/autocomplete.min2a89.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom2a89.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .autolink-safari a {
            pointer-events: none !important;
            text-decoration: none !important;
            color: inherit !important;
        }

        #masterNoticeBar div.alert a {
            color: #fff !important;
            text-decoration: underline !important;
        }
    </style>
    <style>
        .d2xces5ced2 {
            -ms-flex-pack: center;
            justify-content: center;
        }

        .amla3vuqpij {
            border-top: 1px solid #e7eaf3 !important;
        }

        body.dark-mode .amla3vuqpij {
            border-color: #18365b !important;
        }

        @media (min-width: 992px) {
            .bstjybdsx9q {
                display: block !important;
            }
        }

        @media (min-width: 992px) {
            .cqkcwsalce7 {
                display: inline-block !important;
            }
        }
    </style>
    <style type="text/css">
        #div-advert {
            line-height: 1.7
        }

        @media (max-width: 667px) {
            #div-advert {
                min-height: 62px;
            }
        }

        @media (max-width: 767px) {
            #div-advert {
                padding-bottom: 20px;
            }
        }
    </style>
    <style>
        .wrapper {
            background-color: #fff !important;
        }

        [data-bs-theme="light"],
        [data-bs-theme=auto] {
            --bg-img-wave: url(assets/svg/patterns/waves.svg);
        }

        [data-bs-theme="dark"],
        [data-bs-theme="dim"] {
            --bg-img-wave: url(assets/svg/patterns/waves-light.svg);
        }

        #cardSpinnerWrapper {
            background: none;
            color: #666666;
            opacity: 1;
            position: absolute;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            width: 200px;
            height: 160px;
            z-index: 5000;
            display: none;
        }

        #mainOverlay {
            color: #666666;
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 9999;
            top: 0;
            left: 0;
            float: left;
            text-align: center;
            padding-top: 20%;
            display: none;
        }

        @media (max-width: 767.98px) {
            .card-header-title>.hash-tag {
                max-width: 7rem !important;
            }
        }
    </style>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .custom-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            color: #ff6f61;
            text-align: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 10px 20px;
            font-weight: bold;
        }

        .custom-card-body {
            padding: 20px;
        }

        .custom-card-link {
            color: #070a07;
            text-decoration: none;
        }

        .custom-card-link:hover {
            text-decoration: underline;
        }
    </style>
    <style>
        .logo-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px 0;
        }

        .logo-img {
            max-height: 100px;
            /* Adjust based on your needs */
            padding: 10px;
            /* Space between logos */
        }

        /* Ensures the logos are centered and nicely spaced on smaller screens */
        @media (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body id="body" class="d-flex flex-column min-vh-100">
    <section id="masterNoticeBar">


    </section>

    <section id="masterTopBar" class="bg-white border-bottom py-2 d-print-none">
        <div class="container-xxl d-flex align-items-center justify-content-between">
            <div id="ethPrice" class="d-none d-md-flex align-items-center gap-4 w-100 fs-sm">
                <div class="text-muted"><span class="text-muted">contact@artixcore.com</span></div>
                <div class="text-muted d-none d-lg-block"><span id="spanGasTooltip" data-bs-toggle="tooltip"
                        data-bs-html="true"><span class="gasPricePlaceHolder">+8801305686771</span></span></div>
            </div>
            <div class="d-flex justify-content-end align-items-center gap-2 w-100">

                <div id="divTestNet" class="dropdown d-none d-lg-block">
                    <button class="btn btn-lg btn-white content-center p-0" style="width: 2.375rem; height: 2.375rem;">
                        <img width="18" data-img-theme="light" src="{{ asset('images/facebook-svgrepo-com.svg') }}"
                            alt="Polygon PoS Chain Logo">
                    </button>

                    <button class="btn btn-lg btn-white content-center p-0" style="width: 2.375rem; height: 2.375rem;">
                        <img width="18" data-img-theme="light" src="{{ asset('images/instagram-svgrepo-com.svg') }}"
                            alt="Polygon PoS Chain Logo">
                    </button>
                    <button class="btn btn-lg btn-white content-center p-0" style="width: 2.375rem; height: 2.375rem;">
                        <img width="18" data-img-theme="light" src="{{ asset('images/linkedin-svgrepo-com.svg') }}"
                            alt="Polygon PoS Chain Logo">
                    </button>
                    <button class="btn btn-lg btn-white content-center p-0" style="width: 2.375rem; height: 2.375rem;">
                        <img width="18" data-img-theme="light" src="{{ asset('images/twitter-svgrepo-com.svg') }}"
                            alt="Polygon PoS Chain Logo">
                    </button>
                </div>
            </div>
        </div>
    </section>
    <header id="masterHeader" class="header sticky-top bg-white  border-bottom d-print-none">
        <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0">
            <div class="container-xxl position-relative">
                <a class="navbar-brand" href="{{ url('/') }}" target="_parent" aria-label="Artixcore">
                    <img src="{{ asset('images/logo.png') }}" style="width: 40px; height:40px;">
                </a>
                <div class="d-flex align-items-center gap-4">
                    <a class="link-dark d-block d-lg-none" href="{{ route('login') }}">
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
                        <li class="nav-item">
                            <a href="index.html" id="LI_default" class="nav-link active" aria-current="page">
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="javascript:;" id="LI_blockchain" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Blockchain</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li>
                                    <a href="txs.html" id="LI12" class="dropdown-item">
                                        Transactions
                                    </a>
                                </li>
                                <li>
                                    <a href="txsPending.html" id="LI16" class="dropdown-item">
                                        Pending Transactions
                                    </a>
                                </li>
                                <li>
                                    <a href="txsInternal.html" id="LI14" class="dropdown-item">
                                        Contract Internal Transactions
                                    </a>
                                </li>
                                <li>
                                    <a href="txnbridge.html" id="LI77" class="dropdown-item">
                                        Plasma Deposit Transactions
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="blocks.html" id="LI_blocks" class="dropdown-item">
                                        View Blocks
                                    </a>
                                </li>
                                <li>
                                    <a href="blocks_forked.html" id="LI_blocks2" class="dropdown-item">
                                        Forked Blocks (Reorgs)
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="accounts.html" id="LI_accountall" class="dropdown-item">
                                        Top Accounts
                                    </a>
                                </li>
                                <li>
                                    <a href="contractsVerified.html" id="LI_contract_verified" class="dropdown-item">
                                        Verified Contracts
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="javascript:;" id="LI_tokens" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Tokens</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li>
                                    <a href="tokens.html" id="LI21" class="dropdown-item">
                                        Top Tokens <span class="small text-muted">(ERC-20)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tokentxns.html" id="LI1" class="dropdown-item">
                                        Token Transfers <span class="small text-muted">(ERC-20)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="javascript:;" id="LI_Nfts" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">NFTs</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li>
                                    <a href="nft-top-contracts.html" id="LI63" class="dropdown-item">
                                        Top NFTs
                                    </a>
                                </li>
                                <li>
                                    <a href="nft-top-mints.html" id="LI67" class="dropdown-item">
                                        Top Mints
                                    </a>
                                </li>
                                <li>
                                    <a href="nft-trades.html" id="LI64" class="dropdown-item">
                                        Latest Trades
                                    </a>
                                </li>
                                <li>
                                    <a href="nft-transfers.html" id="LI65" class="dropdown-item">
                                        Latest Transfers
                                    </a>
                                </li>
                                <li>
                                    <a href="nft-latest-mints.html" id="LI66" class="dropdown-item">
                                        Latest Mints
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="javascript:;" id="LI_resources" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li>
                                    <a href="charts.html" id="LI_charts2" class="dropdown-item">
                                        Charts &amp; Stats
                                    </a>
                                </li>
                                <li>
                                    <a href="topstat.html" id="LI_topstat" class="dropdown-item">
                                        Top Statistics
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="#" id="li_developers" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Developers</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li>
                                    <a href="apis.html" id="LI5" class="dropdown-item">
                                        API Plans
                                    </a>
                                </li>
                                <li>
                                    <a href="https://docs.Artixcore.com/" id="LI6" class="dropdown-item"
                                        target="_blank">
                                        API Documentation
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="code-reader.html" id="A1" class="dropdown-item">
                                        Code Reader <span class="badge border bg-light text-muted">Beta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="loginc315.html" id="LI17" class="dropdown-item">
                                        Verify Contract
                                    </a>
                                </li>
                                <li>
                                    <a href="find-similar-contracts.html" id="LI55" class="dropdown-item">
                                        Similar Contract Search
                                    </a>
                                </li>
                                <li>
                                    <a href="contractdiffchecker.html" id="LI54" class="dropdown-item">
                                        Contract Diff Checker
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="vyper.html" id="LI27" class="dropdown-item">
                                        Vyper Online Compiler
                                    </a>
                                </li>
                                <li>
                                    <a href="opcode-tool.html" id="LI24" class="dropdown-item">
                                        Bytecode to Opcode
                                    </a>
                                </li>
                                <li>
                                    <a href="pushTx.html" id="LI10" class="dropdown-item">
                                        Broadcast Transaction
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown position-initial">
                            <a href="javascript:;" id="LI_services2" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">More</a>
                            <div class="dropdown-menu dropdown-menu-border dropdown-menu-mega">
                                <div class="row">
                                    <div class="col-lg order-last order-lg-first">
                                        <div class="d-flex flex-column bg-light h-100 rounded-3 p-5">
                                            <div>
                                                <h6>Tools &amp; Services</h6>
                                                <p>Discover more of Artixcore's tools and services in one place.</p>
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
                                                    Balance
                                                    Checker
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

                        <li class="nav-item dropdown d-block d-lg-none">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Explorers</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li><a class="dropdown-item active" href="index.html">Polygon Mainnet</a></li>
                                <li><a class="dropdown-item" href="https://zkevm.Artixcore.com/">zkEVM Mainnet</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://amoy.Artixcore.com/">Amoy Testnet</a>
                                </li>
                                <li><a class="dropdown-item" href="https://cardona-zkevm.Artixcore.com/">Cardona
                                        Testnet</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown d-block d-lg-none">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Appearance &amp; Settings</a>
                            <ul class="dropdown-menu dropdown-menu-border" style="min-width: 14rem;">
                                <li>
                                    <button type="button" class="dropdown-item theme-btn active"
                                        data-bs-theme-value="light" onclick="setThemeMode('light');">
                                        <i class="far fa-sun-bright fa-fw dropdown-item-icon theme-icon me-1"
                                            data-href="#fa-sun-bright"></i> Light
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item theme-btn" data-bs-theme-value="dim"
                                        onclick="setThemeMode('dim');">
                                        <i class="far fa-moon-stars fa-fw dropdown-item-icon theme-icon me-1"
                                            data-href="#fa-moon-stars"></i> Dim
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item theme-btn" data-bs-theme-value="dark"
                                        onclick="setThemeMode('dark');">
                                        <i class="far fa-moon-stars fa-fw dropdown-item-icon theme-icon me-1"
                                            data-href="#fa-moon"></i> Dark
                                    </button>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="settings.html">
                                        <i class="far fa-gear fa-fw dropdown-item-icon me-1"></i> Site Settings <i
                                            class="far fa-arrow-right ms-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

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


    @yield('content')


    <footer id="masterFooter" class="bg-light mt-auto d-print-none">
        <div class="container-xxl">
            <div class="d-flex justify-content-between align-items-baseline py-6">

                <div class="d-flex gap-2">
                    <a class="link-dark" href="https://twitter.com/Artixcore" rel="nofollow noopener"
                        target="_blank">
                        <i class="fab fa-x-twitter me-0.5"></i> (Twitter)
                    </a>
                </div>

                <a class="link-dark" href="#">
                    <i class="far fa-arrow-up-to-line me-1"></i>Back to Top
                </a>
            </div>
            <hr class="my-0">

            <div class="row justify-content-md-between py-8 py-lg-10">
                <div class="col-lg-4 pe-xl-16 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <img class="me-2" width="28" data-img-theme="light"
                            src="{{ asset('assets/poly/images/svg/logos/chain-light2a89.svg') }}"
                            alt="Artixcore PoS Chain Logo">
                        <img class="me-2" width="28" data-img-theme="dim"
                            src="{{ asset('assets/poly/images/svg/logos/chain-dim2a89.svg') }}"
                            alt="Artixcore PoS Chain Logo">
                        <img class="me-2" width="28" data-img-theme="dark"
                            src="{{ asset('assets/poly/images/svg/logos/chain-dark2a89.svg') }}"
                            alt="Artixcore PoS Chain Logo">
                        <span class="fs-5">Powered by Artixcore PoS Chain</span>
                    </div>
                    <p class="fs-sm">Artixcore is a Block Explorer and Analytics Platform for Artixcore PoS Chain.</p>
                    <button type="button" class="btn btn-sm btn-secondary" onclick="addNetwork('web3');">
                        <img class="me-1" width="18" src="images/svg/brands/metamask.svg" alt="Metamask"> Add
                        Artixcore
                        Network
                    </button>
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
                        <li><a class="link-dark" href="https://docs.Artixcore.com/" target="_blank">API
                                Documentation</a></li>
                        <li><a class="link-dark" href="https://info.Artixcore.com/">Knowledge Base</a></li>
                        <li><a class="link-dark" href="https://Artixcore.freshstatus.io/" rel="nofollow noopener"
                                target="_blank">Network Status</a></li>
                    </ul>

                </div>
                <div class="col-6 col-md-4 col-lg">
                    <h4 class="h6 mb-3">Products &amp; Services</h4>

                    <ul class="list-unstyled list-sm-space fs-sm mb-0">
                        <li><a class="link-dark" href="https://etherscan.io/contactusadvertise?type=137">Advertise <i
                                    class="far fa-arrow-up-right-from-square text-muted ms-1"></i></a></li>
                        <li><a class="link-dark" href="https://etherscan.io/eaas"
                                target="_blank">Explorer-as-a-Service
                                (EaaS) <i class="far fa-arrow-up-right-from-square text-muted ms-1"></i></a></li>
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
                            Artixcore © 2024 (POLY-B1)
                            <span class="mx-1">|</span>
                            ⛏ Built by Team <a href="https://artixcore.com/"
                                target="_blank"><strong>Artixcore</strong><i
                                    class="far fa-arrow-up-right-from-square text-muted ms-1"></i></a>
                        </p>
                    </div>
                    <div class="col-md text-md-end">
                        <p class="mb-0">
                            Donations: <a class="me-1"
                                href="address/0x71c7656ec7ab88b098defb751b7401b5f6d8976f.html"><span
                                    id="spanDonateAddress" runat="server">0x71c765...d8976f</span></a> <i
                                class="fas fa-heart text-danger"></i>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min2a89.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min2a89.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min2a89.js') }}"></script>

    <script src="{{ asset('assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min2a89.js') }}"></script>
    <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min2a89.js') }}"></script>

    <script src="{{ asset('assets/js/hs.core2a89.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.cubeportfolio2a89.js') }}"></script>
    <script src="{{ asset('assets/js/custom/combine-js-bottom22a89.js') }}"></script>
    <script src="{{ asset('assets/vendor/autocomplete/dist/js/autocomplete.min2a89.js') }}"></script>
    <script src="{{ asset('assets/js/custom/blockchain-search2a89.js') }}"></script>

    <script src="{{ asset('assets/js/app.min2a89.js') }}"></script>


</body>

</html>
