@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Thông tin tài khoản'
    ]
)

@section('content')
<div class="body-content">
	<div class="user-post-paid-info-content">
		<div class="info-left">
			<div class="m-card user-post-paid-info">
				<div class="info-items">
					<img src="{{asset('source/image/avatar_default.svg')}}" class="avatar">
					<div class="info-item-list">
						<div class="name">Lê Xuân Long</div>
						<div class="phone">0123456789</div>
					</div>
				</div>
				<a href="#" class="btn-bg-white-fit">Chi tiết</a>
				<h3 class="title">Cước tạm tính</h3>
				<div class="info-items">
					<div class="price">77.000 đ</div>
					<div class="time">
						<img src="{{asset('source/image/i_thoigian.svg')}}" alt="..." class="icon-small">
						20/12/2020
					</div>
				</div>
			</div>
		</div>

		<div class="info-right">
			<div class="m-card user-post-paid-info">
				<h3 class="title">Thông tin nợ cước</h3>
				<p class="text-blue-bold">99.000 đ</p>
				<ul>
					<li>
						<div class="name">Nợ đầu kì</div>
						<div class="value text-blue-bold">346.000 đ</div>
					</li>
					<li>
						<div class="name">Số tiền đã thanh toán</div>
						<div class="value text-blue-bold">0 đ</div>
					</li>
					<li>
						<div class="name">Cước chưa thanh toán</div>
						<div class="value text-blue-bold">346.000 đ</div>
					</li>
					<li class="text-italic">Vui lòng thanh toán trước ngày 10/6/2020</li>
					<a href="#" class="btn-border-long">Thanh toán</a>
				</ul>
			</div>
		</div>
	</div>
	@include('common.theme-mymobifone')
	
</div>
@endsection