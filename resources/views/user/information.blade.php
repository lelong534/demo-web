@extends('child', 
    [
        'title' => 'Dịch vụ di động',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Thông tin tài khoản'
    ]
)

@section('content')
<div class="body-content">
	<div class="grid-two-column">
		<div class="m-card user-info">
			<div class="avatar-upload">
		        <div class="avatar-edit">
		            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
		        </div>
		        <label for="imageUpload" style="background-image: url('../source/image/i_thayanh.svg');"></label>
		        <div class="avatar-preview">
		            <div id="imagePreview" style="background-image: url('../source/image/avatar_default.svg');">
		            </div>
		        </div>
		    </div>
		    <div class="name">Nguyễn Thị Hoài Thu</div>
			<div class="phone">0123456789</div>
			<a href="#" class="btn-relative-long">Cập nhật thông tin</a>
		</div>

		<div class="m-card">
			<ul class="list-space">
    			<li>
    				<img src="{{asset('source/image/i_birthday.svg')}}" class="icon-small">
                    <div class="des">Ngày sinh</div>
                    <div class="value">30/12/1992</div>
    			</li>
				<li>
					<img src="{{asset('source/image/i_ngaycap.svg')}}" class="icon-small">
                    <div class="des">Ngày kích hoạt thuê bao</div>
                    <div class="value">03/05/2019</div>
				</li>
				<li>
					<img src="{{asset('source/image/i_quoctich@1x.svg')}}" class="icon-small">
                    <div class="des">Quốc tịch</div>
                    <div class="value">VNM</div>
				</li>
				<li >
					<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
                    <div class="des">Loại thuê bao</div>
                    <div class="value">Trả trước</div>
				</li>
				<li >
					<img src="{{asset('source/image/i_idcard.svg')}}" class="icon-small">
                    <div class="des">Số CMT/CCCD/Hộ chiếu</div>
                    <div class="value">123456789</div>
				</li>
				<li >
					<img src="{{asset('source/image/i_ngaycap.svg')}}" class="icon-small">
                    <div class="des">Ngày bắt đầu</div>
                    <div class="value">03/03/2020</div>
				</li>
				<li >
					<img src="{{asset('source/image/i_tiencoc.svg')}}" class="icon-small">
                    <div class="des">Tiền cọc</div>
                    <div class="value">0 đ</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection