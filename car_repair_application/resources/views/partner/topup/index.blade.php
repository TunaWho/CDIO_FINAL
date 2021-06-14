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
                        {!! Form::open(['method'=>'post', 'route'=>['partner.topup']]) !!}
                            <div class="row">
                                <div class="col-md-12">
                                    <label>SỐ DƯ TÀI KHOẢN:</label>
                                    {!! Form::text('acccount_balance', auth('partner')->user()->partner->account_balance ?? 0, ['class'=>'form-control', 'readonly' => true]) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>SỐ TÀI KHOẢN:</label>
                                        <input type="text" class="form-control" value="{{ $admin->admin->account_number }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">TÊN TÀI KHOẢN ADMIN:</label>
                                        <input type="email" class="form-control" value="{{ $admin->admin->name }}" disabled>
                                        {!! Form::hidden('admin_id', $admin->id, ['class'=>'form-control', 'readonly' => true]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>TÊN NGÂN HÀNG GIAO DỊCH:</label>
                                        <input type="text" class="form-control" placeholder="Bank name" value="Ngân hàng Vietcombank" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Số tiền nạp:</label>
                                        <input type="text" class="form-control" name="amounts"
                                            value="">
                                        {!! Form::hidden('partner_id', auth('partner')->user()->partner->id, ['class'=>'form-control', 'readonly' => true]) !!}
                                        @error('amounts')
                                        <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>GHI CHÚ:</label>
                                        <textarea rows="5" class="form-control" name="note"
                                            placeholder="Here can be your description" value=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Gửi yêu
                                cầu</button>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
