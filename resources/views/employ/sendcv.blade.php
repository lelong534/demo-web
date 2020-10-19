@extends('app', ['title' => 'Tuyển dụng'])

@section('content')
<div class="content">
<div class="content-title">
	<!-- title -->
    <h3><a href="{{route('employ')}}" style="font-size: 1.75rem; color:black;">Trang chủ</a></h3>&nbsp;&nbsp;&nbsp;
    <span>
        <img 
            src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
            class="icon"                        
           />
    </span>&nbsp;&nbsp;&nbsp;
    <h3><a href="{{route('employ')}}" style="font-size: 1.75rem; color:black;">Tuyển dụng</a></h3>&nbsp;&nbsp;&nbsp;
    <span>
        <img 
            src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
            class="icon"                        
        />
    </span>&nbsp;&nbsp;&nbsp;
    <h3 class="text-primary">Chi tiết tuyển dụng</h3>
</div>
<!-- content -->
<div class="content-body">
<form action="{{ route('sendcv', $job->id) }}" enctype="multipart/form-data" method="POST" id="sendcvForm">
	{{ csrf_field() }}
	
	<div class="m-card card-sendcv">
		<div class="modal-body-item">
			<div class="card-job-title">Tên công việc</div>
			<div class="card-job-body-item">
                <img src="{{asset('source/icons/icon-person.svg')}}" alt="location" class="icon-small" />
        		Chức danh: {{$job->name}}
    		</div>
            <div class="card-job-body-item">
            	<img src="{{asset('source/icons/icon-location.svg')}}" alt="time" class="icon-small" />
            	Nơi làm việc: {{$job->address}}
            </div>
            <div class="card-job-body-item">
            	<img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
    			Mức lương: {{$job->min_salary}} đ - {{$job->max_salary}} đ
    		</div>
		</div>
		<div class="modal-body-item">
			<div class="card-job-title">Thông tin của bạn</div>
	        <div class="input-box">
	            <input type="text" name="name" id="name" class="input-box-data" placeholder="Họ tên">					     
	            <span><img src="{{asset('source/icons/icon-person_gray.svg')}}" class="input-box-icon"/></span>
	            <!-- <span class="icon-require-name icon-require">*</span> -->
	        </div>
	        <div class="input-box">
	            <input type="text" name="email" id="email" class="input-box-data" placeholder="Email">
	            <span><img src="{{asset('source/icons/icon-email.svg')}}" class="input-box-icon"/></span>
	            <!-- <span class="icon-require-email icon-require">*</span> -->
	        </div>
	        <div class="input-box">
	            <input type="text" name="phone" id="phone" class="input-box-data" placeholder="Số điện thoại">	
	            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
	        </div>
		</div>
		<div class="modal-body-item">
			<div class="card-job-title">Hồ sơ của bạn</div>
			<div class="input-box">
				<div class="custom-input-file">
		            <input type="file" name="cv" id="cv" class="file-upload-field" data-validation="size" data-validation-max-size="3M">
		            <label class="file-upload-label">Chọn từ máy tính</label>
		            <span><img src="{{asset('source/icons/icon-file_gray.svg')}}" class="input-box-icon"/></span>
		        </div>
	        </div>
	        <div class="text-note">Hồ sơ định dạng: doc, pdf, xls, xlsx & không quá 2 MB</div>
		</div>
		<div class="modal-body-item last">
			<div class="card-job-title">Thư giới thiệu</div>
	        <div class="input-box">
	            <textarea type="text" name="invitation" style="height: 112px; padding-top: 12px;" class="input-box-data" placeholder="Viết thư giới thiệu (không bắt buộc)" ></textarea>
	            <span><img src="{{asset('source/icons/icon-letter_gray.svg')}}" class="input-box-icon"/></span>
	        </div>
	        <div class="text-note-invite">Tối đa 3000 kí tự</div>
		</div>
		<div class="submit-box">
			<button class="submitbtn"  type="submit">Nộp đơn</button>
		</div>
	</div>
</form>
</div>
</div>
@endsection