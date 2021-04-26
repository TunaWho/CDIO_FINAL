<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./user.cssss" />
</head>
<body>
	<div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="home.html" class="simple-text">
                        SỬA XE 24H
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="accept.html">
                            <i class="pe-7s-graph"></i>
                            <p>ĐƠN DỊCH VỤ</p>
                        </a>
                    </li>
                    <li>
                        <a href="service.html">
                            <i class="pe-7s-user"></i>
                            <p>DỊCH VỤ</p>
                        </a>
                    </li>
                    <li>
                        <a href="manager.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>QUẢN LÝ DỊCH VỤ</p>
                        </a>
                    </li>
                    <li>
                        <a href="report.html">
                            <i class="pe-7s-science"></i>
                            <p>BÁO CÁO THỐNG KÊ</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="pe-7s-map-marker"></i>
                            <p>THÔNG TIN ĐỐI TÁC</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">THÔNG TIN ĐỐI TÁC</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                    <p class="hidden-lg hidden-md">THÔNG TIN ĐỐI TÁC</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        4 THÔNG BÁO
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-search"></i>
                                    <p class="hidden-lg hidden-md">TÌM KIẾM</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        TÀI KHOẢN
                                        <b class="caret"></b>
                                    </p>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">TRẠNG THÁI</a></li>
                                    <li><a href="#">THÔNG TIN</a></li>
                                    <li><a
                                            href="template.html">ĐĂNG
                                            XUẤT</a></li>
                                    <li class="divider"></li>
                                    <li><a href="user.html">CÀI
                                            ĐẶT</a></li>
                                </ul>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title"></h4>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Tên đối tác:</label>
                                                <input type="text" class="form-control" placeholder="Full name"
                                                    value="Dương Văn Dũng">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tên đăng nhập</label>
                                                    <input type="text" class="form-control" placeholder="Username"
                                                        value="dung0301">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        value="dung@gmail.com">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control" placeholder="Address"
                                                        value="48 Đà Sơn, Hòa Khánh Nam, Liên Chiểu, Đà Nẵng">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Số dư tài khoản</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Account balance" value="3,000,000 VND" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Số tài khoản </label>
                                                    <input type="text" class="form-control" placeholder="Account number"
                                                        value="12345678****" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Giới thiệu</label>
                                                    <textarea rows="5" class="form-control"
                                                        placeholder="Here can be your description"
                                                        value="Dũng">Luôn làm việc với phương châm :"Uy tín làm nên chất lượng".</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-fill pull-right">Cập nhật</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                                        alt="..." />
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="assets/img/faces/face-3.jpg"
                                                alt="..." />

                                            <h4 class="title">Dương Văn Dũng<br />
                                                <small>dung0301</small>
                                            </h4>
                                        </a>
                                    </div>
                                    <p class="description text-center"> "Uy tín làm nên chất lượng" <br>
                                        <p class="description text-center"> Điểm đánh giá: 4,5<i class="fa fa-star"></i>
                                            <br>
                                        </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button onclick="window.location.href='https://www.facebook.com/dung030199/'"
                                        class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                    <button onclick="window.location.href='https://twitter.com/'"
                                        class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button onclick="window.location.href='https://www.google.com/'"
                                        class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better
                        web
                    </p>
                </div>
            </footer>

        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
</html>