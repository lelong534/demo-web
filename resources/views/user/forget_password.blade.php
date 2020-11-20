@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'Đăng nhập',
        'page_link_second_level' => 'Quên mật khẩu'
    ]
)

@section('content')
<div class="body-content">
    <div class="login-content">
	    <div class="login-content">
	    	<div class="card-no-bg-mobile" id="normal-login">
	    		<div class="login-body">
	    			<div class="input-box">
			            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nhập số điện thoại">	
			            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
			        </div>
			        <div class="input-box">
			            <input type="password" name="password" id="password" class="input-box-data" placeholder="Đặt mật khẩu mới">	
			            <span><img src="{{asset('source/icon_mobile/icon_lock.svg')}}" class="input-box-icon"/></span>
			        </div>
			        <div class="input-box">
			            <input type="password" name="rewrite_password" id="rewrite_password" class="input-box-data" placeholder="Xác nhận mật khẩu mới">	
			            <span><img src="{{asset('source/icon_mobile/icon_lock.svg')}}" class="input-box-icon"/></span>
			        </div>
	    			<div class="button">Tiếp tục</div>
	    		</div>
		    </div>
		</div>
	</div>
</div>
@endsection