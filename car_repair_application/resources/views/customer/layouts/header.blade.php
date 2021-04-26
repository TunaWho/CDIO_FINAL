<div class="header d-flex align-items-center justify-content-between p-2">
    <a href="#default" class="logo">SỬA XE 24H</a>
    <div class="header-right">
        <img id="menu-icon" src="./images/menu.svg" />
        <a class="active" href="#home">Trang chủ</a>
        <a href="#contact">Giới thiệu</a>
        <a href="#about">Tin tức</a>
        <a href="#about">Liên hệ</a>
        <a href="/user-update.html">Tài khoản</a>
        <a href="/sign-up.html">Đăng nhập</a>
        <a href="/sign-in.html">Đăng ký</a>
        @auth('customer')
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>
</div>
