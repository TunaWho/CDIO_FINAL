@extends('customer.layouts.app')

@section('content')
<section class="mt-2 p-4" style="background: #fff; border-radius: 10px;">
    <div class="tab-menu" style="display: flex;">
      <div class="header-tab row align-items-center" style="margin-right: 40px; border-radius: 5px;">
        <div class="ml-3">
          <select name="districtId">
            <option value="-1">Chọn quận/ huyện</option>
            <option value="30">Quận Cẩm Lệ</option>
            <option value="31">Quận Hải Châu</option>
            <option value="32">Quận Liên Chiểu</option>
            <option value="33">Quận Ngũ Hành Sơn</option>
            <option value="34">Quận Sơn Trà</option>
            <option value="35">Quận Thanh Khê</option>
            <option value="158">Hòa Vang</option>
            <option value="159">Hoàng Sa</option>
          </select>
        </div>
      </div>
      <!--  -->
      <div class="header-tab row align-items-center" style="margin-right: 40px;">
        <div>
          <select name="districtId">
            <option value="-1">Chọn loại xe</option>
            <option value="30">Xe máy</option>
            <option value="31">Xe tải</option>
            <option value="32">Xe con</option>
            <option value="33">Xe khách</option>
            <option value="34">Xe chuyên dùng</option>
          </select>
        </div>
      </div>
      <!--  -->
      <div class="header-tab row align-items-center" style="margin-right: 40px;">
        <div>
          <select name="districtId">
            <option value="-1">Chọn dịch vụ</option>
            <option value="30">Thay lốp</option>
            <option value="31">Vá xe</option>
            <option value="32">Thay nhớt</option>
            <option value="33">Thay bình điện</option>
            <option value="34">Khác</option>
          </select>
        </div>
      </div>

      <div class="input-group mb-3" style="height: 40px;">
        <input style="max-width: 300px;" type="text" class="form-control h-100 ml-auto" placeholder="Tìm địa điểm, địa chỉ quán ..." aria-label="Recipient's username" aria-describedby="basic-addon2" />
        <div class="input-group-append h-100" style="margin: 5px 0 22px 0;">
          <button class="btn btn-outline-secondary m-0 border-0 bg-third color-fourth" type="button"><i class="fab fa-searchengin"></i></button>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <div class="container">
    <div class="title-wrapper" style="margin-left: auto;">
      <h2 class="title" >Tiệm sửa xe</h2>
      <a class="view-all-deal">
        <span class="icon-list-deal"><span class="square"></span><span class="square"></span><span class="square"></span><span class="square"></span></span>Xem tất cả
      </a>
    </div>
    <!--  -->
    <div class="list">
      <div class="load flex-wrap" style="display: flex;">
        <div class="item">
          <a class="item-content" href="/detail.html" style="color: #000; text-decoration: none">
            <div class="image-content">
              <img src="./images/7.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Đông Á Motor</h4>
                <div class="address">25 Hà Văn Tính, P. Hòa Khánh, Quận Liên Chiểu, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/6.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Tri Racing Shop</h4>
                <div class="address">14 An Nhơn 9, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/3.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Thành Đạt Motor</h4>
                <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/7.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Đông Á Motor</h4>
                <div class="address">25 Hà Văn Tính, P. Hòa Khánh, Quận Liên Chiểu, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/6.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Tri Racing Shop</h4>
                <div class="address">14 An Nhơn 9, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/3.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Thành Đạt Motor</h4>
                <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/1.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Đông Á Motor</h4>
                <div class="address">25 Hà Văn Tính, P. Hòa Khánh, Quận Liên Chiểu, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/2.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Quán Đức Vương Motor</h4>
                <div class="address">14 An Nhơn 9, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a class="item-content">
            <div class="image-content">
              <img src="./images/3.jpg" />
            </div>
            <div class="info">
              <div class="basic">
                <h4 class="name-res">Thành Đạt Motor</h4>
                <div class="address">84 An Nhơn 6, P. Mỹ An, Quận Sơn Trà, Đà Nẵng</div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="btn-next">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
@endsection
