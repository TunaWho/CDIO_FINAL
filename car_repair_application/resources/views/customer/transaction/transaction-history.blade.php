@extends('customer.layouts.app')

@section('content')
	<div class="container" style="min-height: calc(100vh - 298px)">
      <h3>Lịch sử giao dịch</h3>
      <div class="d-flex justify-content-between transaction-filter">
        <div class="d-flex align-items-center mb-2">
          <p class="mr-2" style="white-space: nowrap">Trạng thái</p>
          <div class="tab-menu" style="display: flex;">
            <div class="header-tab row align-items-center" style="margin-right: 40px; border-radius: 5px;">
              <div class="ml-3">
                <select name="districtId">
                  <option value="-1">All</option>
                  <option value="159">Chưa hoàn thành</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2" >
          <p class="mr-2" style="white-space: nowrap">Từ ngày</p>
          <input type="text" id="datepicker">
        </div>
        <div  class="d-flex align-items-center justify-content-between mb-2">
          <p class="mr-2" style="white-space: nowrap">Đến ngày</p>
          <input type="text" id="datepicker2">
        </div>
        <button style="width: 150px; height: 40px; border-radius: 5px; line-height: 40px; padding:0;">Tìm kiếm</button>
      </div>
      <div class="transaction-table">
        <table id="customers">
          <tr>
            <th>STT</th>
            <th>Mã dịch vụ</th>
            <th>Thời gian</th>
            <th>Địa điểm</th>
            <th>Tên đối tác</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
          </tr>
          <tr>
            <td>1</td>
            <td>ST01</td>
            <td>1/1/2021</td>
            <td>25 Hùng Vương</td>
            <td>Hải</td>
            <td>20000</td>
            <td>Đã hoàn thành</td>
          </tr>
        </table>
      </div>
    </div>
 @endsection

  @push('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
       $( "#datepicker2" ).datepicker();
    } );
  </script>
  @endpush