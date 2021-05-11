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
                <th>STT</th>
                <th>Mã dịch vụ</th>
                <th>Tên dịch vụ</th>
                <th>Địa điểm</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ST01</td>
                <td>Vá xe</td>
                <td>25 Hùng Vương</td>
                <td>Dũng</td>
                <td>20000</td>
                <td>
                    <button class="clearfix" style="padding: 20px" type="button"
                        onclick="window.location.href='service.html'" class="cancelbtn">Nhận đơn</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>ST01</td>
                <td>Vá xe</td>
                <td>25 Hùng Vương</td>
                <td>Dũng</td>
                <td>20000</td>
                <td>
                    <button class="clearfix" style="padding: 20px" type="button"
                        onclick="window.location.href='service.html'" class="cancelbtn">Nhận đơn</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>ST01</td>
                <td>Vá xe</td>
                <td>25 Hùng Vương</td>
                <td>Dũng</td>
                <td>20000</td>
                <td>
                    <button class="clearfix" style="padding: 20px" type="button"
                        onclick="window.location.href='service.html'" class="cancelbtn">Nhận đơn</button>
                </td>
            </tr>
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