<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="admin/.assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="admin/./assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        admin
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="admin/./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="admin/./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="admin/./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="admin/./assets/img/logo-small.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="#" class="simple-text logo-normal">
                    Logo
                    <!-- <div class="logo-image-big">
                            <img src="../assets/img/logo-big.png">
                        </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="javascript:;">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Danh Mục Sản Phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="nc-icon nc-watch-time"></i>
                            <p>Sản Phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="nc-icon nc-bag-16"></i>
                            <p>Đơn Hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Người Dùng</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="nc-icon nc-chart-bar-32"></i>
                            <p>Thống Kê</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" style="height: 100vh;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Title</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search..." />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Stt</th>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Mô Tả</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>sản phẩm 1</td>
                                        <td style="width: 100px;"><img class="rounded" style="width: 100px; height: 100px;"
                                                src="admin/./assets/img/faces/kaci-baum-1.jpg"></td>
                                        <td>100000</td>
                                        <td style="width: 500px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo
                                            eius, cumque sit doloribus
                                            istinctio culpa voluptatibus accusantium consequuntur reiciendis minus ut
                                            ab, ipsa inventore id
                                            necessitatibus sunt unde laborum!
                                        </td>
                                        <td><button type="button" class="btn btn-success">Sửa</button>
                                        </td>
                                        <td><button type="button" class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>sản phẩm 2</td>
                                        <td><img class="rounded" style="width: 50px; height: 50px;"
                                                src="admin/./assets/img/logo-small.png"></td>
                                        <td>100000</td>
                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo
                                            eius, cumque sit doloribus
                                            istinctio culpa voluptatibus accusantium consequuntur reiciendis minus ut
                                            ab, ipsa inventore id
                                            necessitatibus sunt unde laborum!
                                        </td>
                                        <td><button type="button" class="btn btn-success">Sửa</button>
                                        </td>
                                        <td><button type="button" class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>sản phẩm 3</td>
                                        <td><img class="rounded" style="width: 50px; height: 50px;"
                                                src="admin/./assets/img/logo-small.png"></td>
                                        <td>100000</td>
                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo
                                            eius, cumque sit doloribus
                                            istinctio culpa voluptatibus accusantium consequuntur reiciendis minus ut
                                            ab, ipsa inventore id
                                            necessitatibus sunt unde laborum!
                                        </td>
                                        <td><button type="button" class="btn btn-success">Sửa</button>
                                        </td>
                                        <td><button type="button" class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"
                                            aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright"> © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="admin/./assets/js/core/jquery.min.js"></script>
    <script src="admin/./assets/js/core/popper.min.js"></script>
    <script src="admin/./assets/js/core/bootstrap.min.js"></script>
    <script src="admin/./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="admin/./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="admin/./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="admin/./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
