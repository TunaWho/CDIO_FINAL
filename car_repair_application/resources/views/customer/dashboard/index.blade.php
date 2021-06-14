@extends('customer.layouts.app')

@section('content')
    <div class="col-sm-12" style="background: #fff;">
        <form id="search-form">
        <div class="tab-menu" style="display: flex;">
            <div class="header-tab row align-items-center col-sm-3" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select id="province-select" class="col-sm-12" name="province_id">
                        <option value="0">Tỉnh / Thành phố</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">
                                {{ str_replace('phố', '', strstr($province->name, ' ')) }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="header-tab row align-items-center col-sm-2" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select id="district-select" class="form-control" name="district_id">
                        <option value="0">Quận / Huyện</option>
                    </select>
                </div>
            </div>
            <!--  -->
            <div class="header-tab row align-items-center col-sm-2" style="margin-right: 0!important">
                <div class="col-sm-12">
                    {!! Form::select('type_car', App\Enums\CarType::asSelectArray(), null, ['class'=>'col-sm-12']) !!}
                </div>
            </div>
            <!--  -->
            <div class="header-tab row align-items-center col-sm-2" style="margin-right: 0!important">
                <div class="col-sm-12">
                    <select class="col-sm-12" name="service_id">
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
                    placeholder="Tìm địa điểm..." aria-label="Recipient's username" name="address" />
                <div class="input-group-append h-100" style="margin: 5px 0 22px 0;">
                    <button class="btn btn-outline-secondary m-0 border-0 bg-third color-fourth" type="button"><i
                            class="fab fa-searchengin"></i></button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!--  -->
    <div id="result">
        @include('customer.dashboard.list')
    </div>
@endsection

@push('scripts')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
    <script type="text/javascript">
        var url = "{{ route('customer.get_district') }}";

        $(".color-fourth").click(function (e) { 
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "{{ route('customer.search') }}",
                data: $("#search-form").serialize(),
                success: function (response) {
                    $("#result").html(response);
                }
            });
        });
    </script>
    <script src='{{ asset('assets/js/location.js') }}'></script>
@endpush
