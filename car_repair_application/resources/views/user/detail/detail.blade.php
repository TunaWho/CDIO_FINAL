<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./detail.css" />
    <link rel="stylesheet" type="text/css" href="./responsive.css">
    <title>Document</title>
</head>
<body>
	<div class="body container">
      	<div class="account" style="display: flex;">
      		<div class="images_acount" style="margin-right: -20px;">
      			<img src="./images/account.png" style="width: 200px; height: 200px; position: relative; left: -20px;">
      		</div>
      		<div class="info" style="margin-top: 20px;">
            <div>
              <span class="mr-2">Tên quán đối tác:</span>
              <span class="mr-2">adu</span>
            </div>

            <div>
              <span class="mr-2">Địa chỉ:</span>
              <span class="mr-2">8 hà văn tính</span>
            </div>

            <p>Thời gian hoạt động:</p>

      			<span class="images_acount-icon active mt-4 d-block position-relative" style="width: 100%; left: -5px" >
      				<img src="./images/star.svg">
      				<img src="./images/star.svg">
      				<img src="./images/star.svg">
      				<img src="./images/star.svg">
      				<img src="./images/star.svg">
      			</span>
      		</div>
      	</div>
      	<!--  -->
        <div class="d-flex justify-content-between flex-wrap">
        	<div class="service d-flex flex-column justify-content-between p-2 bg-fourth" style="border: 2px solid #333; min-width: 400px; border-radius: 5px; background: #f4f9f9">
        		<div class="item-service d-flex ">
        			<p>Vá xe</p>
        			<i class="fas fa-plus-circle"></i>
        		</div>
        		<div class="item-service">
        			<p>Thay lốp</p>
        			<i class="fas fa-plus-circle"></i>
        		</div>
        		<div class="item-service">
        			<p>Thay ruột</p>
        			<i class="fas fa-plus-circle"></i>
        		</div>
        		<div class="item-service">
        			<p>Thay nhớt</p>
        			<i class="fas fa-plus-circle"></i>
        		</div>
        		<div class="item-service">
        			<p>Khác</p>
        			<i class="fas fa-plus-circle"></i>
        		</div>
        	</div>
        	<!--  -->
        	<div class="total bg-fourth p-2" style="border: 2px solid #333; min-width: 400px; border-radius: 5px; background: #f4f9f9">
        		<b class="d-block">Tên Tài Khoản</b>
        		<b class="d-block">Dịch vụ</b>
        		<div class="d-flex position-relative ml-4">
        			<p class="mr-2">Ghi chú</p>
        			<p class="ml-auto">10000</p>
        		</div>
        		<div class="d-flex">
        			<b class="d-block">Tổng tiền</b>
              <p class="ml-auto">10000</p>
        		</div>
        		<button style="border-radius: 5px; margin: 0">Đặt đơn</button>
        	</div>
        </div>
      </div>
      <script src="./index.js"></script>
</body>
</html>