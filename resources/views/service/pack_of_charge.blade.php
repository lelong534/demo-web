@extends('base', ['title' => 'Dịch vụ di động'])

@section('content')

<main class="l-main">
	<div class="main-content">
        <div class="inner">
        	<div class="content-title is-desktop">
		        <h2>Trang chủ</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"       
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2>Dịch vụ di động</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"     
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2 class="text-primary">Gói cước</h2>
		    </div>

		    <div class="body-content">
		    	<div class="using-pack-content">
		    		<div class="content-header">
		    			<h2 class="title">Gói cước đang sử dụng<h2>
		    			<a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
		    		</div>
		    		<div class="m-card using-pack">
		    			<h3 class="pack-title">Gói cước C90N</h3>
		    			<div class="pack-charge">150.000 đ</div>
		    			<ul class="pack-items">
			    			<li>
			    				<img src="{{asset('source/icon_mobile/i_phonecall.svg')}}" class="icon-small">Gọi nội mạng: 1000 phút
			    			</li>
							<li>
								<img src="{{asset('source/icon_mobile/i_phonecall.svg')}}" class="icon-small">Gọi liên mạng: 50 phút
							</li>
							<li>
								<img src="{{asset('source/icon_mobile/i_signals.svg')}}" class="icon-small">Data khuyến mại: 0 SMS
							</li>
							<li >
								<img src="{{asset('source/icon_mobile/i_phonesms.svg')}}" class="icon-small">SMS nội mạng: 0 SMS
							</li>
							<li >
								<img src="{{asset('source/icon_mobile/i_phonesms.svg')}}" class="icon-small">SMS liên mạng: 0 SMS
							</li>
						</ul>
						<a class="button">Hủy gói</a>
		    		</div>
		    	</div>

		    	<div class="package-content">
	                <div class="content-header">
	                    <h2 class="title">Gói combo trong nước</h2>
	                    <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
	                </div>
                    <div class="mb cs-hidden lightSlider"> 
                        <div class="m-card">
                            <h1 class="title">Gói Data ngày</h1>
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
                        <div class="m-card">
                            <h1 class="title">Gói Data ngày</h1>
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
                        <div class="m-card">
                            <h1 class="title">Gói Data ngày</h1>
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
                        <div class="m-card">
                            <h1 class="title">Gói Data ngày</h1>
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
	            </div>
		    </div>
		</div>
	</div>
</main>

@endsection