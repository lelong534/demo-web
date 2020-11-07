@extends('child', 
    [
        'title' => 'Tiện ích',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Tiện ích'
    ]
)

@section('content')
<div class="body-content utilities payment-method">
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
	<div class="payment-method-content">
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
@endsection