@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'Dịch vụ di động',
        'page_link_second_level' => 'Dịch vụ'
    ]
)

@section('content')
<div class="body-content">
    <div class="using-pack-content">
        <div class="content-header">
            <h2 class="title">Dịch vụ đang sử dụng<h2>
            <a href="#" class="all is-desktop">Xem tất cả<span> &gt</span></a>
        </div>
        <div class="m-card using-pack service-pack">
            <img src="{{asset('source/image/mca.png')}}" class="using-pack__img">
            <div class="using-pack__right">
                <div class="using-pack__name">
                    <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                    <p class="name">Gói MCA</p>
                </div>
                <div class="using-pack__des">
                    MCA giúp bạn biết được các cuộc gọi đến trong thời gian điện thoại bị tắt do hết pin, ngoài vùng phủ sóng, đi máy bay. Dịch vụ Báo cuộc gọi nhỡ MCA MobiFone là dịch vụ tiện ích được đa số khách hàng MobiFone sử dụng vì tính hữu ích và cước phí không đáng kể (9.000đ/tháng). Sử dụng dịch vụ Báo cuộc gọi nhỡ MCA sẽ giúp bạn không bỏ lỡ các cuộc gọi quan trọng trong bất cứ tình huống nào. Vì MCA sẽ gửi tin nhắn báo cho bạn biết tất cả các cuộc gọi đã bị bõ lỡ…
                </div>
            </div>
        </div>
    </div>

    <div class="package-content">
        <div class="content-header">
            <h2 class="title">Gói dịch vụ</h2>
        </div>
        <div class="mb cs-hidden lightSlider" id="js-service-pack"> 
            <div class="m-card">
                <div class="m-card-header">
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
                    <div class="using-pack__name">
                        <img src="{{asset('source/image/mMusic.svg')}}" class="pack-thumb">
                        <p class="name">Gói MCA</p>
                    </div>
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
        </div>
    </div>
</div>
@endsection