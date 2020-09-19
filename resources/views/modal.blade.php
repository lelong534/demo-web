<!-- Modal -->
<form action="{{route('detail', $job->id)}}" enctype="multipart/form-data" method="POST">
	{{ csrf_field() }}
	<div class="modal fade" id="uploadCV" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
			<div class="modal-content px-4">
				<div class="modal-header-btn">
					<span aria-hidden="true" id="modal-close-btn" style="font-size: 56px;">&times;</span>
				</div>
				<div class="modal-body m-modal-body">
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
				            <input type="text" name="name" class="input-box-data" placeholder="Họ tên">					     
				            <span><img src="{{asset('source/icons/icon-person_gray.svg')}}" class="input-box-icon"/></span>
				            <span class="icon-require-name icon-require">*</span>
				        </div>
				        <div class="input-box">
				            <input type="text" name="email" class="input-box-data" placeholder="Email">
				            <span><img src="{{asset('source/icons/icon-email.svg')}}" class="input-box-icon"/></span>
				            <span class="icon-require-email icon-require">*</span>
				        </div>
				        <div class="input-box">
				            <input type="text" name="phone" class="input-box-data" placeholder="Số điện thoại">	
				            <span><img src="{{asset('source/icons/icon-phone_gray.svg')}}" class="input-box-icon"/></span>
				        </div>
					</div>
					<div class="modal-body-item">
						<div class="card-job-title">Hồ sơ của bạn</div>
						<div class="input-box">
							<div class="custom-input-file">
					            <input type="file" name="cv" class="file-upload-field">
					            <label class="file-upload-label">Chọn từ máy tính</label>
					            <span><img src="{{asset('source/icons/icon-file_gray.svg')}}" class="input-box-icon"/></span>
					        </div>
				        </div>
					</div>
					<div class="modal-body-item">
						<div class="card-job-title">Thư giới thiệu</div>
				        <div class="input-box">
				            <textarea type="text" name="invitation" style="height: 112px; padding-top: 12px;" class="input-box-data" placeholder="Viết thư giới thiệu (không bắt buộc)" ></textarea>
				            <span><img src="{{asset('source/icons/icon-letter_gray.svg')}}" class="input-box-icon"/></span>
				        </div>
					</div>
				</div>
				<div class="submit-box">
					<button class="submitbtn"  type="submit">Nộp đơn</button>
				</div>
			</div>
		</div>
	</div>
</form>