@extends('customer.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}" />
@endpush

@section('content')
    <div class="container">
        <div class="account" style="display: flex;">
            <div class="images_acount" style="margin-right: -20px;">
                <img src="{{ url('storage/' . $partner[0]->avatar ) }}"
                    style="width: 200px; height: 200px; position: relative; left: -20px;" />
            </div>
            <div class="info" style="margin-top: 20px;">
                <div>
                    <span class="mr-2">Tên quán đối tác:</span>
                    <span class="mr-2">{{ $partner[0]->name }}</span>
                </div>
    
                <div>
                    <span class="mr-2">Địa chỉ:</span>
                    <span class="mr-2">{{  $partner[0]->address . ' ' . $partner[0]->province->name . ' ' . $partner[0]->district->name }}h</span>
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
                @forelse ($partner[0]->service as $item)
                    <div class="item-service d-flex">
                        <p id="{{ $item->id }}">{{ $item->name }}</p>
                        <i class="fas fa-plus-circle"></i>
                        <input type="hidden" value="{{ $item->price }}">
                    </div>
                @empty
                    <div class="item-service d-flex">
                      
                    </div>
                @endforelse
            </div>
            <!--  -->
            <div class="total bg-fourth p-2 flex-1 ml-lg-4 mt-lg-0 ml-0 mt-2"
                style="border: 2px solid #333; min-width: 400px; border-radius: 5px; background: #f4f9f9">
                {!! Form::open(['method'=>'post', 'route'=>['customer.detail.sendRequest' , $partner[0]->id]]) !!}
                    <div class="row pl-3">
                        <div class="px-2 mb-3">
                            <label class="m-0" for="account_name">Tên Tài Khoản: <span>{{ auth('customer')->user()->name }}</span></label>
                            <input type="hidden" class="form-control" name="customer_id" value="{{ auth('customer')->id() }}" id="account_name">
                            <input type="hidden" class="form-control" name="partner_id" value="{{ $partner[0]->id }}" id="account_name">
                        </div>
                    </div>
                    <div class="row pl-3">
                        <div class="px-2 col-sm-10 mb-3">
                            <label class="m-0" for="account_name">Địa chỉ:</label>
                            <input type="text" class="form-control" name="address" value="" id="account_name" placeholder="Enter">
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
                            <p class="ml-auto" id="price">0</p>
                            <input type="hidden" name="total" value="" id="total">
                        </div>
                        @error('service_name')
                        <p class="col-md-12 error text-danger">{{ $message }}</p><br>
                        @enderror
                        @error('address')
                        <p class="col-md-12 error text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" id="submit-service" style="border-radius: 5px; margin: 0">Đặt đơn</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/index.js') }}"></script>
@endpush
