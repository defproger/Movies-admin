<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>DataTables - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
          href="./app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
          href="./app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/pickers/form-flat-pickr.css">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link"
                   id="dropdown-user" href="#" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">John Doe</span>
                    </div>
                    <span class="avatar"><img class="round" src="./app-assets/images/portrait/small/avatar-s-11.jpg"
                                              alt="avatar" height="40" width="40">
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="page-profile.html">
                        <i class="me-50" data-feather="power"></i> logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="/movies">
                    <i data-feather="film"></i>
                    <span class="menu-title text-truncate">Movies</span>
                </a>
                 <a class="d-flex align-items-center" href="/directors">
                    <i data-feather="users"></i>
                    <span class="menu-title text-truncate">Directors</span>
                </a>
                 <a class="d-flex align-items-center" href="/logout">
                    <i data-feather="log-out"></i>
                    <span class="menu-title text-truncate">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <section id="advanced-search-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Advanced Search</h4>
                        </div>
                        <div class="card-body mt-2">
                            <form class="dt_adv_search" method="POST">
                                <div class="row g-1 mb-md-1">
                                    <div class="col-md-4">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control dt-input dt-full-name"
                                               data-column="1" placeholder="Alaric Beslier" data-column-index="0"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Email:</label>
                                        <input type="text" class="form-control dt-input" data-column="2"
                                               placeholder="demo@example.com" data-column-index="1"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Post:</label>
                                        <input type="text" class="form-control dt-input" data-column="3"
                                               placeholder="Web designer" data-column-index="2"/>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-md-4">
                                        <label class="form-label">City:</label>
                                        <input type="text" class="form-control dt-input" data-column="4"
                                               placeholder="Balky" data-column-index="3"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Date:</label>
                                        <div class="mb-0">
                                            <input type="text" class="form-control dt-date flatpickr-range dt-input"
                                                   data-column="5" placeholder="StartDate to EndDate"
                                                   data-column-index="4" name="dt_date"/>
                                            <input type="hidden" class="form-control dt-date start_date dt-input"
                                                   data-column="5" data-column-index="4"
                                                   name="value_from_start_date"/>
                                            <input type="hidden" class="form-control dt-date end_date dt-input"
                                                   name="value_from_end_date" data-column="5"
                                                   data-column-index="4"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Salary:</label>
                                        <input type="text" class="form-control dt-input" data-column="6"
                                               placeholder="10000" data-column-index="5"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-datatable">
                            <table class="dt-advanced-search table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<script src="./app-assets/vendors/js/vendors.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="./app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="./app-assets/js/core/app-menu.js"></script>
<script src="./app-assets/js/core/app.js"></script>
<script src="./app-assets/js/scripts/tables/table-datatables-advanced.js"></script>

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>

</html>