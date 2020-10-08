@extends('application', ['title' => 'Hợp tác'])

@section('content')
<div id="menu-wrapper">
    <ul id="introduction-menu">
        <li><h3>Giới thiệu chung</h3></li>
        <li><h3 class="active">Hợp tác với Mobifone</h3></li>
        <li><h3>Đối tác</h3></li>
        <li><h3>Điểm cung cấp dịch vụ viễn thông</h3></li>
        <li><h3>Cửa hàng bán lẻ</h3></li>
    </ul>
</div>
<div class="introduction-content">  
    <!-- CONTENT BODY -->
    <div class="introduction-body">
    	<div id="carouselIntroduction" class="carousel slide">   
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('source/image/introduction2.png')}}" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('source/image/introduction2.png')}}" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('source/image/introduction1.png')}}" class="d-block" alt="">
                </div>
            </div>  
            <ol class="carousel-indicators">
                <li data-target="#carouselIntroduction" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIntroduction" data-slide-to="1"></li>
                <li data-target="#carouselIntroduction" data-slide-to="2"></li>
            </ol>  
        </div>

        <div class="content">
        	<p class="text-bold">Các lĩnh vực Tổng công ty viễn thông MobiFone đang quan tâm:</p>
            <ul class="introduction">
                <li>Lĩnh vực M2M/IoT</li>
                <li>Lĩnh vực OTT TV</li>
                <li>Lĩnh vực thanh toán điện tử</li>
                <li>Lĩnh vực quảng cáo trên di động</li>
                <li>Lĩnh vực tài chính bảo hiểm</li>
                <li>Lĩnh vực trò chơi trên di động</li>
                <li>Lĩnh vực về giáo dục, nông nghiệp, y tế</li>
                <li>Đối tác có nội dung đặc sắc như: giải bóng đá các quốc gia châu âu, phim bom tấn Hollywood,..</li>
            </ul>

            <p class="text-bold">Nguyên tắc hợp tác:</p>
            <ul class="introduction">
                <li>MobiFone khuyến khích hợp tác cung cấp các dịch vụ chưa được cung cấp trên mạng MobiFone.</li>
                <li>Đối với các dịch vụ đã được cung cấp trên mạng MobiFone, đối tác cần làm rõ sự vượt trội của dịch vụ mới so với dịch vụ đã được cung cấp.</li>
            </ul>

            <p class="text-bold">Yêu cầu đối với các đối tác của MobiFone:</p>
            <ul class="introduction">
                <li>Giấy phép kinh doanh</li>
                <li>Năng lực tài chính</li>
                <li>Bản quyền nội dung số, bản quyền giải pháp</li>
                <li>Kinh nghiệm cung cấp nội dung số</li>
                <li>Kiến trúc hệ thống và mô hình kết nối kĩ thuật</li>
            </ul>
            <p class="text-bold">Nộp hồ sơ và duyệt hồ sơ tự động:</p>
                Quý đối tác vui lòng truy cập vào đường link: http://cp.mobifone.vn
        </div>
    </div>
    @include('common.theme-introduction')
</div>

@endsection