@extends('base', ['title' => 'Gửi phản ánh'])

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
		        <h2>Hỗ trợ khách hàng</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"       
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2 class="text-primary">Gửi phản ánh</h2>
		    </div>
		    <div class="content-title is-mobile">
		        Gửi phản ánh
		    </div>

		    <!-- CONTENT BODY -->
		    <div class="reflect-content">
		    	<div class="reflect-body">
	    			<div class="input-box">
			            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nhập số điện thoại">	
			            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
			        </div>
			        <div class="input-box">
			            <select type="text" name="topic" class="input-box-data">
			            	<option>Chọn chủ đề</option>
			                <option>Marketing</option>
			                <option>Công nghệ thông tin</option>
			                <option>Design</option>
			            </select>
			            <span><img src="{{asset('source/icons/icon-topic.svg')}}" class="input-box-icon"/></span>
			            <span><img src="{{asset('source/icons/caret-arrow-up.svg')}}" class="icon-right"/></span>
			        </div>
			        <h3>Yêu cầu liên hệ lại</h3>
			        <div class="input-box checkbox">
			        	<div class="form-check form-check-inline">
						    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
						    <label class="form-check-label" for="inlineRadio1">Gọi lại</label>
						</div>
						<div class="form-check form-check-inline">
						    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						    <label class="form-check-label" for="inlineRadio2">SMS</label>
						</div>
						<div class="form-check form-check-inline">
						    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
						    <label class="form-check-label" for="inlineRadio3">Email</label>
						</div>
			        </div>
			        <div class="input-box">
			            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Nhập số điện thoại liên hệ">	
			            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
			        </div>
			        <h3>Nội dung</h3>
			        <div class="input-box">
			            <textarea type="text" name="invitation" style="height: 112px; padding-top: 0.8rem;" class="input-box-data" placeholder="Viết thư giới thiệu (không bắt buộc)" ></textarea>
			            <span><img src="{{asset('source/icons/icon-letter_gray.svg')}}" class="input-box-icon"/></span>
			        	<p class="note">Tối đa 500 kí tự</p>
			        </div>
			        <a href="{{route('customer_question')}}" class="button">Tiếp tục</a>
		    	</div>
		    </div>
		</div>
	</div>
</main>

@endsection