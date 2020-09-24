<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @isset($title)
                {{ $title }}
            @endisset
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <!-- HEADER -->
            @include('common.header_mobile')

            <!-- MAIN -->
            <main class="l-main">
                <!-- START BANNER -->
                <div class="main-banner">
                    <div id="caroselBannerMobile" class="carousel slide is-mobile" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('source/icon_mobile/hero_image.png')}}" class="d-block w-100" alt="banner">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('source/icon_mobile/hero_image.png')}}" class="d-block w-100" alt="banner">
                            </div>
                        </div>                       
                        <a class="carousel-control-prev" href="#caroselBannerMobile" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#caroselBannerMobile" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div id="caroselBannerDesktop" class="carousel slide is-desktop" data-ride="carousel">   
                        <ol class="carousel-indicators">
                            <li data-target="#caroselBannerDesktop" data-slide-to="0" class="active"></li>
                            <li data-target="#caroselBannerDesktop" data-slide-to="1"></li>
                            <li data-target="#caroselBannerDesktop" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('source/image/banner.png')}}" class="d-block w-100" alt="banner">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('source/image/banner.png')}}" class="d-block w-100" alt="banner">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('source/image/banner.png')}}" class="d-block w-100" alt="banner">
                            </div>
                        </div>                       
                        <a class="carousel-control-prev" href="#caroselBannerDesktop" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#caroselBannerDesktop" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- END BANNER -->

                <!-- START MAIN CONTENT -->
                <div class="main-content">
                    <div class="inner">

                        <!-- MOBILE SERVICE CONTENT -->
                        <div class="mobile-service-content">
                            <div class="content-header">
                                <h2 class="title">Dịch vụ di động</h2>
                                <p class="is-desktop">Gói cước</p>
                                <p class="is-desktop">Gói data</p>
                                <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
                            </div>
                            <div class="content-body"> 
                                <div class="m-card mobile-service">
                                    <h1 class="title">Gói Data ngày D5</h1>
                                    <ul class="m-card-body">
                                        <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                        </li>
                                        <li class="m-card-item">Data: <strong>2.5GB</strong>
                                        </li>
                                        <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                        </li>
                                        <li style="color:#237BD3;">99.000 đ</li>
                                    </ul>
                                    <div class="m-card-detail">
                                        <a href="#">Chi tiết</a>
                                    </div>
                                </div>
                                <div class="m-card mobile-service">
                                    <h1 class="title">Gói Data ngày D5</h1>
                                    <ul class="m-card-body">
                                        <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                        </li>
                                        <li class="m-card-item">Data: <strong>2.5GB</strong>
                                        </li>
                                        <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                        </li>
                                        <li style="color:#237BD3;">99.000 đ</li>
                                    </ul>
                                    <div class="m-card-detail">
                                        <a href="#">Chi tiết</a>
                                    </div>
                                </div>
                                <div class="m-card mobile-service">
                                    <h1 class="title">Gói Data ngày D5</h1>
                                    <ul class="m-card-body">
                                        <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                        </li>
                                        <li class="m-card-item">Data: <strong>2.5GB</strong>
                                        </li>
                                        <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                        </li>
                                        <li style="color:#237BD3;">99.000 đ</li>
                                    </ul>
                                    <div class="m-card-detail">
                                        <a href="#">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-footer">
                                <a href="#">Xem tất cả</a>
                            </div>
                        </div>

                        <!-- SERVICE -->
                        <div class="service-content">
                            <div class="content-header">
                                <h2 class="title">Dịch vụ</h2>
                                <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
                            </div>
                            <div class="content-body"> 
                                <div class="m-card service">
                                    <div class="content-image">
                                        <img src="{{asset('source/icon_mobile/data_d5.png')}}">
                                    </div>
                                    <h1 class="title">Gói Data ngày D5</h1>
                                    <div class="m-card-body">
                                        Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                                    </div>
                                </div>
                                <div class="m-card service">
                                    <div class="content-image">
                                        <img src="{{asset('source/icon_mobile/iflix.png')}}">
                                    </div>
                                    <h1 class="title">Gói Data ngày D5</h1>
                                    <div class="m-card-body">
                                        Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                                    </div>
                                </div>
                                <div class="m-card service">
                                    <div class="content-image">
                                        <img src="{{asset('source/icon_mobile/tiktok.png')}}">
                                    </div>
                                    <h1 class="title">Gói Data ngày D5</h1>
                                    <div class="m-card-body">
                                        Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                                    </div>
                                </div>
                            </div>
                            <div class="content-footer">
                                <a href="#">Xem tất cả</a>
                            </div>
                        </div>

                        <!-- NEWS AND EVENTS -->
                        <div class="events-content">
                            <div class="content-header">
                                <h2 class="title">Tin tức sự kiện</h2>
                                <p class="is-desktop">Tin sự kiện</p>
                                <p class="is-desktop">Tin khuyến mãi</p>
                                <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
                            </div>
                            <div class="content-body">
                                <div class="m-card events"> 
                                    <div class="content-image">
                                        <img src="{{asset('source/icon_mobile/event.png')}}">
                                    </div>
                                    <p class="title">Tin tức</p>
                                    <div class="m-card-body">
                                        MobiFone đạt top 6 thương hiệu giá trị nhất Việt Nam
                                    </div>
                                    <div class="time">
                                        Thứ hai, 01/09/2020
                                    </div>
                                </div>
                                <div class="m-card event-nd">
                                    <div class="event-image">
                                        <img src="{{asset('source/icon_mobile/news-first.png')}}">
                                    </div>
                                    <div class="event-nd-content">
                                        <p class="content">
                                        MobiFone số hóa quy trình hợp tác kinh doanh dịch vụ Giá trị gia tăng…
                                        </p>
                                        <p class="time">
                                            Thứ hai, 01/09/2020
                                        </p>
                                    </div>
                                </div>
                                <div class="m-card event-nd">
                                    <div class="event-image">
                                        <img src="{{asset('source/icon_mobile/news-second.png')}}">
                                    </div>
                                    <div class="event-nd-content">
                                        <p class="content">
                                        Mạng 4G của MobiFone có tốc độ upload cao nhất
                                        </p>
                                        <p class="time">
                                            Thứ hai, 01/09/2020
                                        </p>
                                    </div>
                                </div>
                                <div class="m-card event-nd">
                                    <div class="event-image">
                                        <img src="{{asset('source/icon_mobile/news-third.png')}}">
                                    </div>
                                    <div class="event-nd-content">
                                        <p class="content">
                                        MobiFone tặng khách hàng 5GB miễn phí khi cài đặt ứng dụng 
                                        </p>
                                        <p class="time">
                                            Thứ hai, 01/09/2020
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-footer">
                                <a href="#">Xem tất cả</a>
                            </div>
                        </div>

                        <!-- CUSTOMER CARE -->
                        <div class="customer-content">
                            <div class="content-header">
                                <h2 class="title">Chăm sóc khách hàng</h2>
                            </div>
                            <div class="content-body">
                                <a href="#">
                                    <div class="m-card customer">
                                        <div class="customer-img">
                                            <img src="{{asset('source/icon_mobile/customer-first.png')}}">
                                        </div>
                                        <div class="customer-content">
                                            Gửi phản ánh
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="m-card customer">
                                        <div class="customer-img">
                                            <img src="{{asset('source/icon_mobile/customer-second.png')}}">
                                        </div>
                                        <div class="customer-content">
                                            Câu hỏi thường gặp
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="m-card customer">
                                        <div class="customer-img">
                                            <img src="{{asset('source/icon_mobile/customer-third.png')}}">
                                        </div>
                                        <div class="customer-content">
                                            Tìm kiếm cửa hàng
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="m-card customer">
                                        <div class="customer-img">
                                            <img src="{{asset('source/icon_mobile/customer-fourth.png')}}">
                                        </div>
                                        <div class="customer-content">
                                            Chuyển mạng giữ số
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="footer">
                <div class="inner">
                <div class="footer-row is-desktop">
                    <div class="footer-column-first">
                        <div class="column-item-first">Giới thiệu</div>
                        <div class="column-item"><a href="#">Giới thiệu Mobifone</a></div>
                        <div class="column-item"><a href="#">Hợp tác Mobifone</a></div>
                        <div class="column-item"><a href="#">Tuyển dụng</a></div>
                        <div class="column-item"><a href="#">Điểm cung cấp dịch vụ viễn thông</a></div>
                        <div class="column-item"><a href="#">Site map</a></div>
                        <div class="column-item"><a href="#">Bảo mật thông tin</a></div>
                        <div class="social-media">
                            <img src="{{asset('source/icons/facebook.svg')}}" class="icon" alt="icons facebook" />
                            <img src="{{asset('source/icons/youtube-square.svg')}}" class="icon" alt="youtube square" />
                            <img src="{{asset('source/icons/news.svg')}}" class="icon" alt="icons news" />
                        </div>
                    </div>
                    <div class="footer-column">
                        <div class="column-item-first">Dịch vụ di động</div>
                        <div class="column-item"><a href="#">Gói cước</a></div>
                        <div class="column-item"><a href="#">Gói data</a></div>
                        <div class="column-item"><a href="#">Dịch vụ</a></div>

                        <div class="column-item-first">Tin tức</div>
                        <div class="column-item"><a href="#">Chương trình khuyến mãi</a></div>
                        <div class="column-item"><a href="#">Tin tức sự kiện</a></div>
                        <div class="column-item"><a href="#">Thông cáo báo chí</a></div>
                        <div class="column-item"><a href="#">Tuyển dụng</a></div>
                    </div>
                    <div class="footer-column">
                        <div class="column-item-first">Hỗ trợ khách hàng</div>
                        <div class="column-item"><a href="#">Gửi phản ánh</a></div>
                        <div class="column-item"><a href="#">Câu hỏi thường gặp</a></div>
                        <div class="column-item"><a href="#">Tìm kiếm cửa hàng</a></div>
                        <div class="column-item"><a href="#">Chọn số Mobifone</a></div>
                        <div class="column-item"><a href="#">Chuyển mạng giữ số</a></div>
                        <div class="column-item-first">Tài khoản</div>
                        <div class="column-item"><a href="#">Thông tin tài khoản</a></div>
                        <div class="column-item"><a href="#">Tra cước</a></div>
                    </div>
                    <div class="footer-column">
                        <div class="column-item-first">Tiện ích</div>
                        <div class="column-item"><a href="#">Nạp tiền</a></div>
                        <div class="column-item"><a href="#">Chuyển tiền</a></div>
                        <div class="column-item"><a href="#">Thanh toán ngân hàng</a></div>
                        <div class="column-item-first">Kết nối dài lâu</div>
                        <div class="column-item"><a href="#">Thông tin hội viên</a></div>
                        <div class="column-item"><a href="#">Danh sách ưu đãi</a></div>
                        <div class="column-item"><a href="#">Đổi điểm</a></div>
                    </div>
                </div>
                <div class="footer-row-mobile is-mobile">
                <div class="footer-row right">   
                    <div class="footer-img">
                        <img src="{{asset('source/icon_mobile/logo-last.png')}}" alt="logo">
                    </div>
                    <p class="sign">Giấy chứng nhận đăng ký doanh nghiệp. mã số doanh nghiệp: 0100686209, Đăng ký thay đổi lần thứ 9 ngày 27/7/2018,<br class="is-desktop" /> cấp bởi sở KHĐT thành phố Hà Nội.</p> 
                    <div class="social-media is-mobile">
                        <img src="{{asset('source/icons/facebook.svg')}}" class="icon" alt="icons facebook" />
                        <img src="{{asset('source/icons/youtube-square.svg')}}" class="icon" alt="youtube square" />
                        <img src="{{asset('source/icons/news.svg')}}" class="icon" alt="icons news" />
                    </div>   
                    <div class="line is-mobile"></div>        
                </div>    
                <div class="footer-row">
                    <div class="info">
                        <img src="{{asset('source/icons/icon-mark.svg')}}" class="icon" alt="icon mark">
                        <span>Tổng công ty Viễn Thông Mobifone <br/>Lô VP1, Yên Hoà, Cầu Giấy, Hà Nội, Việt Nam</span>
                    </div>
                    <div class="info">
                        <img src="{{asset('source/icons/icon-phone.svg')}}" class="icon" alt="icon phone">
                        <span>(+84-24)47831800</span>
                    </div>
                    <div class="info info-last">
                        <img src="{{asset('source/icons/icon-scanner.svg')}}" class="icon" alt="icon scanner">
                        <span>(+84-24)37831734</span>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="footer-last">
                © Copyright  2020 - Mobifone.
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/home.js')}}"></script>
    </body>
</html>
