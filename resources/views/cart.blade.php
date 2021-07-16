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
                            placeholder="Nhập sách cần tìm kiếm...">
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
                            <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                                data-target="#formdangky">Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                                data-target="#formdangnhap">Đăng nhập</a>
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
    

    <!-- form dang ky khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với Seafood về</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">Điều khoản dịch
                                vụ & Chính sách bảo mật</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form dang nhap khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
        aria-labelledby="dangnhap_tieude" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signin" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                            <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                                khẩu</a>
                        </div>

                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

    <!-- giao diện giỏ hàng  -->
    <section class="content my-3">
        <div class="container">
            <div class="cart-page bg-white">
                <div class="row">
                    <!-- giao diện giỏ hàng khi không có item  -->
                    <div class="col-12 cart-empty d-none">
                        <div class="py-3 pl-3">
                            <h6 class="header-gio-hang">GIỎ HÀNG CỦA BẠN <span>(0 sản phẩm)</span></h6>
                            <div class="cart-empty-content w-100 text-center justify-content-center">
                                <img src="images/shopping-cart-not-product.png" alt="shopping-cart-not-product">
                                <p>Chưa có sản phẩm nào trong giở hàng của bạn</p>
                                <a href="index.html" class="btn nutmuathem mb-3">Mua thêm</a>
                            </div>
                        </div>
                    </div>

                    <!-- giao diện giỏ hàng khi có hàng (phần comment màu xanh bên dưới là phần 2 sản phẩm trong giỏ hàng nhưng giờ đã demo bằng jquery) -->
                    <div class="col-md-8 cart">
                        <div class="cart-content py-3 pl-3">
                            
                        </div>
                    </div>

                    <!-- giao diện phần thanh toán nằm bên phải  -->
                    <div class="col-md-4 cart-steps pl-0">
                        <div id="cart-steps-accordion" role="tablist" aria-multiselectable="true">
                            <!-- bước số 1: đăng nhập hoặc đăng ký -->
                            <div class="card">
                                <div class="card-header cardheader" role="tab" id="step1header">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                            href="#step1contentid" aria-expanded="true" aria-controls="step1contentid"
                                            class="text-uppercase header"><span class="steps">1</span>
                                            <span class="label">KHÁCH HÀNG MỚI / ĐĂNG NHẬP</span>
                                            <i class="fa fa-chevron-right float-right"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="step1contentid" class="collapse in" role="tabpanel"
                                    aria-labelledby="step1header" class="stepscontent">
                                    <div class="card-body p-0">
                                        <nav>
                                            <div class="nav nav-tabs dangnhap-dangky" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active text-center text-uppercase"
                                                    id="nav-dangnhap-tab" data-toggle="tab" href="#nav-dangnhap"
                                                    role="tab" aria-controls="nav-dangnhap" aria-selected="true">Đăng
                                                    nhập</a>
                                                <a class="nav-item nav-link text-center text-uppercase"
                                                    id="nav-dangky-tab" data-toggle="tab" href="#nav-dangky" role="tab"
                                                    aria-controls="nav-dangky" aria-selected="false">Đăng ký</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-dangnhap" role="tabpanel"
                                                aria-labelledby="nav-dangnhap-tab">
                                                <form id="form-signin-cart" class="form-signin mt-2">
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" class="form-control"
                                                            placeholder="Nhập địa chỉ email" name="email" required
                                                            autofocus>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputPassword" class="form-control"
                                                            placeholder="Mật khẩu" name="password" required>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <a href="#" class="float-right text-decoration-none"
                                                            style="color: #F5A623">Quên mật khẩu</a>
                                                    </div>
                                                    <button
                                                        class="btn btn-lg btn-block btn-signin text-uppercase text-white"
                                                        type="submit" style="background: #F5A623">Đăng nhập</button>

                                                    <hr class="my-4">
                                                    
                                                </form>
                                                <div class="btnduoicung" style="padding: 0 15px 15px 15px;">
                                                    <button
                                                        class="btn btn-lg btn-block btn-shopping-without-signup text-uppercase text-white"
                                                        style="background: #F5A623">Mua hàng không cần đăng ký</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-dangky" role="tabpanel"
                                                aria-labelledby="nav-dangky-tab">
                                                <form id="form-signup-cart" class="form-signin mt-2">
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputName" class="form-control"
                                                            placeholder="Nhập họ và tên" name="name" required autofocus>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="inputPhone" class="form-control"
                                                            placeholder="Nhập số điện thoại" name="phone" required>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" class="form-control"
                                                            placeholder="Nhập địa chỉ email" name="email" required>
                                                    </div>

                                                    <div class="form-label-group">
                                                        <input type="password" id="inputPassword" class="form-control"
                                                            placeholder="Nhập mật khẩu" name="password" required>
                                                    </div>
                                                    <div class="form-label-group mb-3">
                                                        <input type="password" id="inputConfirmPassword"
                                                            class="form-control" name="confirm_password"
                                                            placeholder="Nhập lại mật khẩu" required>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với
                                                            Seafood về</p>
                                                        <a href="#" class="text-decoration-none text-center"
                                                            style="color: #F5A623">Điều khoản dịch
                                                            vụ & Chính sách bảo mật</a>
                                                    </div>
                                                    <hr class="mt-3 mb-2">
                                                    <button
                                                        class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3"
                                                        type="submit" style="background: #F5A623">Đăng ký</button>

                                                </form>
                                                <div class="btnduoicung" style="padding: 0 15px 15px 15px;">
                                                    <button
                                                        class="btn btn-lg btn-block btn-shopping-without-signup text-uppercase text-white"
                                                        style="background: #F5A623">Mua hàng không cần đăng ký</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- bước số 2: nhập địa chỉ giao hàng  -->
                            <div class="card">
                                <div class="card-header" role="tab" id="step2header">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                            href="#step2contentid" aria-expanded="true" aria-controls="step2contentid"
                                            class="text-uppercase header"><span class="steps">2</span>
                                            <span class="label">Địa chỉ giao hàng</span>
                                            <i class="fa fa-chevron-right float-right"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="step2contentid" class="collapse in" role="tabpanel"
                                    aria-labelledby="step2header" class="stepscontent">
                                    <div class="card-body">
                                        <form class="form-diachigiaohang">
                                            <div class="form-label-group">
                                                <input type="text" id="inputName" class="form-control"
                                                    placeholder="Nhập họ và tên" name="name" required autofocus>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="inputPhone" class="form-control"
                                                    placeholder="Nhập số điện thoại" name="phone" required>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" class="form-control"
                                                    placeholder="Nhập địa chỉ email" name="email" required>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="inputAddress" class="form-control"
                                                    placeholder="Nhập Địa chỉ giao hàng" name="address" required>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="inputCity" class="form-control"
                                                    placeholder="Nhập Tỉnh/Thành phố" name="city" required>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="text" id="inputDistrict" class="form-control"
                                                    placeholder="Nhập Quận/Huyện" name="district" required>
                                            </div>
                                            <div class="form-label-group">
                                                <textarea type="text" id="inputNote" class="form-control"
                                                    placeholder="Nhập ghi chú (Nếu có)" name="note"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!-- bước 3: thanh toán đặt mua  -->
                                <div class="card">
                                    <div class="card-header" role="tab" id="step3header">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                                href="#step3contentid" aria-expanded="true"
                                                aria-controls="step3contentid" class="text-uppercase header"><span
                                                    class="steps">3</span>
                                                <span class="label">Thanh toán đặt mua</span>
                                                <i class="fa fa-chevron-right float-right"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="step3contentid" class="collapse in" role="tabpanel"
                                        aria-labelledby="step3header" class="stepscontent">
                                        <div class="card-body" style="padding: 15px;">
                                            <div class="goigiaohang">
                                                <h6 class="header text-uppercase">Chọn gói giao hàng</h6>
                                                <div class="option">
                                                    <input type="radio" name="goigiaohang" id="ghtc" checked>
                                                    <label for="ghtc">Giao hàng tiêu chuẩn</label>
                                                    <p>Từ 1-2 ngày tại Đà Nẵng; từ 3-5 ngày đối với các Tỉnh /
                                                        Thành khác</p>
                                                </div>
                                                <div class="option">
                                                    <input type="radio" name="goigiaohang" id="ghn">
                                                    <label for="ghn">Giao hàng nhanh</label>
                                                    <p>Trong ngày tại Đà Nẵng; từ 2-3 ngày đối với các Tỉnh / Thành
                                                        khác</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="pttt">
                                                <h6 class="header text-uppercase">Chọn phương thức thanh toán</h6>
                                                <div class="option mb-2">
                                                    <input type="radio" name="pttt" id="cod" checked>
                                                    <label for="cod">Thanh toán bằng tiền mặt khi nhận hàng</label>
                                                </div>
                                                <div class="option option2">
                                                    <input type="radio" name="pttt" id="atm">
                                                    <label for="atm" class="chuyenkhoan">Thanh toán chuyển khoản trước
                                                        qua Thẻ ATM/Internet Banking</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <button class="btn btn-lg btn-block btn-checkout text-uppercase text-white"
                                                style="background: #F5A623">Đặt mua</button>
                                            <p class="text-center note-before-checkout">(Vui lòng kiểm tra lại đơn hàng
                                                trước khi Đặt Mua)</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <!-- het div cart-steps  -->
                </div>
                <!-- het row  -->
            </div>
            <!-- het cart-page  -->
        </div>
        <!-- het container  -->
    </section>
    <!-- het khoi content  -->
    </section>
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

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#" style="background:#CF111A;"><i
                class="fa fa-chevron-up text-white"></i></div>
    </div>


</body>

</html>