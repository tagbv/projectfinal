<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../admin/loginAdmin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../admin/loginAdmin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../admin/loginAdmin/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../admin/loginAdmin/css/style.css">

    <title>Login #3</title>
</head>

<body>


    <div class="half">
        <div class="bg order-1 order-md-2" style="background-image: url('../admin/loginAdmin/images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3>Login to <strong>Colorlib</strong></h3>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>
                            <form id="admin=login" action="/admin/login" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">email</label>
                                    <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com"
                                        id="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Your Password"
                                        id="password">
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="../admin/loginAdmin/js/jquery-3.3.1.min.js"></script>
    <script src="../admin/loginAdmin/js/popper.min.js"></script>
    <script src="../admin/loginAdmin/js/bootstrap.min.js"></script>
    <script src="../admin/loginAdmin/js/main.js"></script>
</body>

</html>
