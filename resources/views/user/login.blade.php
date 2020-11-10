@extends('base', ['title' => 'Đăng nhập'])

@section('content')
<main class="l-main">
	<div class="main-content">
        <div class="inner">
        	<div class="content-title is-desktop">
		        <h2>Trang chủ</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"       
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2>Đăng nhập</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"       
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2 class="text-primary">Đăng nhập bằng OTP</h2>
		    </div>
		    <div class="content-title is-mobile">
		        Đăng nhập bằng OTP
		    </div>

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
	    						<div class="social-media__box">
	    							<img src="{{asset('source/icon_mobile/i_Google_2@1x.svg')}}" alt="..">
	    							<div class="name">Google</div>
	    						</div>
	    						<div class="social-media__box">
	    							<img src="{{asset('source/icon_mobile/icon_phone.svg')}}" alt="..">
	    							<div class="name">OTP</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div id="normal-login" data-method-login-content class="hidden">
		    			<div class="input-box">
				            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nhập số điện thoại">	
				            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
				        </div>
				        <div class="input-box">
				            <input type="text" name="password" id="password" class="input-box-data" placeholder="Mật khẩu">	
				            <span><img src="{{asset('source/icon_mobile/icon_lock.svg')}}" class="input-box-icon"/></span>
				        </div>
				        <div class="submit-box">
			    			<a href="#" class="button">Đăng nhập</a>
			    			<span><a href="{{route('forget_password')}}" class="forget-password">Quên mật khẩu</a></span>
			    		</div>
	    			</div>
	    		</div>
		    </div>
		</div>
	</div>
</main>
@endsection