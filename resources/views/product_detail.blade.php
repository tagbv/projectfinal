<!DOCTYPE html>
<html lang="li">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/product-item.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
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
            <a class="navbar-brand" href="index.html" style="color: #CF111A;"><b>SEAFOOD</b>.com</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
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
                
            </div>
        </div>
    </section>

    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Tôm </a></li>
                <li class="breadcrumb-item active"><a href="#">Tôm hùm</a></li>
            </ol>
        </div>
    </section>

    <!-- nội dung của trang  -->
    <section class="product-page mb-4">
        <div class="container">
            <!-- chi tiết 1 sản phẩm -->
            <div class="product-detail bg-white p-4">
                <div class="row">
                    <!-- ảnh  -->
                    <div class="col-md-5 khoianh">
                        <div class="anhto mb-4">
                            <a class="active" href="images/1.jpg" data-fancybox="thumb-img">
                                <img class="product-image" src="images/1.jpg" style="width: 100%;">
                            </a>
                        </div>
                        <div class="list-anhchitiet d-flex mb-4" style="margin-left: 2rem;">
                            <img class="thumb-img thumb1 mr-3" src="images/1.jpg" class="img-fluid">
                        </div>
                    </div>
                    <!-- thông tin sản phẩm: tên, giá bìa giá bán tiết kiệm, các khuyến mãi, nút chọn mua.... -->
                    <div class="col-md-7 khoithongtin">
                        <div class="row">
                            <div class="col-md-12 header">
                                <h4 class="ten">Tôm Hùm Bông</h4>
                                <hr>
                            </div>
                            <div class="col-md-7">
                                <div class="gia">
                                    <div class="giabia">Size:<span class="ml-2">500g/con</span></div>
                                    <div class="giaban">Giá bán:<span
                                            class="giamoi font-weight-bold">700.000 </span><span class="donvitien">₫/Kg</span></div>
                                </div>
                                <div class="soluong d-flex">
                                    <label class="font-weight-bold">Số lượng: </label>
                                    <div class="input-number input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text btn-spin btn-dec">-</span>
                                        </div>
                                        <input type="text" value="1" class="soluongsp  text-center">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn-spin btn-inc">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nutmua btn w-100 text-uppercase">Chọn mua</div>
                                <a class="huongdanmuahang text-decoration-none" href="#">(Vui lòng xem hướng dẫn mua
                                    hàng)</a>
                            </div>
                        </div>
                    </div>
                    <!-- decripstion của 1 sản phẩm: giới thiệu , đánh giá độc giả  -->
                    <div class="product-description col-md-9">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active text-uppercase" id="nav-gioithieu-tab"
                                    data-toggle="tab" href="#nav-gioithieu" role="tab" aria-controls="nav-gioithieu"
                                    aria-selected="true">Giới thiệu</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active ml-3" id="nav-gioithieu" role="tabpanel"
                                aria-labelledby="nav-gioithieu-tab">
                                <h6 class="tieude font-weight-bold">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                <p>
                                    <span>Tôm Hùm Alaska là loại tôm rất nổi tiếng trên thế giới, là loại hải sản không thể thiếu trong thực đơn của các nhà hàng, quán ăn lơn. Loại tôm hùm này sinh sống tại vùng biển sâu của Alaska phía bắc nước Mỹ và Canada. 
                                    </span>
                                </p>
                                <p>
                                    <span>Những bãi đá ngầm, san hô, nước ở đây trong xanh, rất lạnh là nơi sinh sống lý tưởng của tôm hùm Alaska.</span>
                                </p>
                                
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- khối sản phẩm tương tự -->
    <section class="_1khoi sachmoi">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light pt-4">
                        <h5 class="header text-uppercase" style="font-weight: 400;">Có thể bạn đã xem</h5>
                        <a href="index.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-chuyen-nghe-chuyen-doi">
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
                            title="Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat">
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
                            data-toggle="tooltip" data-placement="bottom" title="Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành
                            Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-hanh-phuc-sang-tao">
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
                            title="Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với Đời Mình?">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-giao-duc-va-y-nghia-cuoc-song">
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
                            title="Combo Dinh Dưỡng Xanh - Thần dược xanh">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-dinh-duong-than-duoc-xanh">
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
                            title="Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-an-xanh-song-lanh">
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
                            title="Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho Thế Kỷ 21">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-luoc-su-loai-nguoi">
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
                            data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)">
                            <img class="card-img-top anh" src="images/1.jpg"
                                alt="combo-phong-cach-song">
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
                        </a>
                    </div>
                </div>
            </div>
        </div><br>
    </section>  
    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/11.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Đơn hàng 400.000đ ở Đà Nẵng</p>
                            <p class="detail">Đơn hàng 1.000.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/22.png" alt="icon-time">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">GIAO HÀNG TRONG NGÀY</h6>
                            <p class="detail">Với tất cả các đơn hàng trong tỉnh</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
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
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h3 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h3>
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