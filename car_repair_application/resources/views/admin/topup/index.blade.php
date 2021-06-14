@extends('partner.layouts.app_2')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/accept.css') }}" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endpush

@section('content')
    <table id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên tài khoản</th>
                <th>Số tiền yêu cầu</th>
                <th>Ghi chú</th>
                <th>Quản lý</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lists as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->partner->name }}</td>
                <td>{{ number_format($service->amounts) }}</td>
                <td>{{ $service->note ?? '' }}</td>
                <td>
                    {!! Form::open(['method'=>'delete', 'route'=>['admin.accept.topup', 'admin' => $service->id]]) !!}
                    {!! Form::button('Nạp tiền', ['type' => 'submit', 'class' => 'btn btn-custom clearfix', 'style' => 'padding: 10px;']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">{{ __('messages.no_record') }}</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection