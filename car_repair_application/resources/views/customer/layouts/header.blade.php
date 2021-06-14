<div class="header d-flex align-items-center justify-content-between" style="padding: 0px 2.6rem;">
    <a href="#default" class="logo">SỬA XE 24H</a>
    <div class="header-right d-flex">
        <img id="menu-icon" src="./images/menu.svg">
        <a href="{{ route('customer.dashboard') }}">Trang chủ</a>
        <a href="#contact">Giới thiệu</a>
        <a href="#about">Tin tức</a>
        <a href="#about">Liên hệ</a>
        @guest('customer')
        <a href="{{ route('customer.login') }}">Đăng nhập</a>
        @endguest
        @auth('customer')
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">{{ auth()->guard('customer')->user()->name }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" style="color: #212529!important;">Trạng thái</a>
                    <a class="dropdown-item" href="/user-update.html" style="color: #212529!important;">Thông tin</a>
                    <a class="dropdown-item" href="#" style="color: #212529!important;">Cài đặt</a>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #212529!important;">Logout</a>
                    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endauth
    </div>
</div>
