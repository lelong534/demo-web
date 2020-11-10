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
                        <h3 class="title">Nhập mã xác nhận</h3>
                        <p>Mã xác nhận 6 chữ số chúng tôi đã gửi đến số điện thoại: 090 450 5030</p>
                        <form method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                            <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                            <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                            <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                            <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                            <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                            <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
                        </form>
                        <div class="text-note-right">Gửi lại mã OTP</div>
                        <a class="btn-border" href="{{ url('login') }}">Đăng nhập</a>
                        <p>Mã OTP hết hạn sau 30s</p>
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