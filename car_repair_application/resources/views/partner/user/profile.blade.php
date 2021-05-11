@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/user.css') }}" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title"></h4>
                    </div>
                    <div class="content">
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tên đối tác:</label>
                                    <input type="text" class="form-control" placeholder="Full name"
                                        value="Dương Văn Dũng">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email đăng nhập</label>
                                        <input type="email" class="form-control" placeholder="Email"
                                            value="dung@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Choose</label>
                                        <select id="province-select" class="form-control" name="province_id">
                                            <option value="0">Tỉnh / Thành phố</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ str_replace('phố', '', strstr($province->name, ' ')) }}</option>
                                            @endforeach
                                        </select>
                                          <input class="billing_address_1" name="" type="hidden" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Choose</label>
                                        <select id="district-select" class="form-control" name="district_id">
                                            <option value="0">Quận / Huyện</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="form-control" placeholder="Tên đường, Tòa nhà...">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Số dư tài khoản</label>
                                        <input type="text" class="form-control" placeholder="Account balance"
                                            value="3,000,000 VND" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Số tài khoản </label>
                                        <input type="text" class="form-control" placeholder="Account number"
                                            value="12345678****" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Giới thiệu</label>
                                        <textarea rows="5" class="form-control"
                                            placeholder="Here can be your description"
                                            value="Dũng">Luôn làm việc với phương châm :"Uy tín làm nên chất lượng".</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                            alt="..." />
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ asset('assets/images/image64.jpg') }}" alt="..." />

                                <h4 class="title">Dương Văn Dũng<br />
                                    <small>dung0301</small>
                                </h4>
                            </a>
                        </div>
                        <p class="description text-center"> "Uy tín làm nên chất lượng" <br>
                        <p class="description text-center"> Điểm đánh giá: 4,5<i class="fa fa-star"></i>
                            <br>
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button onclick="window.location.href='https://www.facebook.com/dung030199/'"
                            class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button onclick="window.location.href='https://twitter.com/'" class="btn btn-simple"><i
                                class="fa fa-twitter"></i></button>
                        <button onclick="window.location.href='https://www.google.com/'" class="btn btn-simple"><i
                                class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script type="text/javascript">
        var url = "{{ route('partner.get_district') }}";
    </script>
    <script src='{{ asset('assets/js/location.js') }}'></script>

@endpush
