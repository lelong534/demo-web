@extends('child', 
    [
        'title' => 'Nạp tiền',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Tiện ích'
    ]
)

@section('content')
<div class="body-content utilities">
	<ul class="menu-list-items">
		<li class="menu-item active">
			<div class="menu-item__thumb">
				<img src="{{asset('source/image/i_naptien.svg')}}" alt="">
			</div>
			<p>Nạp tiền</p>
		</li>
		<li class="menu-item">
			<div class="menu-item__thumb">
				<img src="{{asset('source/image/i_bankpayment.svg')}}" alt="">
			</div>
			<p>Thanh toán ngân hàng</p>
		</li>
		<li class="menu-item">
			<div class="menu-item__thumb">
				<img src="{{asset('source/image/i_autopay.svg')}}" alt="">
			</div>
			<p>Autopay</p>
		</li>
		<li class="menu-item">
			<div class="menu-item__thumb">
				<img src="{{asset('source/image/i_chuyentien.svg')}}" alt="">
			</div>
			<p>Chuyển tiền</p>
		</li>
	</ul>
	<div class="card-no-bg-mobile utilities">
		<form> 
			<div class="input-box">
                <input type="text" class="input-box-data" placeholder="Số điện thoại">	
                <span><img src="{{asset('source/image/i_sdt.svg')}}" alt="" class="input-box-icon"></span>
            </div>
            <div class="input-box">
                <input type="text" class="input-box-data" placeholder="Số tiền">	
                <span><img src="{{asset('source/image/i_sotien.svg')}}" alt="" class="input-box-icon"></span>
            </div>
            <div class="input-box d-flex">
                <input type="text" class="input-box-data" placeholder="Nhập mã capcha">	
                <span><img src="{{asset('source/image/i_capcha.svg')}}" alt="" class="input-box-icon"></span>
                <img src="{{asset('source/image/capcha.svg')}}" class="capcha">
            </div>
            <div class="note">Gửi lại mã capcha</div>
            <div class="submit-box d-flex">
	            <a href="#" class="btn-relative-fit">Gửi</a>
	            <a href="#" class="btn-relative-fit">Nạp tiền</a>
	        </div>
		</form>
	</div>
</div>
@endsection