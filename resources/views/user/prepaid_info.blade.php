@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Thông tin tài khoản'
    ]
)

@section('content')
<div class="body-content">
	<div class="user-info-content user-info-list-items">
		<div class="m-card user-info">
			<img src="{{asset('source/image/avatar_default.svg')}}" class="avatar">
			<div class="name">Lê Xuân Long</div>
			<div class="phone">0123456789</div>
			<a href="#" class="btn-bg-white-fit">Chi tiết</a>
		</div>

		<div class="m-card account-balance">
			<ul class="account-balance-list-items">
				<li class="account-balance-item">
					<div class="name">Tài khoản chính</div>
					<div class="value">248.000 đ<div>
				</li>
				<li class="account-balance-item">
					<div class="name">Khuyến mại nội mạng</div>
					<div class="value">25.000 đ<div>
				</li>
				<li class="account-balance-item">
					<div class="name">Khuyến mại liên mạng</div>
					<div class="value">2.000 đ<div>
				</li>
			</ul>
			<div class="account-balance-more">
				<a href="#" class="btn-bg-white-fit">Chi tiết</a>
				<a href="#" class="btn-bg-white-fit">Nạp tiền</a>
			</div>
		</div>
	</div>

	<div class="user-info-content using-pack">
		<div class="user-info-content-left">
			<div class="content-header">
				<h2 class="title">Gói data đang sử dụng</h2>
			</div>
			<div id="carouselPackage" class="carousel slide" data-ride="carousel">
		        <div class="carousel-inner">
		            <div class="carousel-item active">
		            	<div class="m-card using-pack using-pack-data">
							<div class="pack-title is-mobile">Gói dài kì 6HD200</div>
							<div class="using-pack-data-info">
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
						          	<div class="pack-title is-desktop">Gói dài kì 6HD200</div>
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
						    <a class="btn-border-fit" href="#">Mua data</a>
						</div>
		            </div>
		            <div class="carousel-item">
						<div class="m-card using-pack using-pack-data">
							<div class="pack-title is-mobile">Gói dài kì 6HD200</div>
							<div class="using-pack-data-info">
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
						          	<div class="pack-title is-desktop">Gói dài kì 6HD200</div>
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
						    <a class="btn-border-fit" href="#">Mua data</a>
						</div>
		            </div>
		        </div>
		        <ol class="carousel-indicators">
				    <li data-target="#carouselPackage" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselPackage" data-slide-to="1"></li>
				</ol>
		    </div>
		</div>
		<div class="user-info-content-right">
			<div class="using-pack-charge-content">
				<div class="content-header">
					<h2 class="title">Gói cước đang sử dụng</h2>
				</div>
				<div class="m-card using-pack">
					<div class="pack-title">Gói cước C90N</div>
					<div class="pack-charge">150.000 đ</div>
					<ul class="list-space">
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
					<a class="btn-border-fit">Hủy</a>
				</div>
				<div class="m-card no-pack">
					<img src="{{asset('source/image/i_nopack.svg')}}" alt="..." style="width: 7.5rem">
					<div class="des">Bạn chưa đăng kí gói cước nào</div>
					<a class="btn-border-long">Danh sách gói cước</a>
				</div>
			</div>
		</div>
	</div>

	<div class="user-info-content">
        <div class="content-header">
            <h2 class="title">Dịch vụ đang sử dụng<h2>
        </div>
        <div class="m-card using-pack service-pack">
            <img src="{{asset('source/image/mca.png')}}" class="using-pack__img">
            <div class="using-pack__right">
                <div class="using-pack__name">
                    <h3 class="title">Gói MCA</h3>
                </div>
                <div class="using-pack__des">
                    MCA giúp bạn biết được các cuộc gọi đến trong thời gian điện thoại bị tắt do hết pin, ngoài vùng phủ sóng, đi máy bay. Dịch vụ Báo cuộc gọi nhỡ MCA MobiFone là dịch vụ tiện ích được đa số khách hàng MobiFone sử dụng...
                </div>
            </div>
        </div>
    </div>

    @include('common.theme-mymobifone')
</div>
@endsection