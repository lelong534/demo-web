@extends('child', 
    [
        'title' => 'Tiện ích',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Tiện ích',
        'page_link_third_level' => 'Thêm số điện thoại'
    ]
)

@section('content')
<div class="body-content utilities">
	<div class="card-no-bg-mobile utilities">
		<form> 
			<div class="input-box">
                <input type="text" class="input-box-data" placeholder="Số điện thoại">	
                <span><img src="{{asset('source/image/i_sdt.svg')}}" alt="" class="input-box-icon"></span>
            </div>
            <div class="input-box">
                <select type="text" name="category" class="input-box-data" style="margin-bottom: 0.2rem;">
                    <option disabled selected>Số tiền</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <span><img src="{{asset('source/image/i_sotien.svg')}}" alt="" class="input-box-icon"></span>
                <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
            	<div class="text-note-right">Thuê bao trả trước</div>
            </div>
            <div class="input-box list-bank-acc-box">
            	<h3 class="title">Phương thức thanh toán</h3>
            	<ul class="list-bank-acc">
            		<li class="bank-acc-item">
            			<div class="m-card__top">
							<img src="{{asset('source/image/i_jscb.svg')}}" class="m-card__top-thumb">
							<div class="m-card__top-content">
								<h3 class="title">Vietnam Prosperity JSCB</h3>
								<p>*2426</p>
							</div>
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
						</div>
            		</li>
            		<li class="bank-acc-item">
            			<div class="m-card__top">
							<img src="{{asset('source/image/i_jscb.svg')}}" class="m-card__top-thumb">
							<div class="m-card__top-content">
								<h3 class="title">Vietnam Prosperity JSCB</h3>
								<p>*2426</p>
							</div>
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
						</div>
            		</li>
            	</ul>
            </div>
            <div class="note-left">Lưu ý: Nếu tài khoản < 5.000 đ, số điện thoại đăng ký sẽ được tự động nạp số tiền đã chọn.</div>
            <div class="submit-box">
	            <a href="#" class="btn-relative-fit">Xác nhận</a>
	        </div>
		</form>
	</div>
</div>
@endsection