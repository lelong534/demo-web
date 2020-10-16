@extends('child', 
    [
        'title' => 'Thông tin cá nhân',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Lịch sử nạp tiền/Thanh toán'
    ]
)

@section('content')
<div class="body-content">
	<div class="grid-two-column">
		<div class="m-card">
			<h3 class="title">05/08/2020</h3>
			<ul class="list-space">
				<li>
					<img src="{{asset('source/image/i_luong.svg')}}" class="icon-small">
	                <div class="des">Nạp tiền</div>
	                <div class="value">50.000 đ</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_thoigian.svg')}}" class="icon-small">
	                <div class="des">10:50:13</div>
				</li>
			</ul>
		</div>
		<div class="m-card">
			<h3 class="title">05/08/2020</h3>
			<ul class="list-space">
				<li>
					<img src="{{asset('source/image/i_luong.svg')}}" class="icon-small">
	                <div class="des">Nạp tiền</div>
	                <div class="value">50.000 đ</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_thoigian.svg')}}" class="icon-small">
	                <div class="des">10:50:13</div>
				</li>
			</ul>
		</div>
		<div class="m-card">
			<h3 class="title">05/08/2020</h3>
			<ul class="list-space">
				<li>
					<img src="{{asset('source/image/i_luong.svg')}}" class="icon-small">
	                <div class="des">Nạp tiền</div>
	                <div class="value">50.000 đ</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_thoigian.svg')}}" class="icon-small">
	                <div class="des">10:50:13</div>
				</li>
			</ul>
		</div>
		<div class="m-card">
			<h3 class="title">05/08/2020</h3>
			<ul class="list-space">
				<li>
					<img src="{{asset('source/image/i_luong.svg')}}" class="icon-small">
	                <div class="des">Nạp tiền</div>
	                <div class="value">50.000 đ</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_thoigian.svg')}}" class="icon-small">
	                <div class="des">10:50:13</div>
				</li>
			</ul>
		</div>
		<div class="m-card">
			<h3 class="title">05/08/2020</h3>
			<ul class="list-space">
				<li>
					<img src="{{asset('source/image/i_luong.svg')}}" class="icon-small">
	                <div class="des">Nạp tiền</div>
	                <div class="value">50.000 đ</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_thoigian.svg')}}" class="icon-small">
	                <div class="des">10:50:13</div>
				</li>
			</ul>
		</div>
		<div class="m-card">
			<h3 class="title">05/08/2020</h3>
			<ul class="list-space">
				<li>
					<img src="{{asset('source/image/i_luong.svg')}}" class="icon-small">
	                <div class="des">Nạp tiền</div>
	                <div class="value">50.000 đ</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_thoigian.svg')}}" class="icon-small">
	                <div class="des">10:50:13</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection