@extends('base', ['title' => 'Trang chủ'])

@section('content')
<!-- content -->
<!-- MAIN -->
<main class="l-main">
    @include('common.banner')

    <!-- START MAIN CONTENT -->
    <div class="main-content">
        <div class="inner">

            <!-- MOBILE SERVICE CONTENT -->
            <div class="mobile-service-content">
                <div class="content-header">
                    <h2 class="title">Dịch vụ di động</h2>
                    <p href="#" data-tab-target="#charge" class="active is-desktop">Gói cước</p>
                    <p href="#" data-tab-target= "#data" class="is-desktop">Gói data</p>
                    <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
                </div>
                <!-- start light slider to view mobile service -->
                <div class="m-tab active" id="charge" data-tab-content>
                    <div class="mb cs-hidden lightSlider"> 
                        <div class="m-card mobile-service">
                            <h1 class="title"><a href="#">Gói Data ngày</a></h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                        <div class="m-card mobile-service">
                            <h1 class="title">Gói Data ngày</h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                        <div class="m-card mobile-service">
                            <h1 class="title">Gói Data ngày</h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                        <div class="m-card mobile-service">
                            <h1 class="title">Gói Data ngày</h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-tab hidden" id="data" data-tab-content>
                    <div class="mb cs-hidden lightSlider"> 
                        <div class="m-card mobile-service">
                            <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                        <div class="m-card mobile-service">
                            <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                        <div class="m-card mobile-service">
                            <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                        <div class="m-card mobile-service">
                            <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                            <ul class="m-card-body">
                                <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                                </li>
                                <li class="m-card-item">Data: <strong>2.5GB</strong>
                                </li>
                                <li class="m-card-item">HSD: <strong>30 ngày</strong>
                                </li>
                                <li class="text-blue">99.000 đ</li>
                            </ul>
                            <div class="m-card-detail">
                                <a href="#">Chi tiết</a>
                            </div>
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
                <div class="lightSlider"> 
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/icon_mobile/tiktok.png')}}">
                        </div>
                        <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                        <div class="m-card-body">
                            Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                        </div>
                    </div>
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/icon_mobile/data_d5.png')}}">
                        </div>
                        <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                        <div class="m-card-body">
                            Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                        </div>
                    </div>
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/icon_mobile/iflix.png')}}">
                        </div>
                        <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                        <div class="m-card-body">
                            Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                        </div>
                    </div>
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/icon_mobile/tiktok.png')}}">
                        </div>
                        <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
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
                    <p class="active is-desktop">Tin sự kiện</p>
                    <p class="is-desktop">Tin khuyến mãi</p>
                    <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
                </div>
                <div class="content-body">
                    <div class="m-card events"> 
                        <div class="content-image">
                            <img src="{{asset('source/icon_mobile/event.png')}}">
                        </div>
                        <div class="title">Tin tức</div>
                        <div class="m-card-body">
                            <a href="#">MobiFone đạt top 6 thương hiệu giá trị nhất Việt Nam</a>
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
                                <a href="#">MobiFone số hóa quy trình hợp tác kinh doanh dịch vụ Giá trị gia tăng…</a>
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
                                <a href="#">Mạng 4G của MobiFone có tốc độ upload cao nhất</a>
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
                                <a href="#">MobiFone tặng khách hàng 5GB miễn phí khi cài đặt ứng dụng</a>
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
                                <img src="{{asset('source/icon_mobile/customer-first.svg')}}">
                            </div>
                            <div class="customer-content">
                                Gửi phản ánh
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="m-card customer">
                            <div class="customer-img">
                                <img src="{{asset('source/icon_mobile/customer-second.svg')}}">
                            </div>
                            <div class="customer-content">
                                Câu hỏi thường gặp
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="m-card customer">
                            <div class="customer-img">
                                <img src="{{asset('source/icon_mobile/customer-third.svg')}}">
                            </div>
                            <div class="customer-content">
                                Tìm kiếm cửa hàng
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="m-card customer">
                            <div class="customer-img">
                                <img src="{{asset('source/icon_mobile/customer-fourth.svg')}}">
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
@endsection
