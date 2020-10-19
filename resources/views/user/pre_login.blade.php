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
		    	<div class="card-no-bg-mobile">
	    			<div class="input-box">
			            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nhập số điện thoại">	
			            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
			        </div>
			        <a href="{{route('login')}}" class="button">Tiếp tục</a>
		    	</div>
		    </div>
		</div>
	</div>
</main>
@endsection