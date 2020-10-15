@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'Dịch vụ di động',
        'page_link_second_level' => 'Gói Data'
    ]
)

@section('content')
<div class="body-content">
    <div class="using-pack-content">
        <div class="content-header">
            <h2 class="title">Gói Data đang sử dụng<h2>
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