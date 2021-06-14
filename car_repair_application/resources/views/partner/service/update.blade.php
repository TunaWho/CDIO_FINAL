@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/manager.css') }}" />
@endpush
@section('title', 'Sửa dịch vụ')
@section('content')
    <div class="container">
        {!! Form::open(['method'=>'PATCH', 'route'=>['partner.services.update', $serviceById->id]]) !!}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label><b>Loai xe:</b></label>
                    {!! Form::select('type_car', App\Enums\CarType::asSelectArray(), $serviceById->type_car ?? null, ['class'=>'form-control']) !!}
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
                    {!! Form::text('name', $serviceById->name ?? '', ['class'=>'form-control', 'placeholder' => 'Name service']) !!}
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
                    {!! Form::text('price', $serviceById->price ?? '', ['class'=>'form-control', 'placeholder' => 'Price']) !!}
                    @error('price')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        {!! Form::submit('Cập Nhật', ['class' => 'btn btn-info btn-fill pull-right']) !!}
        <div class="clearfix" style="margin-bottom: 2rem;"></div>
        {!! Form::close() !!}
        @include('partner.service.list')
    </div>
@endsection
