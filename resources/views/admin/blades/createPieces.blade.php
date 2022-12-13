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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/datatable/custom_dt_html5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/datatable/dt-global_style.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                     
                        </ol>
                    </nav>
                </div>


                <div class="container">
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                <form  action="{{route('storePiece')}}"method="POST"enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-row mb-4 ml-3">

                        <div class="form-group col-md-4">
                            <label class="arab store-label">  اضافة قطع غيار</label>
                            <input type="text" name="name" class="form-control arab">
                            @error("name")<span class="text-danger"> {{$message}}</span> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label class="arab store-label"> سعر القطعة </label>
                            <input type="text" name="price" class="form-control arab">
                            @error("price")<span class="text-danger"> {{$message}}</span> @enderror

                        </div>

                        <div class="form-group col-md-4">
                            <button type="submit" class="btn mt-5 arab save">إضافة</button> 

                        </div>

                    </div>

                </form>

               <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="arab">اسم القطعة</th>
                            <th class="arab">سعر القطعة</th>
                            <th class="dt-no-sorting">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($NamePiece as $item)
                            
                        <tr>
                            <td style="font-size:16px;">{{++$id}}</td>
                            <td style="font-size:16px;">{{$item->name}}</td>
                            <td style="font-size:16px;">{{$item->price}}</td>

                            <td>
                                <a onclick="return confirm('هل انت متاكد من عملية الحذف')" class="btn btn-danger bg-green-700 rounded-sm py-1 px-2 arab" href="{{route('deletePiece',$item->id)}}"> حذف</a>


                            </td>
                        </tr>
                        @endforeach
                     
                    </tbody>
                </table>
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
    
        <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
        <script src="{{asset('assets/datatable/datatables.js')}}"></script>
        <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
        <script src="{{asset('assets/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/datatable/button-ext/jszip.min.js')}}"></script>
        <script src="{{asset('assets/datatable/button-ext/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/datatable/button-ext/buttons.print.min.js')}}"></script>
        <script>

      

            $('#html5-extension').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                buttons: {
                    buttons: [{
                        extend: 'csv',
                        className: 'btn btn-sm'
                    },  {
                        extend: 'print',
                        className: 'btn btn-sm'
                    }]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
        </script>

</body>