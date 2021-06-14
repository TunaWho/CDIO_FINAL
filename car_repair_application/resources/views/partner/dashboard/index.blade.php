@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/accept.css') }}" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endpush

@section('content')
    <form method="POST" action="">
        <div class="col-md-12 bg-info">
            <div class="form-group" style="padding-top: 1.5rem">
                <label>Activity: </label>
                <input id='getStatus' type="checkbox" data-size="md" checked data-toggle="toggle" name="status" data-onstyle="info">
            </div>
        </div>
    </form>
    <table id="customers">
        <thead>
            <tr>
                <th>Mã dịch vụ</th>
                <th>Tên dịch vụ</th>
                <th>Địa điểm</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lists as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->service_name }}</td>
                <td>{{ $service->address }}</td>
                <td>{{ $service->customer->name }}</td>
                <td>{{ number_format($service->total) }}</td>
                <td>
                    {!! Form::open(['method'=>'post', 'route'=>['partner.accept.request', 'accept' => $service->id]]) !!}
                    {!! Form::button('Nhận đơn', ['type' => 'submit', 'class' => 'btn btn-custom clearfix', 'style' => 'padding: 10px;']) !!}
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
          $(function() {
            $('#getStatus').change(function() {
                if($(this).prop('checked') !== true){
                    $('#customers tbody').hide();
                } else {
                    $('#customers tbody').show();
                }
            });
        });
    </script>
@endpush