<!doctype html>
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
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./home.css" />
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TRANG CHỦ</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-dashboard"></i>
                            <p class="hidden-lg hidden-md">TRANG CHỦ</p>
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
                            <li><a href="#">ĐĂNG XUẤT</a></li>
                            <li class="divider"></li>
                            <li><a href="user.html">CÀI ĐẶT</a></li>
                          </ul>
                    </li>
                    <li class="separator hidden-lg"></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="body container">
        <section class="mt-2 p-4" style="background: #fff; border-radius: 10px;">
          <div class="tab-menu" style="display: flex;">
            <div class="header-tab row align-items-center" style="margin-right: 40px; border-radius: 5px;">
              <div class="ml-3">
                <select name="districtId">
                  <option value="-1">Chọn quận/ huyện</option>
                  <option value="30">Quận Cẩm Lệ</option>
                  <option value="31">Quận Hải Châu</option>
                  <option value="32">Quận Liên Chiểu</option>
                  <option value="33">Quận Ngũ Hành Sơn</option>
                  <option value="34">Quận Sơn Trà</option>
                  <option value="35">Quận Thanh Khê</option>
                  <option value="158">Hòa Vang</option>
                  <option value="159">Hoàng Sa</option>
                </select>
              </div>
            </div>
            <!--  -->
            <div class="header-tab row align-items-center" style="margin-right: 40px;">
              <div>
                <select name="districtId">
                  <option value="-1">Chọn loại xe</option>
                  <option value="30">Xe máy</option>
                  <option value="31">Xe tải</option>
                  <option value="32">Xe con</option>
                  <option value="33">Xe khách</option>
                  <option value="34">Xe chuyên dùng</option>
                </select>
              </div>
            </div>
            <!--  -->
            <div class="header-tab row align-items-center" style="margin-right: 40px;">
              <div>
                <select name="districtId">
                  <option value="-1">Chọn dịch vụ</option>
                  <option value="30">Thay lốp</option>
                  <option value="31">Vá xe</option>
                  <option value="32">Thay nhớt</option>
                  <option value="33">Thay bình điện</option>
                  <option value="34">Khác</option>
                </select>
              </div>
            </div>
  
            <div class="input-group mb-3" style="height: 40px;">
              <input style="max-width: 300px;" type="text" class="form-control h-100 ml-auto" placeholder="Tìm địa điểm, địa chỉ quán ..." aria-label="Recipient's username" aria-describedby="basic-addon2" />
              <div class="input-group-append h-100" style="margin: -5px 0 22px 0;">
                <button class="btn btn-outline-secondary m-0 border-0 bg-third color-fourth" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </section>
        <!--  -->
        <div class="container">
          <div class="title-wrapper" style="margin-left: auto;">
            <h2 class="title">Tiệm sửa xe</h2>
            <a class="view-all-deal" href="/da-nang/food/deals">
              <span class="icon-list-deal"><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span></span>Xem tất cả
            </a>
          </div>
          <!--  -->
          <div class="list">
            <div class="load" style="display: flex;">
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/4.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Thái Vinh</h4>
                      <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/5.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Quán Thành Tâm Motor</h4>
                      <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/6.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Trung Tay Ga</h4>
                      <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="list">
            <div class="load" style="display: flex;">
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/7.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Đông Á Motor</h4>
                      <div class="address">25 Hà Văn Tính, P. Hòa Khánh, Quận Liên Chiểu, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/8.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Tri Racing Shop</h4>
                      <div class="address">14 An Nhơn 9, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/3.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Thành Đạt Motor</h4>
                      <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="list">
            <div class="load" style="display: flex;">
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/1.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Đông Á Motor</h4>
                      <div class="address">25 Hà Văn Tính, P. Hòa Khánh, Quận Liên Chiểu, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/2.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Quán Đức Vương Motor</h4>
                      <div class="address">14 An Nhơn 9, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a class="item-content">
                  <div class="image-content">
                    <img src="./assets/img/3.jpg" />
                  </div>
                  <div class="info">
                    <div class="basic">
                      <h4 class="name-res">Thành Đạt Motor</h4>
                      <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="btn-next">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
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

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

</html>
