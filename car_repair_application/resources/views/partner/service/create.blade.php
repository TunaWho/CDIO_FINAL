@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/manager.css') }}" />
@endpush
@section('title', 'Thêm dịch vụ')
@section('content')
    <div class="container">
        {!! Form::open(['method'=>'post', 'route'=>['partner.services.store']]) !!}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label><b>Loai xe:</b></label>
                    {!! Form::select('type_car', App\Enums\CarType::asSelectArray(), null, ['class'=>'form-control']) !!}
                    @error('type_car')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label><b>Dịch vụ:</b></label>
                    {!! Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'Name service']) !!}
                    @error('name')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label><b>Giá tiền:</b></label>
                    {!! Form::text('price', '', ['class'=>'form-control', 'placeholder' => 'Price']) !!}
                    @error('price')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        {!! Form::submit('Thêm', ['class' => 'btn btn-info btn-fill pull-right']) !!}
        <div class="clearfix" style="margin-bottom: 2rem;"></div>
        {!! Form::close() !!}
        @include('partner.service.list')
    </div>
@endsection
