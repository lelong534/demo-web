@extends('child', 
    [
        'title' => 'Tiện ích',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Tiện ích'
    ]
)

@section('content')
<div class="body-content utilities">
	<ul class="menu-list-items">
		<li class="menu-item active" data-tab-target="#pay">
			<div class="menu-item__thumb">
				<img src="{{asset('source/image/i_naptien.svg')}}" alt="">
			</div>
			<p>Nạp tiền</p>
		</li>
		<li class="menu-item" data-tab-target="#bank_payment">
			<div class="menu-item__thumb">
				<img src="{{asset('source/image/i_bankpayment.svg')}}" alt="">
			</div>
			<p>Thanh toán ngân hàng</p>
		</li>
		<li class="menu-item" data-tab-target="#autopay">
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
	<div class="card-no-bg-mobile utilities" id="pay" data-tab-content>
		<form> 
			<div class="input-box">
                <input type="text" class="input-box-data" placeholder="Số điện thoại">	
                <span><img src="{{asset('source/image/i_sdt.svg')}}" alt="" class="input-box-icon"></span>
            </div>
            <div class="input-box">
                <select type="text" name="category" class="input-box-data">
                    <option disabled selected>Số tiền</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <span><img src="{{asset('source/image/i_sotien.svg')}}" alt="" class="input-box-icon"></span>
                <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
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
	<div class="card-no-bg-mobile utilities hidden" id="bank_payment" data-tab-content>
		<form> 
			<div class="input-box">
                <input type="text" class="input-box-data" placeholder="Số điện thoại">	
                <span><img src="{{asset('source/image/i_sdt.svg')}}" alt="" class="input-box-icon"></span>
            </div>
            <div class="input-box">
                <select type="text" name="category" class="input-box-data">
                    <option disabled selected>Số tiền</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <span><img src="{{asset('source/image/i_sotien.svg')}}" alt="" class="input-box-icon"></span>
                <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
            </div>
	        <div class="input-box">
		        <ul class="grid-five-column">
		        	<li class="face-value">10.000 đ</li>
		        	<li class="face-value">20.000 đ</li>
		        	<li class="face-value active">50.000 đ</li>
		        	<li class="face-value">100.000 đ</li>
		        	<li class="face-value">150.000 đ</li>
		        	<li class="face-value">200.000 đ</li>
		        	<li class="face-value">250.000 đ</li>
		        	<li class="face-value">300.000 đ</li>
		        	<li class="face-value">350.000 đ</li>
		        	<li class="face-value">400.000 đ</li>
		        	<li class="face-value">450.000 đ</li>
		        	<li class="face-value">500.000 đ</li>
		        	<li class="face-value">550.000 đ</li>
		        	<li class="face-value">1.000.000 đ</li>
		        	<li class="face-value">1.500.000 đ</li>
		        </ul>
		    </div>
	        <div class="input-box pay-method">
	        	<h3 class="title" style="margin-bottom: 1rem;">Phương thức thanh toán</h3>
	        	<div class="input-box">
	                <select type="text" name="category" class="input-box-default">
	                    <option disabled selected>Chọn phương thức thanh toán</option>
	                    <option>Thanh toán tiền mặt</option>
	                    <option>Thanh toán bằng tài khoản ngân hàng</option>
	                </select>
	                <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
	            </div>
	        </div>
			<div class="input-box">
				<div class="form-check">
				    <input class="form-check-input" type="checkbox" id="gridCheck1">
			        <label class="form-check-label" for="gridCheck1">
			         	Tôi đã đọc và đồng ý với <a href="#">điều khoản và quy định</a>
			        </label>
			    </div>
			</div>
            <div class="submit-box">
	            <a href="#" class="btn-relative-fit">Tiếp tục</a>
	        </div>
		</form>
	</div>
	<div class="utilities hidden" id="autopay" data-tab-content>
		<h2 class="title">Tự tạo gói cước</h2>
		<div class="grid-two-column">
			<div class="m-card">
				<div class="m-card__top">
					<img src="{{asset('source/image/i_jscb.svg')}}" class="m-card__top-thumb">
					<div class="m-card__top-content">
						<h3 class="title">Vietnam Prosperity JSCB</h3>
						<p>*2426</p>
					</div>
				</div>
				<div class="m-card__content">
					<ul>
						<li>
							<img src="{{asset('source/image/i_phone_light.svg')}}" class="icon">
							<div>
								<h3 class="title">0123456789</h3>
								<p>Thuê bao trả sau</p>
							</div>
						</li>
						<li>
							<img src="{{asset('source/image/i_hethan_light.svg')}}" class="icon">
							<p>Ngày thanh toán: 05 hằng tháng</p>
						</li>
					</ul>
					<a href="#" class="btn-bg-white" style="margin-top: 1.5rem;">Hủy</a>
				</div>
			</div>
			<div class="m-card no-phone-number">
				<div class="m-card__top">
					<img src="{{asset('source/image/i_jscb.svg')}}" class="m-card__top-thumb">
					<div class="m-card__top-content">
						<h3 class="title">Vietnam Prosperity JSCB</h3>
						<p>*2426</p>
					</div>
				</div>
				<ul class="m-card__content">
					<li><img src="{{asset('source/image/i_nopack.svg')}}" alt="..." class="no-phone"></li>
					<li><div class="des">Chưa thêm số điện thoại</div></li>
				</ul>
			</div>
		</div>
		<div class="submit-box d-flex">
            <a href="#" class="btn-border-long">Thêm số điện thoại</a>
            <a href="#" class="btn-border-long">Thêm thẻ thanh toán</a>
        </div>
	</div>
</div>
@endsection