@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/service.css') }}" />
@endpush

@section('content')
<div class="container" style="min-height: calc(100vh - 298px)">
    <h3 style="font-weight: bold">Chi tiết đơn hàng</h3>
    <div class="d-flex">
        <div class="d-flex" style="min-width: 250px">
            <p>Tên dịch vụ: Vá xe </p>
        </div>
        <div class="d-flex ml-2" style="min-width: 250px">
            <p>Giá tiền: 20000</p>
        </div>
    </div>
    <div class="d-flex">
        <p>Địa chỉ: 25 Hùng Vương</p>
    </div>
    <div class="d-flex">
        <div class="d-flex" style="min-width: 250px">
            <p>Tổng cộng: 20000</p>
        </div>
    </div>
    <div class="d-flex">
        <p>Trạng thái: Đang xử lý</p>
    </div>
    <div class="d-flex">
        <button style="max-width: 200px; padding: 10px; border-radius: 5px">Hoàn thành</button>

    </div>
</div>
@endsection
