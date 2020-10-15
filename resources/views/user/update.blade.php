@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Thông tin tài khoản'
    ]
)

@section('content')
<div class="body-content">
	<div class="update-infomation-body">
		<div class="grid-two-column">
			<div>
				<div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Số điện thoại">	
			        <span><img src="{{asset('source/image/i_phone.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Ngày sinh">	
			        <span><img src="{{asset('source/image/i_ngaycap.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Quốc tịch">	
			        <span><img src="{{asset('source/image/i_quoctich@1x.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Ngành nghề">	
			        <span><img src="{{asset('source/image/i_job.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <h3>Loại giấy tờ</h3>
			    <div class="input-box checkbox">
		        	<div class="form-check form-check-inline">
					    <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio1" value="option1" checked>
					    <label class="form-check-label" for="inlineRadio1">CCCD</label>
					</div>
					<div class="form-check form-check-inline">
					    <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio2" value="option2">
					    <label class="form-check-label" for="inlineRadio2">Hộ chiếu</label>
					</div>
				</div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Họ tên">	
			        <span><img src="{{asset('source/image/i_person.svg')}}" class="input-box-icon"/></span>
			    </div>
			</div>
			<div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Địa chỉ">	
			        <span><img src="{{asset('source/image/i_location.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <h3>Giới tính</h3>
			    <div class="input-box checkbox">
		        	<div class="form-check form-check-inline">
					    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
					    <label class="form-check-label" for="inlineRadio1">Nam</label>
					</div>
					<div class="form-check form-check-inline">
					    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					    <label class="form-check-label" for="inlineRadio2">Nữ</label>
					</div>
				</div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Ngày cấp">	
			        <span><img src="{{asset('source/image/i_calandar.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <div class="input-box">
		            <select type="text" name="job" class="input-box-data">
		                <option value="">Nghề nghiệp</option>
		                <option>A</option>
		                <option>B</option>
		                <option>C</option>
		            </select>
		            <span><img src="{{asset('source/image/i_job.svg')}}" class="input-box-icon"/></span>
		            <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
		        </div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Số CMT/CCCD/Hộ chiếu">	
			        <span><img src="{{asset('source/image/i_cmt.svg')}}" class="input-box-icon"/></span>
			    </div>
			    <div class="input-box">
			        <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nơi cấp">	
			        <span><img src="{{asset('source/image/i_location.svg')}}" class="input-box-icon"/></span>
			    </div>
			</div>
		</div>
		<div class="custom-control custom-checkbox">
		  	<input type="checkbox" class="custom-control-input" id="customCheck1">
		  	<label class="custom-control-label" for="customCheck1">Tôi đã đọc và đồng ý với điều khoản và quy định</label>
		</div>
	    <a href="{{route('login')}}" class="btn-border">Xác nhận</a>
	</div>
</div>
@endsection