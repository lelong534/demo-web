@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'Dịch vụ di động',
        'page_link_second_level' => 'Gói cước'
    ]
)

@section('content')
<div class="body-content">
	<div class="using-pack-content">
		<div class="content-header">
			<h2 class="title">Gói cước đang sử dụng</h2>
			<a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
		</div>
		<div class="m-card using-pack">
			<div class="pack-title">Gói cước C90N</div>
			<div class="pack-charge">150.000 đ</div>
			<ul class="pack-items">
    			<li>
    				<img src="{{asset('source/icon_mobile/i_phonecall.svg')}}" class="icon-small">
                    <div class="des">Gọi nội mạng</div>
                    <span class="is-desktop">: </span>
                    <div class="value">1000 phút</div>
    			</li>
				<li>
					<img src="{{asset('source/icon_mobile/i_phonecall.svg')}}" class="icon-small">
                    <div class="des">Gọi liên mạng</div>
                    <span class="is-desktop">: </span>
                    <div class="value">50 phút</div>
				</li>
				<li>
					<img src="{{asset('source/icon_mobile/i_signals.svg')}}" class="icon-small">
                    <div class="des">Data khuyến mại</div>
                    <span class="is-desktop">: </span>
                    <div class="value">50 MB</div>
				</li>
				<li >
					<img src="{{asset('source/icon_mobile/i_phonesms.svg')}}" class="icon-small">
                    <div class="des">SMS nội mạng</div>
                    <span class="is-desktop">: </span>
                    <div class="value">0 SMS</div>
				</li>
				<li >
					<img src="{{asset('source/icon_mobile/i_phonesms.svg')}}" class="icon-small">
                    <div class="des">SMS liên mạng</div>
                    <span class="is-desktop">: </span>
                    <div class="value">0 SMS</div>
				</li>
			</ul>
			<a class="btn-border">Hủy</a>
		</div>
	</div>

    <div class="package-content">
        <div class="content-header">
            <h2 class="title">Tự tạo gói cước</h2>
        </div>              
        <div class="m-card create-pack-card">
            <ul class="list-face-value">
                <img src="{{asset('source/image/arrow-left.svg')}}" class="icon is-mobile" id="turn-left">
                <div class="list-face-value-wrap">
                    <li class="face-value">10.000 đ</li>
                    <li class="face-value">20.000 đ</li>
                    <li class="face-value active">50.000 đ</li>
                    <li class="face-value">100.000 đ</li>
                </div>
                <img src="{{asset('source/image/arrow-right.svg')}}" class="icon is-mobile" id="turn-right">
            </ul>
            <ul class="list-pack-detail">
                <li class="pack-detail-item">
                    <p>Thoại nội mạng</p>
                    <p class="value">50 phút</p>
                </li>
                <li class="pack-detail-item">
                    <p>Thoại ngoại mạng</p>
                    <p class="value">150 phút</p>
                </li>
                <li class="pack-detail-item">
                    <p>Data</p>
                    <p class="value">275 MB</p>
                </li>
            </ul>
            <div class="pack-range-value">
                <ul class="list-dots">
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
                <div id="slider-range"></div>
            </div>
            <a href="#" class="btn-border create-pack">Tạo gói</a>
        </div>
    </div>

	<div class="package-content">
        <div class="content-header">
            <h2 class="title">Gói combo trong nước</h2>
            <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
        </div>
        <div class="mb cs-hidden lightSlider"> 
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <div class="state">Đang sử dụng</div>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Hủy</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
        </div>
    </div>

    <div class="package-content">
        <div class="content-header">
            <h2 class="title">Gói combo trong nước</h2>
            <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
        </div>
        <div class="mb cs-hidden lightSlider"> 
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <div class="state">Đang sử dụng</div>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Hủy</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
        </div>
    </div>

    <div class="package-content">
        <div class="content-header">
            <h2 class="title">Gói combo trong nước</h2>
            <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
        </div>
        <div class="mb cs-hidden lightSlider"> 
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <div class="state">Đang sử dụng</div>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Hủy</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
            <div class="m-card">
                <div class="m-card-header">
                    <h1 class="title">Gói Data ngày</h1>
                    <a href="#">Chi tiết ></a>
                </div>
                <ul class="m-card-body">
                    <li class="m-card-item">Thoại nội mạng: <strong>1000 phút</strong>
                    </li>
                    <li class="m-card-item">Data: <strong>2.5GB</strong>
                    </li>
                    <li class="m-card-item">HSD: <strong>30 ngày</strong>
                    </li>
                    <li class="text-blue">99.000 đ</li>
                </ul>
                <a href="#" class="btn-bg-white">Đăng ký</a>
            </div>
        </div>
    </div>
</div>

@endsection