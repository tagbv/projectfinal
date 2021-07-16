<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Thực Phẩm Sạch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="client/css/home.css">
    <script type="text/javascript" src="client/js/main.js"></script>
    <link rel="stylesheet" href="client/fontawesome_free_5.13.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="client/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="client/slick/slick-theme.css" />
    <script type="text/javascript" src="client/slick/slick.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.html" style="color: #CF111A;"><b>SEAFOOD</b>.com</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            placeholder="Nhập từ khóa cần tìm kiếm...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                khoản</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="dang-ky.html"
                                >Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="dang-nhap.html" 
                                >Đăng nhập</a>
                        </div>
                    </div>
                    <li class="nav-item giohang">
                        <a href="gio-hang.html" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">0</div>
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="gio-hang.html"
                            style="display:inline-block">Giỏ
                            Hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="line-height: 40px;  font-size: 14px;">
                        <a style="color: white;margin-right: 25px;" href="index.html">Trang Chủ </a>
                        <a style="color: white;margin-right: 25px;" href="index.html">Sản Phẩm </a>
                        <a style="color: white;margin-right: 25px;" href="index.html">Liên hệ</a>
                        <a style="color: white;" href="index.html">Giới thiệu </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            <li> <a href="">1</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">2</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">3</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">4</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">5</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </div>
                                   
                                </ul>
                            </li>
                            <li><a href="#">6</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">7</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">8</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">9</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">10</a><i class="fa fa-chevron-right float-right"></i>

                            </li>
                            <li><a href="#">11</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                 
                                    <div class="content trai">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                    </div>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="client/images/slider_1.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="client/images/slider_2.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="client/images/slider_3.jpg" class="img-fluid"
                                        style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="_1khoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM MỚI</h1>
                        <a href="" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    <div class="card">
                        <a href="chi-tiet-san-pham.html" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                            <img class="card-img-top anh" src="client/images/1.jpg"
                                alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cua Hoàng Đế</h3>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div><hr>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Ma Bùn Lưu Manh Và Những Câu Chuyện Khác Của Nguyễn
                        Trí">
                            <img class="card-img-top anh" src="client/images/1.jpg" >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cua Hoàng Đế</h3>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">68.000 ₫</div>
                                    <div class="giacu text-muted">85.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                           >
                            <img class="card-img-top anh" src="client/images/1.jpg" alt="bank-4.0">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cua Hoàng Đế
                                </h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                                >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cua Hoàng Đế</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                           >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                                >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cua Hoàng Đế</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                               >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            >
                            <img class="card-img-top anh"
                                src="client/images/1.jpg"
                                >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" >
                            <img class="card-img-top anh" src="client/images/1.jpg" >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- khoi sach combo hot  -->
    <section class="_1khoi combohot mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header -->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM NỔI BẬT</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom">
                            <img class="card-img-top anh" src="client/images/1.jpg"
                              >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                           >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                               >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom">
                            <img class="card-img-top anh" src="client/images/1.jpg"
                               >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua
                                </h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                               >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                           >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                               >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Chua</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                           >
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom">
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom">
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="_1khoi combohot mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header -->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM KHUYẾN MÃI</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" >
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;">
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" >
                            <img class="card-img-top anh" src="client/images/1.jpg"
                                >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt
                                </h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            >
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            >
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom">
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;">
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" >
                            <img class="card-img-top anh" src="client/images/1.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cà Rốt</h3>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="client/images/11.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Đơn hàng 400.000đ ở Đà Nẵng</p>
                            <p class="detail">Đơn hàng 1.000.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="client/images/22.png" alt="icon-time">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">GIAO HÀNG TRONG NGÀY</h6>
                            <p class="detail">Với tất cả các đơn hàng trong tỉnh</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="client/images/33.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">SẢN PHẨM AN TOÀN</h6>
                            <p class="detail">Cam kết chất lượng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h3 class="header text-uppercase font-weight-bold">Về Seafood</h3>
                        <a href="#">Giới thiệu về Seafood</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h3 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h3>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h3 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h3>
                        <img src="client/images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h3 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h3>
                        <img src="client/images/visa-payment.jpg" alt="visa-payment">
                        <img src="client/images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="client/images/cod-payment.jpg" alt="cod-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>