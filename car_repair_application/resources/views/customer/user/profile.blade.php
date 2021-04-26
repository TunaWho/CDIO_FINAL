@extends('customer.layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/update-user.css') }}">
@endpush

@section('content')
	<div class="d-flex container">
    	<div class="mr-4 p-2 bg-fourth" style="border: 2px solid #222; border-radius: 5px; max-height: 200px; min-width: 200px">
    		<div class="d-flex align-items-center mb-2">
    			<img src="./images/account.png" style="width: 50px;height: 50px;">
    			<p class="mb-0 ml-2">Tên tài khoản</p>
    		</div>
    		<p>Cập nhật tài khoản</p>
    		<p>Lịch sử dịch vụ</p>
    	</div>
    	<div class="bg-fourth" style="border: 2px solid #222; border-radius: 5px; flex: 1">
    		<div class="p-2" style="border-bottom: 2px solid #333;">
    			<h3 class="mb-0">Thông tin người dùng</h3>
    		</div>
    		<div class="p-2 d-flex">
    			<div>
	    			<p class="mb-0">Tải ảnh đại diện</p>
	    			<img src="./images/account.png" style="width: 50px;height: 50px;">
    			</div>
    			<div class="ml-auto">
	    			<button style="width: 150px; height: 40px; border-radius: 5px; line-height: 40px; padding:0;">Chọn</button>
	    			<button style="width: 150px; height: 40px; border-radius: 5px; line-height: 40px; padding:0;">Cập nhật</button>
    			</div>
    		</div>
    		<hr style="width: calc(100% - 2rem); border: 1px solid #333;background: #333;">
    		<div class="p-2">
    			<h3>Thay đổi thông tin</h3>
    			<div class="info-action">
    				<label>Tên</label>
    				<input type="" name="">
    			</div>
    			<div class="info-action">
    				<label>Số điện thoại</label>
    				<input type="" name="">
    			</div>
    			<div class="info-action">
    				<label>Mật khẩu cũ</label>
    				<input type="" name="">
    			</div>
    			<div class="info-action">
    				<label>Mật khẩu mới</label>
    				<input type="" name="">
    			</div>
    			<div class="info-action">
    				<label>Nhập lại mật khẩu</label>
    				<input type="" name="">
    			</div>
    			<button style="width: 200px; border-radius: 5px; height: 40px; padding: 0; line-height: 40px;">Lưu thay đổi</button>
    		</div>
    	</div>
    </div>
@endsection
