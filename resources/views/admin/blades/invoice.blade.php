<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dahab Logistic - Maintenance System </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="{{asset('assets/css/apps/invoice-preview.css')}}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <!-- arabic fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@500&display=swap" rel="stylesheet">
</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{route('showTable')}}"><img alt="logo" src="{{asset('assets/img/one.png')}}"> <span class="navbar-brand-name">Dahab Logistic - Maintenance System</span></a>
            </div>


        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="{{route('showTable')}}">
                            <img src="{{asset('assets/img/one.png')}}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{route('showTable')}}" class="nav-link"> Dahab Logistic </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">
                    <li class="menu single-menu">
                        <a href="add-maintenance.html" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <img src="{{asset('assets/img/mec.png')}}" width="30">
                                <span class="arab"> {{ Auth::user()->name }}</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" data-parent="#topAccordion">
                            <li>
                                <a class="arab" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('?????????? ????????') }}</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                         
                        </ul>
                    </li>
                    <li class="menu single-menu">
                        <a href="{{route('showTable')}}">
                            <div class="">
                                <img src="{{asset('assets/img/main.png')}}" width="25">
                                <span class="arab">???????????? ????????????????</span>
                            </div>
                        </a>
                    </li>

                    <ul class="collapse submenu list-unstyled" data-parent="#topAccordion">
                        <li>
                            <a class="arab" href="{{route('createMain')}}"> ???????? ??????????</a>
                        </li>
                        <li>
                            <a class="arab" href="{{route('addProcess')}}"> ?????????? ?????????? ?????????? </a>
                        </li>
                    </ul>

                    <li class="menu single-menu">
                        <a href="add-maintenance.html" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <img src="{{asset('assets/img/main2.png')}}" width="25">
                                <span class="arab">?????????????? ??????????????</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" data-parent="#topAccordion">
                            <li>
                                <a class="arab" href="{{route('createMain')}}"> ???????? ??????????</a>
                            </li>
                            <li>
                                <a class="arab" href="{{route('addProcess')}}"> ?????????? ?????????? ?????????? </a>
                            </li>
                            <li>
                                <a class="arab" href="{{route('showTableprocess')}}"> ?????? ?????????????? ?????????????? </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu single-menu">
                        <a href="{{route('closeMaintenance')}}">
                            <div class="">
                                <img src="{{asset('assets/img/close.png')}}" width="25">
                                <span class="arab">?????? ??????????????</span>
                            </div>
                        </a>

                    </li>
                    <li class="menu single-menu">
                        <a href="{{route('createPiece')}}">
                            <div class="">
                                <img src="{{asset('assets/img/tools.png')}}" width="25">
                                <span class="arab">?????????? ?????? ???????? </span>
                            </div>
                        </a>

                    </li>

                    <li class="menu single-menu">
                        <a href="{{route('invoice')}}">
                            <div class="">
                                <img src="{{asset('assets/img/bills.png')}}" width="25">
                                <span class="arab">????????????????</span>
                            </div>
                        </a>

                    </li>
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb arab">
                            <li class="breadcrumb-item "><a href="javascript:void(0);">?????? ??????????????</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">?????????? ???????? ??????????</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="row invoice  layout-spacing layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="doc-container">

                            <div class="row">

                                <div class="col-xl-9">

                                    <div class="invoice-container">
                                        <div class="invoice-inbox">

                                            <div id="ct" class="">

                                                <div class="invoice-00001">
                                                    <div class="content-section">

                                                        <div class="inv--head-section inv--detail-section">

                                                            <div class="row">

                                                                <div class="col-sm-6 col-12 mr-auto text-center">
                                                                    <div>
                                                                        <img class="company-logo" src="{{asset('assets/img/one.png')}}" alt="company" width="100px">
                                                                    </div>
                                                                    <div class="">
                                                                        <h5 class="arab clr">?????? ???????????????? ??????????</h5>
                                                                        <h5 class="arab">???????? ??????????????</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 align-self-center mt-3 text-center invoice-add">
                                                                    <p class="inv-created-date arab"><span class="inv-title">??????????????: </span> <span class="inv-date"> ?????????? ???????? ???????????????? ???????? ????????????????????????????</span></p>
                                                                    <p class="inv-due-date arab"><span class="inv-title">??33-???????? ????????????????/?????????????? ????????????????</span></p>
                                                                    <p class="inv-created-date arab"><span class="inv-title">??: </span> <span class="inv-date">03/4320940</span></p>
                                                                    <p class="inv-created-date arab"><span class="inv-title">????????: </span> <span class="inv-date">03/4320411</span></p>
                                                                    <p class="inv-created-date arab"><span class="inv-title">????????????: </span> <span class="inv-date">01222408980</span></p>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="inv--detail-section inv--customer-detail-section">

                                                            <div class="row">

                                                                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-4 align-self-center">
                                                                    <p class="inv-to"><span class="arab">??????????????</span>: <span class="dotss">.........</span>/<span class="dotss">........</span>/<span class="dotss">..............</span>20</p>
                                                                </div>

                                                                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                                    <h6 class=" inv-title arab">???????? ???????????? ????????</h6>
                                                                </div>

                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                    <p class="inv-street-addr arab mt-3">?????? ???? ?????? <span class="dotss">.................... </span>?????????????? <span class="dotss">.........</span>/<span class="dotss">..........</span>/<span class="dotss">........</span>20 ????
                                                                        ???????? ???????????? <span class="dotss">.......................................</span> ???? ???? ?????????? ???????????? ?????????? ??????????:</p>
                                                                    <p class="inv-street-addr arab mt-3">?????? ????????????: <span class="dotss">.....................................................................................................................................................................................</span></p>
                                                                    <p class="inv-street-addr arab mt-3">?????? ????????????: <span class="dotss">............................................................................</span> ??????????: <span class="dotss">.............................................................................................</span></p>
                                                                    <p class="inv-street-addr arab mt-3">?????? ????????????: <span class="dotss">............................................................................</span> ?????? ??????????????: <span class="dotss">...................................................................................</span></p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <hr>
                                                        <div class="inv--detail-section inv--customer-detail-section">
                                                            <div class="row mt-4">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                    <p class="inv-to arab mt-3">?????????????????? ????????????????:</p>
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                    <p class="inv-to arab mt-3">??????????????:</p>
                                                                    <p class="inv-street-addr arab">?????????????????? ?????? ?????????????? ?????????????????? ??????????????:</p>
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                    <hr class="dots">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="inv--note">
                                                            <div class="row mt-4">
                                                                <div class="col-sm-6 col-6 order-sm-0 order-1">
                                                                    <p class="inv-created-date arab text-center clr">?????????? ??????????????</p>
                                                                    <p class="inv-created-date arab mb-2">??????????: <span class="dotss">................................................................................</span></p>
                                                                    <p class="inv-created-date arab mb-2">??????????????: <span class="dotss">................................................................................</span> </p>
                                                                    <p class="inv-created-date arab mb-2">??????????????: <span class="dotss">................................................................................</span></p>
                                                                </div>
                                                                <div class="col-sm-6 col-6 order-sm-0 order-1">
                                                                    <p class="inv-created-date arab text-center clr"> ???????? ??????????????</p>
                                                                    <p class="inv-created-date arab mb-2">??????????: <span class="dotss">................................................................................</span></p>
                                                                    <p class="inv-created-date arab mb-2">??????????????: <span class="dotss">................................................................................</span></p>
                                                                    <p class="inv-created-date arab mb-2">??????????????:<span class="dotss">................................................................................</span></p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>

                                </div>

                                <div class="col-xl-3">

                                    <div class="invoice-actions-btn">

                                        <div class="invoice-action-btn">

                                            <div class="row">
                                                <div class="col-xl-12 col-md-3 col-sm-6">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright ?? 2022 <a target="_blank" href="https://dahab-informatics.com">Dahab Informatics</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/apps/invoice-preview.js')}}"></script>


</body>