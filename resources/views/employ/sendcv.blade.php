@extends('base', ['title' => 'Tuyển dụng'])

@section('content')
<!-- content -->
@include('common.banner_employ')
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
                <h2>Tuyển dụng</h2>&nbsp;&nbsp;&nbsp;
                <span>
                    <img 
                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                        class="icon"       
                    />
                </span>&nbsp;&nbsp;&nbsp;
                <h2>Chi tiết tuyển dụng</h2>&nbsp;&nbsp;&nbsp;
                <span>
                    <img 
                        src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                        class="icon"       
                    />
                </span>&nbsp;&nbsp;&nbsp;
                <h2 class="text-primary">Nộp đơn</h2>
            </div>
            <div class="content-title is-mobile">
                Nộp đơn ứng tuyển
            </div>

			<!-- content -->
			<div class="sendcv-content">
				<form action="" enctype="multipart/form-data" method="POST" id="sendcvForm">
					{{ csrf_field() }}

					<ul class="card-job-body is-mobile">
						<h3 class="title">Tên công việc</h3>
						<li class="item">
			                <img src="{{asset('source/icons/icon-person.svg')}}" alt="location" class="icon-small"/>
			        		Chức danh: Developer
			    		</li>
			            <li class="item">
			            	<img src="{{asset('source/icons/icon-location.svg')}}" alt="time" class="icon-small"/>
			            	Nơi làm việc: Hà Nội
			            </li>
			            <li class="item">
			            	<img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small"/>
			    			Mức lương: 10.000.000 đ - 20.000.000 đ
			    		</li>
					</ul>
					<div class="modal-body-item">
						<h3 class="title">Thông tin của bạn</h3>
						<div class="grid-input">
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Họ tên"> 
					            <span>
					            	<img src="{{asset('source/icons/icon-person_gray.svg')}}" class="input-box-icon"/>
					            </span>
					            <!-- <span class="icon-require-name icon-require">*</span> -->
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Ngày sinh"> 
					            <span>
					            	<img src="{{asset('source/icons/icon-person_gray.svg')}}" class="input-box-icon"/>
					            </span>
					            <!-- <span class="icon-require-name icon-require">*</span> -->
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Địa chỉ">
					            <span>
					            	<img src="{{asset('source/icons/icon-email.svg')}}" class="input-box-icon"/>
					            </span>
					            <!-- <span class="icon-require-email icon-require">*</span> -->
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Trình độ"> 
					            <span>
					            	<img src="{{asset('source/icons/icon-person_gray.svg')}}" class="input-box-icon"/>
					            </span>
					            <!-- <span class="icon-require-name icon-require">*</span> -->
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Email">	
					            <span>
					            	<img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/>
					            </span>
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Số điện thoại">
					            <span>
					            	<img src="{{asset('source/icons/icon-email.svg')}}" class="input-box-icon"/>
					            </span>
					            <!-- <span class="icon-require-email icon-require">*</span> -->
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Facebook"> 
					            <span>
					            	<img src="{{asset('source/icons/icon-person_gray.svg')}}" class="input-box-icon"/>
					            </span>
					            <!-- <span class="icon-require-name icon-require">*</span> -->
					        </div>
					        <div class="input-box">
					            <input type="text" class="input-box-data" placeholder="Website cá nhân">	
					            <span>
					            	<img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/>
					            </span>
					        </div>
					    </div>
					</div>
					<div class="modal-body-item">
						<h3 class="title">Hồ sơ của bạn</h3>
						<div class="input-box">
							<div class="custom-input-file">
					            <input type="file" id="cv" class="input-box-data" data-validation="size" data-validation-max-size="3M">
					            <label class="file-upload-label" for="cv">Chọn từ máy tính</label>
					            <span><img src="{{asset('source/icons/icon-file_gray.svg')}}" class="input-box-icon"/></span>
					        </div>
				        </div>
				        <div class="text-note-right">Hồ sơ định dạng: doc, pdf, xls, xlsx & không quá 2 MB</div>
					</div>
					<div class="modal-body-item last">
						<h3 class="title">Thư giới thiệu</h3>
				        <div class="input-box">
				            <textarea type="text" name="invitation" style="height: 112px; padding-top: 12px;" class="input-box-data" placeholder="Viết thư giới thiệu (không bắt buộc)" ></textarea>
				            <span><img src="{{asset('source/icons/icon-letter_gray.svg')}}" class="input-box-icon"/></span>
				        </div>
				        <div class="text-note-right">Tối đa 3000 kí tự</div>
					</div>
					<a href="#" class="btn-relative-fit">Nộp đơn</a>
				</form>
			</div>
		</div>
	</div>
</main>
@endsection