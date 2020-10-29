<!-- HEADER -->
<div class="bg-nav-menu" id="bg-nav-menu"></div>
<header>
    <div class="header is-mobile">
        <div class="inner">
            <div class="nav">
                <div class="nav-toggle" id="nav-toggle">
                    <img src="{{asset('source/icon_mobile/menu.png')}}" alt="menu">
                </div>
                <div>
                    <a href="{{route('home')}}" class="nav-logo">
                        <img src="{{asset('source/icon_mobile/logo.svg')}}" alt="logo">
                    </a>
                </div>
                <div>
                    <img src="{{asset('source/icon_mobile/search.svg')}}" alt="search">
                </div>
            </div>
               
        </div>
    </div>

    <div class="nav-menu" id="nav-menu">
        <div class="headerImage">
            <a href="{{route('home')}}">
                <img src="{{asset('source/image/logo-header.svg')}}" alt="#"/>
            </a>
        </div>
        <div class="nav-user">
            <a href="#">Đăng kí</a>
            <a href="{{route('pre_login')}}">Đăng nhập</a>
        </div>
        <ul class="nav-list-mobile">
            <li class="nav-item" id="item-first">
                Dịch vụ di động
                <img src="{{asset('source/icon_mobile/arrow_right_gray.png')}}" class="nav-item-toggle" alt="arrow">
            </li>            
            <ul class="nav-item-menu" id="item-menu-first">
                <div class="back" id="icon-back-first">
                    <img src="{{asset('source/icon_mobile/arrow_left.png')}}" alt="arrow">
                    Quay lại
                </div>
                <li class="title">Dịch vụ di động</li>
                <li><a href="{{route('pack_of_charge')}}">Gói cước</a></li>
                <li><a href="{{route('pack_of_data')}}">Gói data</a></li>
                <li><a href="{{route('pack_of_service')}}">Dịch vụ</a></li>
            </ul>
            <li class="nav-item" id="item-second">
                Hỗ trợ khách hàng
                <img src="{{asset('source/icon_mobile/arrow_right_gray.png')}}" alt="arrow">
            </li>
            <ul class="nav-item-menu" id="item-menu-second">
                <div class="back" id="icon-back-second">
                    <img src="{{asset('source/icon_mobile/arrow_left.png')}}" alt="arrow">
                    Quay lại
                </div>
                <li class="title">Hỗ trợ khách hàng</li>
                <li><a href="{{route('customer_reflect')}}">Gửi phản ánh</a></li>
                <li><a href="#">Chat online</a></li>
                <li><a href="{{route('customer_question')}}">Câu hỏi thường gặp</a></li>
                <li><a href="#">Chọn số Mobifone</a></li>
                <li><a href="#">Chuyển mạng giữ số</a></li>
            </ul>
            <li class="nav-item" id="item-third">
                Tin tức
                <img src="{{asset('source/icon_mobile/arrow_right_gray.png')}}" alt="arrow">
            </li>
            <ul class="nav-item-menu" id="item-menu-third">
                <div class="back" id="icon-back-third">
                    <img src="{{asset('source/icon_mobile/arrow_left.png')}}" alt="arrow">
                    Quay lại
                </div>
                <li class="title">Tin tức</li>
                <li><a href="{route('news')}">Khuyến mại cho bạn</a></li>
                <li><a href="{route('news')}">Chương trình khuyến mại</a></li>
                <li><a href="{route('news')}">Tin tức sự kiện</a></li>
                <li><a href="{route('news')}">Thông cáo báo chí</a></li>
            </ul>
            <li class="nav-item">
                Tuyển dụng
                <img src="{{asset('source/icon_mobile/arrow_right_gray.png')}}" alt="arrow">
            </li>
            <li class="nav-item has-border" id="item-fourth">
                My Mobifone
                <img src="{{asset('source/icon_mobile/arrow_right_gray.png')}}" alt="arrow">
            </li>
            <ul class="nav-item-menu" id="item-menu-fourth">
                <div class="back" id="icon-back-fourth">
                    <img src="{{asset('source/icon_mobile/arrow_left.png')}}" alt="arrow">
                    Quay lại
                </div>
                <li class="title">My Mobifone</li>
                <div class="m-dropdown-item">
                    <div class="m-dropdown-title">
                        <span><img src="{{asset('source/icon_mobile/icon_person.png')}}"></span>
                        Tài khoản
                    </div>
                    <ul>
                        <li><a href="{{route('prepaid_info')}}">Thông tin tài khoản</a></li>
                        <li><a href="{{route('user_information')}}">Thông tin cá nhân</a></li>
                        <li><a href="{{route('user_update')}}">Cập nhật thông tin cá nhân</a></li>
                    </ul>
                </div>
                <div class="m-dropdown-item">
                    <div class="m-dropdown-title">
                        <span><img src="{{asset('source/icon_mobile/icon_connect.png')}}"></span>
                        Kết nối
                    </div>
                    <ul>
                        <li><a href="{{route('user_information')}}">Thông tin hội viên</a></li>
                        <li><a href="{{route('change_point')}}">Đổi điểm</a></li>
                        <li><a href="{{route('change_point')}}">Danh sách ưu đãi</a></li>
                    </ul>
                </div>
                <div class="m-dropdown-item">
                    <div class="m-dropdown-title">
                        <span><img src="{{asset('source/icon_mobile/icon_heart.png')}}"></span>
                        Tiện ích
                    </div>
                    <ul>
                        <li><a href="{{route('utilities_index')}}">Nạp tiền</a></li>
                        <li><a href="{{route('utilities_index')}}">Chuyển tiền</a></li>
                        <li><a href="{{route('utilities_index')}}">Thanh toán ngân hàng</a></li>
                        <li><a href="{{route('utilities_index')}}">Autopay</a></li>
                    </ul>
                </div>
                <div class="m-dropdown-item">
                    <div class="m-dropdown-title">
                        <span><img src="{{asset('source/icon_mobile/icon_video.png')}}"></span>
                        Cước
                    </div>
                    <ul>
                        <li><a href="{{route('user_check')}}">Tra cước</a></li>
                        <li><a href="{{route('user_check')}}">Lịch sử nạp tiền/thanh toán</a></li>
                    </ul>
                </div>
            </ul>
            <li class="nav-item has-border"><a href="#">Cá nhân</a></li>
            <li class="nav-item has-border"><a href="#">Ngôn ngữ</a></li>
        </ul>
    </div>

    <div class="header is-desktop">
        <div class="inner">
            <div class="headerImage">
                <a href="{{route('home')}}">
                    <img src="{{asset('source/image/logo-header.svg')}}" alt="#"/>
                </a>
            </div>
            <div class="header-items">
                <div class="dropdown header-item">
                  <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cá nhân
                  </div>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="header-item"><a href="{{route('pre_login')}}">Đăng nhập/Đăng ký</a></div>
                <div class="header-item flag">
                    <img src="{{asset('source/icons/icon-flag.svg')}}" class="icon" />
                </div>
                <form>
                    <div class="search-box">
                        <input type="text" name="search" class="inputSearch font-italic" placeholder="Search" >
                        <span><img src="https://img.icons8.com/ios/50/000000/search--v1.png" class="searchIcon"/></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="header-menu is-desktop">  
        <div class="inner">
        <div class="nav-toggle" id="nav-toggle-tablet">
            <img src="{{asset('source/icon_mobile/menu.png')}}" alt="menu">
        </div>
        <ul class="nav-list">   
            <li class="nav-list-li">
                <div class="nav-item">Dịch vụ di động</div>
                <ul class="m-dropdown mobile-service-dropdown">
                    <li><a href="{{route('pack_of_charge')}}">Gói cước</a></li>
                    <li><a href="{{route('pack_of_data')}}">Gói data</a></li>
                    <li><a href="{{route('pack_of_service')}}">Dịch vụ</a></li>
                </ul>
            </li>
            <li class="nav-list-li">
                <div class="nav-item">Hỗ trợ khách hàng</div>
                <ul class="m-dropdown customer-support-dropdown">
                    <li><a href="{{route('customer_reflect')}}">Gửi phản ánh</a></li>
                    <li><a href="{{route('customer_question')}}">Chat online</a></li>
                    <li><a href="{{route('customer_question')}}">Câu hỏi thường gặp</a></li>
                    <li><a href="{{route('customer_location')}}">Chọn số Mobifone</a></li>
                    <li><a href="{{route('customer_location')}}">Chuyển mạng giữ số</a></li>
                </ul>
            </li>
            <li class="nav-list-li">
                <div class="nav-item">Tin tức</div>
                <ul class="m-dropdown news-dropdown">
                    <li><a href="{{route('news')}}">Khuyến mại cho bạn</a></li>
                    <li><a href="{{route('news')}}">Chương trình khuyến mại</a></li>
                    <li><a href="{{route('news')}}">Tin tức sự kiện</a></li>
                    <li><a href="{{route('news')}}">Thông cáo báo chí</a></li>
                </ul>
            </li>
            <li><div class="nav-item">Tuyển dụng</div></li>
            <li class="nav-list-li">
                <div class="nav-item">My Mobifone</div>
                <div class="m-dropdown mobifone-dropdown">
                    <div class="m-dropdown-item">
                        <div class="m-dropdown-title">
                            <span><img src="{{asset('source/icon_mobile/icon_person.png')}}"></span>
                            Tài khoản
                        </div>
                        <ul>
                            <li><a href="{{route('prepaid_info')}}">Thông tin tài khoản</a></li>
                            <li><a href="{{route('user_information')}}">Thông tin cá nhân</a></li>
                            <li><a href="{{route('user_information')}}">Cập nhật thông tin cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="m-dropdown-item">
                        <div class="m-dropdown-title">
                            <span><img src="{{asset('source/icon_mobile/icon_heart.png')}}"></span>
                            Tiện ích
                        </div>
                        <ul>
                            <li><a href="{{route('utilities_index')}}">Nạp tiền</a></li>
                            <li><a href="{{route('utilities_index')}}">Chuyển tiền</a></li>
                            <li><a href="{{route('utilities_index')}}">Thanh toán ngân hàng</a></li>
                            <li><a href="{{route('utilities_index')}}">Autopay</a></li>
                        </ul>
                    </div>
                    <div class="m-dropdown-item">
                        <div class="m-dropdown-title">
                            <span><img src="{{asset('source/icon_mobile/icon_connect.png')}}"></span>
                            Kết nối dài lâu
                        </div>
                        <ul>
                            <li><a href="{{route('user_check')}}">Thông tin hội viên</a></li>
                            <li><a href="{{route('user_check')}}">Đổi điểm</a></li>
                            <li><a href="{{route('user_check')}}">Danh sách ưu đãi</a></li>
                        </ul>
                    </div>
                    <div class="m-dropdown-item">
                        <div class="m-dropdown-title">
                            <span><img src="{{asset('source/icon_mobile/icon_video.png')}}"></span>
                            Cước
                        </div>
                        <ul>
                            <li><a href="{{route('user_check')}}">Tra cước</a></li>
                            <li><a href="{{route('user_check')}}">Lịch sử nạp tiền/thanh toán</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <div class="search-icon">
            <img src="{{asset('source/icon_mobile/search.png')}}" alt="search">
        </div>
    </div>   
    </div>   
</header>