@extends('customer.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}" />
@endpush

@section('content')
    <div class="container">
        <div class="account" style="display: flex;">
            <div class="images_acount" style="margin-right: -20px;">
                <img src="{{ asset('assets/images/account.png') }}"
                    style="width: 200px; height: 200px; position: relative; left: -20px;" />
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
    
                <span class="images_acount-icon active mt-4 d-block position-relative" style="width: 100%; left: -5px">
                    <img src="{{ asset('assets/images/star.svg') }}" />
                    <img src="{{ asset('assets/images/star.svg') }}" />
                    <img src="{{ asset('assets/images/star.svg') }}" />
                    <img src="{{ asset('assets/images/star.svg') }}" />
                    <img src="{{ asset('assets/images/star.svg') }}" />
                </span>
            </div>
        </div>
        <!--  -->
        <div class="d-flex justify-content-between flex-wrap">
            <div class="service d-flex flex-column justify-content-between p-2 bg-fourth"
                style="border: 2px solid #333; min-width: 400px; max-height: 300px; border-radius: 5px; background: #f4f9f9">
                <div class="item-service d-flex">
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
                <div class="item-service" id="item-service-other">
                    <p>Ghi chú</p>
                    <i class="fas fa-plus-circle"></i>
                </div>
            </div>
            <!--  -->
            <div class="total bg-fourth p-2 flex-1 ml-lg-4 mt-lg-0 ml-0 mt-2"
                style="border: 2px solid #333; min-width: 400px; border-radius: 5px; background: #f4f9f9">
                <form>
                    <div>
                        <div class="px-2 mb-3">
                            <label class="m-0" for="account_name">Tên Tài Khoản:</label>
                            <input type="text" class="form-control" name="name" value="Boy9x" id="account_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 services-selected">
                            <label>Dịch vụ:</label>
                        </div>
                    </div>
                    <div class="mb-5 mt-2">
                        <div class="d-flex w-100 px-2">
                            <input class="other-sevice-input form-control mr-4" placeholder="Type new service">
                            <img src="{{ asset('assets/images/plus.svg') }}" alt="" id="add-service-btn" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <b class="d-block">Tổng tiền</b>
                            <p class="ml-auto">10000</p>
                        </div>
                    </div>
                    <button type="submit" id="submit-service" style="border-radius: 5px; margin: 0">Đặt đơn</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="./index.js"></script>
@endpush
