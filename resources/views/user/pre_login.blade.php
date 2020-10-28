@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'Đăng nhập',
        'page_link_second_level' => 'Đăng nhập bằng OTP'
    ]
)

@section('content')
<div class="body-content">
    <div class="login-content">
    	<div class="card-no-bg-mobile">
			<div class="input-box">
	            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nhập số điện thoại">	
	            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
	        </div>
	        <a class="btn-border" data-toggle="modal" data-target="#modalOTP">Tiếp tục</a> 
    	</div>

		<div class="modal fade" id="modalOTP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
				<div class="modal-body">
					<h2 class="title is-desktop">Chọn phương thức thanh toán</h2>
					<h3 class="title">Thẻ đã lưu</h3>
					<div class="payment-method-content">
						<ul class="list-bank-acc">
							<li class="bank-acc-item">
								<div class="m-card__top">
									<img src="{{asset('source/image/i_jscb.svg')}}" class="m-card__top-thumb">
									<div class="m-card__top-content">
										<h3 class="title">Vietnam Prosperity JSCB</h3>
										<p>*2426</p>
									</div>
								</div>
							</li>
							<li class="bank-acc-item">
								<div class="m-card__top">
									<img src="{{asset('source/image/i_visa.svg')}}" class="m-card__top-thumb">
									<div class="m-card__top-content">
										<h3 class="title">Vietnam Prosperity JSCB</h3>
										<p>*2426</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<br/>
					<h3 class="title">Thẻ thanh toán quốc tế</h3>
					<div class="payment-method-content" style="padding-bottom: 0.25rem;">
						<ul class="list-global-card">
							<li class="global-card-item">
								<div class="global-card-item-thumb">
									<img src="{{asset('source/image/i_visai.svg')}}">
								</div>
							</li>
							<li class="global-card-item">
								<div class="global-card-item-thumb">
								<img src="{{asset('source/image/i_jcb.svg')}}">
							</li>
							<li class="global-card-item">
								<div class="global-card-item-thumb">
									<img src="{{asset('source/image/i_master_card.svg')}}">
								</div>
							</li>
							<li class="global-card-item">
								<div class="global-card-item-thumb">
									<img src="{{asset('source/image/i_usa_express.svg')}}">
								</div>
							</li>
							<li class="global-card-item">
								<div class="global-card-item-thumb">
									<img src="{{asset('source/image/i_visai.svg')}}">
								</div>
							</li>
							<li class="global-card-item">
								<div class="global-card-item-thumb">
									<img src="{{asset('source/image/i_jcb.svg')}}">
								</div>
							</li>
							<li class="global-card-item">
								<div class="global-card-item-thumb">
									<img src="{{asset('source/image/i_usa_express.svg')}}">
								</div>
							</li>
						</ul>
					</div>
					<br/>
					<h3 class="title">Quét mã QR</h3>
					<div class="payment-method-content">
						<img src="{{asset('source/image/btn_qrcode.svg')}}" class="qrcode">
					</div>
					<br/>
					<h3 class="title">Thanh toán ngân hàng</h3>
					<div class="payment-method-content">
						<div class="grid-five-column">
							<img src="{{asset('source/image/pvbank.svg')}}">
							<img src="{{asset('source/image/scb.svg')}}">
							<img src="{{asset('source/image/tpbank.svg')}}">
							<img src="{{asset('source/image/vib.svg')}}">
							<img src="{{asset('source/image/viettinbank.svg')}}">
							<img src="{{asset('source/image/vpbank.svg')}}">
							<img src="{{asset('source/image/pvbank.svg')}}">
							<img src="{{asset('source/image/scb.svg')}}">
							<img src="{{asset('source/image/tpbank.svg')}}">
							<img src="{{asset('source/image/vib.svg')}}">
							<img src="{{asset('source/image/viettinbank.svg')}}">
							<img src="{{asset('source/image/vpbank.svg')}}">
						</div>
					</div>
			    </div>
			    <div class="x-symbol icon">
			    	<img src="{{asset('source/image/x.svg')}}">
			    </div>
			</div>
		  </div>
		</div>
    </div>
</div>
@endsection