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
	    <div class="login-content">
	    	<div class="card-no-bg-mobile login-body__method">
    			<ul class="nav">
    				<li data-method-login-target="#quick-login" class="active">Đăng nhập nhanh</li>
    				<li data-method-login-target="#normal-login">Đăng nhập bằng mật khẩu</li>
    			</ul>
    			<div id="quick-login" data-method-login-content>
    				<div class="m-card">
    					<p>Mở app để quét QR code</p>
    					<img class="qrcode" alt="qrcode" src="{{asset('source/icon_mobile/qrcode.svg')}}">
    					<div>
    						<div class="line-bg-white"></div>
    						<p>Hoặc đăng nhập qua</p>
    					</div>
    					<div class="social-media">
    						<a href="{{ url('/auth/redirect/facebook') }}">
	    						<div class="social-media__box">
	    							<img src="{{asset('source/icon_mobile/i_fb_2@1x.svg')}}" alt="..">
	    							<div class="name">Facebook</div>
	    						</div>
	    					</a>
    						<div class="social-media__box">
    							<img src="{{asset('source/icon_mobile/i_apple_2@1x.svg')}}" alt="..">
    							<div class="name">Apple</div>
    						</div>
    						<a href="{{ url('/auth/redirect/google') }}">
	    						<div class="social-media__box">
	    							<img src="{{asset('source/icon_mobile/i_Google_2@1x.svg')}}" alt="..">
	    							<div class="name">Google</div>
	    						</div>
	    					</a>
    						<div class="social-media__box">
    							<img src="{{asset('source/icon_mobile/icon_phone.svg')}}" alt="..">
    							<div class="name">OTP</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<form action="{{ route('login') }}" method="POST" id="loginForm">
					@csrf
	    			<div id="normal-login" data-method-login-content class="hidden">
		    			<div class="input-box">
				            <input type="text" name="phone" id="phone" class="input-box-data @error('phone') is-invalid @enderror" placeholder="Nhập số điện thoại" value="{{ old('phone') }}">	
				            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>

				            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
				        </div>
				        <div class="input-box">
				            <input type="text" name="password" id="password" class="input-box-data @error('password') is-invalid @enderror" placeholder="Mật khẩu">	
				            <span><img src="{{asset('source/icon_mobile/icon_lock.svg')}}" class="input-box-icon"/></span>

				            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
				        </div>
				        <div class="submit-box">
			    			<button type="submit" class="button">Đăng nhập</button>
			    			<span><a href="{{route('forget_password')}}" class="forget-password">Quên mật khẩu</a></span>
			    		</div>
	    			</div>
	    		</form>
    		</div>
	    </div>
	</div>
</div>
@endsection