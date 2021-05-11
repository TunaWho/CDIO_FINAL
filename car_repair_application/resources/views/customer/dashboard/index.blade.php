@extends('customer.layouts.app')

@section('content')
    <div class="col-sm-12" style="background: #fff;">
        <div class="tab-menu" style="display: flex;">
            <div class="header-tab row align-items-center col-sm-3" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select id="province-select" class="col-sm-12" name="calc_shipping_provinces">
                        <option value="">Tỉnh / Thành phố</option>
                    </select>
                    <input class="billing_address_1" name="" type="hidden" value="">
                </div>
            </div>

            <div class="header-tab row align-items-center col-sm-2" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select id="province-select" class="col-sm-12" name="calc_shipping_district">
                        <option value="">Quận / Huyện</option>
                    </select>
                    <input class="billing_address_2" name="" type="hidden" value="">
                </div>
            </div>
            <!--  -->
            <div class="header-tab row align-items-center col-sm-2" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select class="col-sm-12" name="districtId">
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
            <div class="header-tab row align-items-center col-sm-2" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select class="col-sm-12" name="districtId">
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
                <input style="max-width: 300px;" type="text" class="form-control h-100 ml-auto"
                    placeholder="Tìm địa điểm..." aria-label="Recipient's username" aria-describedby="basic-addon2" />
                <div class="input-group-append h-100" style="margin: 5px 0 22px 0;">
                    <button class="btn btn-outline-secondary m-0 border-0 bg-third color-fourth" type="button"><i
                            class="fab fa-searchengin"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container">
        <div class="title-wrapper" style="margin-left: auto;">
            <h2 class="title">Tiệm sửa xe</h2>
            <a class="view-all-deal">
                <span class="icon-list-deal"><span class="square"></span><span class="square"></span><span
                        class="square"></span><span class="square"></span></span>Xem tất cả
            </a>
        </div>
        <!--  -->
        <div class="list">
            <div class="load flex-wrap" style="display: flex;">
                @foreach ($listPartners as $listPartner)
                    <div class="item">
                        <a class="item-content" href="{{ route('customer.detail') }}"
                            style="color: #000; text-decoration: none">
                            <div class="image-content">
                                <img src="{{ asset('assets/images/' . $listPartner->avatar) }}" />
                            </div>
                            <div class="info">
                                <div class="basic">
                                    <h4 class="name-res">{{ $listPartner->name }}</h4>
                                    <div class="address">{{ $listPartner->address }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
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
@endsection

@push('scripts')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
    <script src='{{ asset('assets/js/location.js') }}'></script>
@endpush
