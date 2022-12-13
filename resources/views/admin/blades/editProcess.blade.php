
<head> 
    <title>Dahab Logistic - Maintenance System </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
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
                            <img src="{{asset('assets/img/logo.png')}}" class="navbar-logo" alt="logo">
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
                                 {{ __('تسجيل خروج') }}</a>
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
                                <span class="arab">الصفحة الرئيسية</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="add-maintenance.html" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <img src="{{asset('assets/img/main2.png')}}" width="25">
                                <span class="arab">إجراءات الصيانة</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" data-parent="#topAccordion">
                            <li>
                                <a class="arab" href="{{route('createMain')}}"> دخول صيانة</a>
                            </li>
                            <li>
                                <a class="arab" href="{{route('addProcess')}}"> اضافة اجراء صيانة </a>
                            </li>
                            <li>
                                <a class="arab" href="{{route('showTableprocess')}}"> عرض اجراءات الصيانة </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{route('closeMaintenance')}}">
                            <div class="">
                                <img src="{{asset('assets/img/close.png')}}" width="25">
                                <span class="arab">غلق الصيانة</span>
                            </div>
                        </a>

                    </li>
                    <li class="menu single-menu">
                        <a href="{{route('createPiece')}}">
                            <div class="">
                                <img src="{{asset('assets/img/tools.png')}}" width="25">
                                <span class="arab">انشاء قطع غيار </span>
                            </div>
                        </a>

                    </li>

                    <li class="menu single-menu">
                        <a href="{{route('invoice')}}">
                            <div class="">
                                <img src="{{asset('assets/img/bills.png')}}" width="25">
                                <span class="arab">الفواتير</span>
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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item arab"> <img class="mr-2" src="{{asset('assets/img/enter.png')}}" width="25">اضافة اجراء صيانة (متابعة حركة الصيانة)</li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-top-spacing" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            {{-- #############################FORM DATA######################### --}}
                            <form  action="{{route('updateprocess',$Process->id)}}"method="POST"enctype="multipart/form-data">
                                @csrf
                                <div class="form-row mb-4">
                                    {{-- <div class="form-group col-md-2">
                                        <label class="alert alert-danger arab" style="color: #a90b0b;">اختر رقم الصيانة أولا!</label>
                                    </div> --}}
                                    {{-- <div class="form-group col-md-4">
                                        <select id="sec" name="main_no" class="form-control arab" onchange="secondFunction()">
                                            @if($Process && $Process -> count() > 0)
                                            @foreach($Process as $item)
                                                <option
                                                value="{{$item -> main_no}}">{{$item -> main_no}}</option>
                                                @endforeach
                                                @endif
                                    </select>
                                    </div> --}}
                                </div>
                                <hr>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label class="alert alert-info arab" style="color:green;">اختر الإجراء المناسب</label>
                                        <select class="form-control arab" name="nameprocess_id" onchange="processFunction()" id="process">
                                            <optgroup label="من فضلك أختر العملية ">
                                            @if($NameProcess && $NameProcess -> count() > 0)
                                            @foreach($NameProcess as $item)
                                                <option
                                                value="{{$item -> id}}"@if($Process -> nameprocess_id == $item -> id)  selected @endif
                                                >{{$item -> name}}</option>
                                                @endforeach
                                                @endif
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div id="store">
                                    <label class="alert alert-info arab store-label" style="color:green;"> المخزن</label>

                                    <div class="form-row mb-4">

                                        <div class="form-group col-md-4">
                                            <select class="form-control arab" name="namePiece_id" onchange="processFunction()" id="process">
                                                <optgroup label="من فضلك أختر العملية ">
                                                @if($NamePiece && $NamePiece -> count() > 0)
                                                @foreach($NamePiece as $item)
                                                    <option
                                                    value="{{$item -> id}}" @if($Process -> namePiece_id == $item -> id)  selected @endif
                                                    >{{$item -> name}}</option>
                                                    @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                            @error("namePiece_id")<span class="text-danger"> {{$message}}</span> @enderror
                                        </div>
                                        {{-- <div class="form-group col-md-4">
                                            <input type="text" name="piece_no" value="{{$Process->piece_no}}" class="form-control arab" placeholder="او رقم القطعة">
                                            @error("piece_no")<span class="text-danger"> {{$message}}</span> @enderror

                                        </div> --}}

                                    </div>
                                    <div class="form-row mb-4">

                                        <div class="form-group col-md-4">
                                            <label class="arab store-label"> سعر بيع ورشة</label>
                                            <input type="text" value="{{$Process->price}}" name="price" class="form-control arab">
                                            @error("price")<span class="text-danger"> {{$message}}</span> @enderror
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="arab store-label "> الكمية</label>
                                            <input type="text" name="quantity" value="{{$Process->quantity}}" class="form-control arab">
                                            @error("quantity")<span class="text-danger"> {{$message}}</span> @enderror
                                        </div>

                                    </div>
                                </div>
                                <div id="store2" style="display: none;">
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-4">
                                            <label class="arab store-label">المصنعية</label>
                                            <input type="text" value="{{$Process->workship}}" name="workship" class="form-control arab">
                                            @error("workship")<span class="text-danger"> {{$message}}</span> @enderror
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="arab store-label "> الفئة</label>
                                            <input type="text" value="{{$Process->category}}" name="category" class="form-control arab">
                                            @error("category")<span class="text-danger"> {{$message}}</span> @enderror
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn mt-3 arab save">إضافة</button>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2022 <a target="_blank" href="https://dahab-informatics.com">Dahab Informatics</a>, All rights reserved.</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- MDB -->
    <script>
        function processFunction() {
            var s = document.getElementById('process').value;
            console.log(s);
            if (s == "2") {
                document.getElementById('store').style.display = "none";
                document.getElementById('store2').style.display = "block";

            } else {
                document.getElementById('store').style.display = "block";
                document.getElementById('store2').style.display = "none";
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#main-num").select2();

        });
    </script>

</body>
