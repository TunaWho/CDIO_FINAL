@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/user.css') }}" />
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title"></h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>SỐ DƯ TÀI KHOẢN:</label>
                                    <input type="text" class="form-control" placeholder="Balance" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>SỐ TÀI KHOẢN:</label>
                                        <input type="text" class="form-control" placeholder="Accout number"
                                            value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">TÊN TÀI KHOẢN ADMIN:</label>
                                        <input type="email" class="form-control" placeholder="Admin name"
                                            value="DUONG VAN DUNG">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>TÊN NGÂN HÀNG GIAO DỊCH:</label>
                                        <input type="text" class="form-control" placeholder="Bank name"
                                            value="Ngân hàng Vietcombank">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>GHI CHÚ:</label>
                                        <textarea rows="5" class="form-control"
                                            placeholder="Here can be your description" value=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Gửi yêu
                                cầu</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
