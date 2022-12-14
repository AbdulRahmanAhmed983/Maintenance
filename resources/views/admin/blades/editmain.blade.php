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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item arab"> <img class="mr-2" src="{{asset('assets/img/enter.png')}}" width="25"> ???????? ?????????? (???????????? ?????? ??????????????)</li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-top-spacing" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <form  action="{{route('updatemaintenance',$data->id)}}"
                            method="POST"
                            enctype="multipart/form-data">
                          @csrf                                

                                <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active arab" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">???????????? ??????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link arab" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">?????????????????? ????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link arab" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">?????????????? ????????????????</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="simpletabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-4">
                                                <label class="alert alert-danger arab" style="color: #a90b0b;">???????? ?????? ?????????????? ????????!</label>
                                                <select id="sec" name="carModel_id" class="form-control arab" onchange="secondFunction()">
                                                    <optgroup label="???? ???????? ?????????????????????? ">
                                                        @if($carModel && $carModel -> count() > 0)
                                                        @foreach($carModel as $carModel)
                                                        <option
                                                        value="{{$carModel -> id }}">{{$carModel -> name}}</option>
                                                        @endforeach
                                                        @endif
                                                </optgroup>
                                            </select>
                                            </div>
                                        </div>
                                        <div id="singlee">
                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-4">
                                                    <label class="arab">??????????????</label>
                                                    <input name="date" value="{{$data->date}}" class="form-control " type="date">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ????????????</label>
                                                    <input name="clint_name" value="{{$data->clint_name}}" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ??????????????</label>
                                                    <input name="car_type" value="{{$data->car_type}}" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ??????????????</label>
                                                    <input name="car_no" value="{{$data->car_no}}" type="text" class="form-control">

                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ????????????</label>
                                                    <input name="motor_no" value="{{$data->motor_no}}" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ??????????????</label>
                                                    <input name="frame_no" value="{{$data->frame_no}}" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="duble" style="display: none;">
                                            <div class="form-row mb-4 duble">
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ????????????????</label>
                                                    <input name="trailer_type" value="{{$data->trailer_type}}" type="text" class="form-control">

                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ????????????????</label>
                                                    <input name="trailer_no" value="{{$data->trailer_no}}" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="arab">?????? ?????????? ????????????????</label>
                                                    <input name="frameTrailer_no" value="{{$data->frameTrailer_no}}" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="media">
                                            <div class="input-group mb-4">
                                                <textarea class="form-control arab" aria-label="With textarea"  name="notes">{{$data->notes}}</textarea>
                                            </div>
                                            <img class="ml-3" src="{{asset('assets/img/nots.jpeg')}}" alt="Generic placeholder image">

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="input-group mb-4">
                                            <textarea class="form-control arab" aria-label="With textarea" name="receipt_notes" >{{$data->receipt_notes}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn mt-3 arab save">?????? ????????????????</button>
                                <!-- <button onclick="" class="btn mt-3 arab save">?????????? </button> -->

                            </form>
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


    <script>
        function secondFunction() {
            var d = document.getElementById('sec').value;
            if (d == "????????????") {
                document.getElementById('duble').style.display = "block";

            } else {
                document.getElementById('duble').style.display = "none";
            }
        }
    </script>
</body>