@extends('base', ['title' => 'Tuyển dụng'])

@section('content')
<!-- content -->
@include('common.banner_employ')
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
                <h2 class="text-primary">Chi tiết tuyển dụng</h2>
            </div>
            <div class="content-title is-mobile">
                Chi tiết tuyển dụng
            </div>

		    <!-- content -->
		    <div class="content-body">
		    	<div class="container">
			        <div class="row">
			            <div class="m-card card-job-left col-md-8 col-sm-12">
			            	<div class="card-job-top">
			                    <div class="card-job-image">
			                        <img src="{{asset('source/image/card_job_detail.png')}}" class="is-desktop" alt="job"/>
			                    </div>
			                    <div class="card-job-top-right">
				                    <div class="card-job-title">
		                                <h3 class="title"><a href="#">Manager</a></h3>
		                            </div>
				                    <ul class="card-job-body">
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
		                                    Hà Nội
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
		                                    10.000.000 đ - 20.000.000 đ
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
		                                    Ngày hết hạn: 20/10/2020
		                                </li>
		                                <li class="item">
		                                    <div class="item__left">5 ngày trước</div>
		                                </li>
		                            </ul>
		                            <a href="{{route('employ_sendcv')}}" class="btn-border-fit">Nộp đơn</a>
		                        </div>
				            </div>
				            <div class="card-job-bottom">
				            	<h3 class="title">Phúc lợi</h3>
				            	<div class="benefit-content">
				            		<div class="row">
				            			<div class="col-6">
				            				<img src="{{asset('source/icons/icon-insurrance.svg')}}" alt="insurrance" class="icon-small" />Bảo hiểm
				            			</div>
				            			<div class="col-6">
				            				<img src="{{asset('source/icons/icon-gift.svg')}}" alt="gift" class="icon-small" />Thưởng
				            			</div>
				            		</div>
				            	</div>
				            	<h3 class="title">Mô tả công việc</h3>
				            	<ul class="job-description">
				            		<li>Tiếp cận khách hàng, thực hiện công tác giới thiệu, quảng bá và bán sản phẩm công ty</li>
				            	</ul>
				            	<h3 class="title">Mô tả công việc</h3>
				            	<ul class="job-description">
				            		<li>Tiếp cận khách hàng, thực hiện công tác giới thiệu, quảng bá và bán sản phẩm công ty</li>
				            	</ul>
				            </div>
			            </div>
			            <div class=" col-md-4 col-sm-12 card-job-right">
		        			<p class="text-primary font-weight-bold">Có thể bạn quan tâm</p>
		        			<a href="{{route('employ_detail')}}" class="text-decoration-none text-body">
				            	<div class="m-card">
				                    <div class="card-job-title">
		                                <h3 class="title">Manager</h3>
		                            </div>
				                    <ul class="card-job-body">
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
		                                    Hà Nội
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
		                                    10.000.000 đ - 20.000.000 đ
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
		                                    Ngày hết hạn: 20/10/2020
		                                </li>
		                                <li class="item">
		                                    <div class="item__left">5 ngày trước</div>
		                                </li>
		                            </ul>
				                </div>
			            	</a>
			            	<a href="{{route('employ_detail')}}" class="text-decoration-none text-body">
				            	<div class="m-card">
				                    <div class="card-job-title">
		                                <h3 class="title">Manager</h3>
		                            </div>
				                    <ul class="card-job-body">
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
		                                    Hà Nội
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
		                                    10.000.000 đ - 20.000.000 đ
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
		                                    Ngày hết hạn: 20/10/2020
		                                </li>
		                                <li class="item">
		                                    <div class="item__left">5 ngày trước</div>
		                                </li>
		                            </ul>
				                </div>
			            	</a>
			            	<a href="{{route('employ_detail')}}" class="text-decoration-none text-body">
				            	<div class="m-card">
				                    <div class="card-job-title">
		                                <h3 class="title">Manager</h3>
		                            </div>
				                    <ul class="card-job-body">
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
		                                    Hà Nội
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
		                                    10.000.000 đ - 20.000.000 đ
		                                </li>
		                                <li class="item">
		                                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
		                                    Ngày hết hạn: 20/10/2020
		                                </li>
		                                <li class="item">
		                                    <div class="item__left">5 ngày trước</div>
		                                </li>
		                            </ul>
				                </div>
			            	</a>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</main>
@endsection