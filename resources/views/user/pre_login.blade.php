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
	        <a class="btn-border" href="#">Tiếp tục</a> 
    	</div>
    </div>
</div>
@endsection