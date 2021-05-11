@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/manager.css') }}" />
@endpush

@section('content')
    <div class="container">
        {!! Form::open(['class' => 'register-form', 'id' => 'login-form', 'method' => 'POST', 'route' => ['customer.login']]) !!}
            <label for="email"><b>Loại xe:</b></label>
            <input type="text" placeholder="Nhập loại xe" required>

            <label for="email"><b>Dịch vụ:</b></label>
            <input type="text" placeholder="Nhập dịch vụ" required>

            <label for="email"><b>Giá tiền:</b></label>
            <input type="text" placeholder="Nhập giá tiền" required>
            <div class="clearfix">
                <button type="submit" onclick="window.location.href='/'" class="cancelbtn">Thêm</button>
            </div>
        {!! Form::close() !!}
        <div>
            <table id="customers">
                <tr>
                    <th>STT</th>
                    <th>Loại xe</th>
                    <th>Tên dịch vụ</th>
                    <th>Giá tiền</th>
                    <th>Quản lý</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Sirius</td>
                    <td>Thay xích</td>
                    <td>150000</td>
                    <td>
                        <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                            class="cancelbtn">Xóa</button>
                        <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                            class="cancelbtn">Sửa</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Yamaha</td>
                    <td>Vá xe</td>
                    <td>20000</td>
                    <td>
                        <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                            class="cancelbtn">Xóa</button>
                        <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                            class="cancelbtn">Sửa</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Winner</td>
                    <td>Thay nhớt</td>
                    <td>100000</td>
                    <td>
                        <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                            class="cancelbtn">Xóa</button>
                        <button class="clearfix" style="padding: 10px" type="button" onclick="window.location.href='/'"
                            class="cancelbtn">Sửa</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
