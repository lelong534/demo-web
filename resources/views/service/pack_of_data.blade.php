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
        <div class="slider2">
            <div class="m-card">
                <div>
                    <div class="progress" data-value='80'>
                        <span class="progress-left">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <div class="progress-value w-100 h-100 rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <img src="{{asset('source/icon_mobile/i_signals.svg')}}" class="icon-small is-desktop">
                            <div class="h5">80 GB/</div>
                            <div>100 GB</div>
                        </div>
                    </div>
                    <ul class="pack-items">
                        <div class="pack-title">Gói 6HD200</div>
                        <li class="pack-item">
                            <div class="pack-item-des">Lưu lượng:</div>
                            <div class="pack-item-value">1000 MB</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-des">HSD:</div>
                            <div class="pack-item-value">6 tháng</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-price">99.000 đ</div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-border">Hủy</a>
            </div>
            <div class="m-card">
                <div>
                    <div class="progress" data-value='8'>
                        <span class="progress-left">
                            <span class="progress-bar border-danger"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-danger"></span>
                        </span>
                        <div class="progress-value w-100 h-100 rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <img src="{{asset('source/icon_mobile/i_signals.svg')}}" class="icon-small is-desktop">
                            <div class="h5">8 GB/</div>
                            <div>100 GB</div>
                        </div>
                    </div>
                    <ul class="pack-items">
                        <div class="pack-title">Gói dài kì 6HD200</div>
                        <li class="pack-item">
                            <div class="pack-item-des">Lưu lượng:</div>
                            <div class="pack-item-value">1000 MB</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-des">HSD:</div>
                            <div class="pack-item-value">6 tháng</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-price">99.000 đ</div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-border">Hủy</a>
            </div>
            <div class="m-card">
                <div>
                    <div class="progress" data-value='80'>
                        <span class="progress-left">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <div class="progress-value w-100 h-100 rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <img src="{{asset('source/icon_mobile/i_signals.svg')}}" class="icon-small is-desktop">
                            <div class="h5">80 GB/</div>
                            <div>100 GB</div>
                        </div>
                    </div>
                    <ul class="pack-items">
                        <div class="pack-title">Gói dài kì 6HD200</div>
                        <li class="pack-item">
                            <div class="pack-item-des">Lưu lượng:</div>
                            <div class="pack-item-value">1000 MB</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-des">HSD:</div>
                            <div class="pack-item-value">6 tháng</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-price">99.000 đ</div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-border">Hủy</a>
            </div>
            <div class="m-card">
                <div>
                    <div class="progress" data-value='80'>
                        <span class="progress-left">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <div class="progress-value w-100 h-100 rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <img src="{{asset('source/icon_mobile/i_signals.svg')}}" class="icon-small is-desktop">
                            <div class="h5">80 GB/</div>
                            <div>100 GB</div>
                        </div>
                    </div>
                    <ul class="pack-items">
                        <div class="pack-title">Gói dài kì 6HD200</div>
                        <li class="pack-item">
                            <div class="pack-item-des">Lưu lượng:</div>
                            <div class="pack-item-value">1000 MB</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-des">HSD:</div>
                            <div class="pack-item-value">6 tháng</div>
                        </li>
                        <li class="pack-item">
                            <div class="pack-item-price">99.000 đ</div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-border">Hủy</a>
            </div>
        </div>
    </div>

    <div class="package-content">
        <div class="content-header">
            <h2 class="title">Gói data ngày</h2>
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
            <h2 class="title">Gói data tháng</h2>
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
            <h2 class="title">Gói data dài kỳ</h2>
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