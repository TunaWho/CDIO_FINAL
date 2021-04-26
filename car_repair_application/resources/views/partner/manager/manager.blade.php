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
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./manager.css" />
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
                <a class="navbar-brand" href="#">QUẢN LÝ DỊCH VỤ</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-dashboard"></i>
                            <p class="hidden-lg hidden-md">QUẢN LÝ DỊCH VỤ</p>
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
    <div class="container">
        <label for="email"><b>Loại xe:</b></label>
        <input type="text" placeholder="Nhập loại xe" required>

         <label for="email"><b>Dịch vụ:</b></label>
        <input type="text" placeholder="Nhập dịch vụ"  required>

         <label for="email"><b>Giá tiền:</b></label>
        <input type="text" placeholder="Nhập giá tiền" required>
        <div class="clearfix">
          <button type="button" onclick="window.location.href='/'" class="cancelbtn">Thêm</button>
        </div>
        <div>
            <table id="customers">
              <tr>
                <th>STT</th>
                <th>Loại xe</th>
                <th>Tên dịch vụ</th>
                <th>Giá tiền</th>
                <th>Quản lý</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Sirius</td>
                <td>Thay xích</td>
                <td>150000</td>
                <td>
                  <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                    class="cancelbtn">Xóa</button>
                    <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                    class="cancelbtn">Sửa</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Yamaha</td>
                <td>Vá xe</td>
                <td>20000</td>
                <td>
                    <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                      class="cancelbtn">Xóa</button>
                      <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                      class="cancelbtn">Sửa</button>
                  </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Winner</td>
                <td>Thay nhớt</td>
                <td>100000</td>
                <td>
                    <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                      class="cancelbtn">Xóa</button>
                      <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                      class="cancelbtn">Sửa</button>
                  </td>
              </tr>
            </table>
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

</html>
