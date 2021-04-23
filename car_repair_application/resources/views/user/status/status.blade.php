<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./status.css" />
    <link rel="stylesheet" type="text/css" href="./responsive.css">
    <link rel="stylesheet" type="text/css" href="./star-rating-svg.css">
    <title>Document</title>
</head>
<body>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Đánh giá dịch vụ</h5>
          <button type="button" style="width: 50px" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="my-rating"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Gửi</button>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="container" style="min-height: calc(100vh - 298px)">
    	<h3 style="font-weight: bold">Chi tiết đơn hàng</h3>
    	<div class="d-flex">
    		<div class="d-flex" style="min-width: 250px">
    			<p>Tên dịch vụ:</p>
    			<p class="d-flex ml-2">Namsdasd</p>
    		</div>
    		<div class="d-flex ml-2" style="min-width: 250px">
    			<p>Giá tiền:</p>
    			<p class="d-flex ml-2">Namsdasd</p>
    		</div>
    	</div>
    	<div class="d-flex">
			<p>Địa chỉ:</p>
			<p class="d-flex ml-2">* hà văn tính</p>
		</div>
		<div class="d-flex">
    		<div class="d-flex" style="min-width: 250px">
    			<p>Tổng cộng:</p>
    			<p class="d-flex ml-2">100000</p>
    		</div>
    		<div class="d-flex ml-2" style="min-width: 250px">
    			<p>Giá tiền:</p>
    			<p class="d-flex ml-2">10000</p>
    		</div>
    	</div>
    	<div class="d-flex">
			<p>Trạng thái:</p>
			<p class="d-flex ml-2">ádasd</p>
	 	 </div>
    	<div class="d-flex">
    		<button style="max-width: 200px; padding: 10px; border-radius: 5px" data-toggle="modal" data-target="#exampleModal">Xác nhận xong</button>
    	</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="./jquery.star-rating-svg.js"></script>
    <script>
      $(".my-rating").starRating({
        starSize: 25,
        callback: function(currentRating, $el){
            // make a server call here
        }
      });
    </script>
    <script src="./index.js"></script>
</body>
</html>