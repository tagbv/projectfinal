<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/gio-hang.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
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
    <!-- thanh "danh muc sach" đã được ẩn bên trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục</span>
                        </div>
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
    </section>
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none" href="dang-nhap.html">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <form id="form-signup" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password"
                                required>
                        </div>
                        <div class="form-label-group mb-4">
                            <input type="password" class="form-control" name="confirm_password"
                                placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/11.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Đơn hàng 400.000đ ở Đà Nẵng</p>
                            <p class="detail">Đơn hàng 1.000.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/22.png" alt="icon-time">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">GIAO HÀNG TRONG NGÀY</h6>
                            <p class="detail">Với tất cả các đơn hàng trong tỉnh</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/33.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">SẢN PHẨM AN TOÀN</h6>
                            <p class="detail">Cam kết chất lượng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">Về Seafood</h6>
                        <a href="#">Giới thiệu về Seafood</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="images/visa-payment.jpg" alt="visa-payment">
                        <img src="images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="images/cod-payment.jpg" alt="cod-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>