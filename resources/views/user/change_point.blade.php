@extends('child', 
    [
        'title' => 'Thông tin tài khoản',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Kết nối dài lâu'
    ]
)

@section('content')
<div class="body-content change-point">
	<div class="m-card top-content">
		<div class="info-items">
			<img src="{{asset('source/image/avatar_default.svg')}}" class="avatar">
			<div class="info-item-list">
				<div class="name">Nguyen Thi Hoai Thu</div>
				<div class="phone">0123456789</div>
				<div class="point is-mobile">12.234 điểm</div>
			</div>
		</div>
		<ul class="list-items">
			<li>
				<img src="{{asset('source/image/i_trophy_cup.svg')}}" class="icon-small" alt=".">
				<div>Hội viên đồng</div>
			</li>
			<li>
				<img src="{{asset('source/image/i_creditcard.svg')}}" class="icon-small" alt=".">
				<div>Chưa đăng kí thẻ hội viên</div>
			</li>
		</ul>
		<div class="point is-desktop">12.234 điểm</div>
	</div>

	<div class="grid-two-column">
		<div class="m-card">
			<h3 class="title">Đổi cước</h3>
			<div class="point">2.000 điểm = 200.000 đ</div>
			<div class="text-note">Lưu ý:</div>
			<ul class="list-space">
				<li>
					<div class="des">Điểm tích lũy tháng</div>
					<div class="input">
						<div class="input">
							<span class="minus">-</span>
	                        <input type="number" class="count" value="1">
	                        <span class="plus">+</span>
						</div>
					</div>
				</li>
				<li>
					<div class="des">Điểm tích lũy tháng</div>
					<div class="value">1.248 điểm</div>
				</li>
				<li>
					<div class="des">Số cước nhận được</div>
					<div class="value">0</div>
				</li>
			</ul>
			<a href="#" class="btn-border">Đổi điểm</a>
		</div>

		<div class="m-card">
			<h3 class="title">Đổi gói combo</h3>
			<div class="point">MDC99</div>
			<p>Gọi liên mạng:<span><strong> 25 phút</strong></span></p>
			<p>SMS trong nước:<span><strong> 80 SMS</strong></span></p>
			<p class="text-blue">2000 điểm</p>
			<div class="text-note">Lưu ý:</div>
			<ul class="list-space">
				<li>
					<div class="des">Điểm tích lũy tháng</div>
					<div class="input">
						<span class="minus">-</span>
                        <input type="number" class="count" value="1">
                        <span class="plus">+</span>
					</div>
				</li>
				<li>
					<div class="des">Số cước nhận được</div>
					<div class="value">0</div>
				</li>
			</ul>
			<a href="#" class="btn-border">Đổi điểm</a>
		</div>
	</div>
</div>
@endsection