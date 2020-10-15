@extends('child', 
    [
        'title' => 'My Mobifone',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Thông tin tài khoản'
    ]
)

@section('content')
<div class="body-content">
	<div class="user-post-paid-info-content">
		<div class="info-left">
			<div class="m-card user-post-paid-info">
				<div class="info-items">
					<img src="{{asset('source/image/avatar_default.svg')}}" class="avatar">
					<div class="info-item-list">
						<div class="name">Nguyên Thị Hoài Thu</div>
						<div class="phone">0123456789</div>
					</div>
				</div>
				<a href="#" class="btn-bg-white-fit">Chi tiết</a>
				<h3 class="title">Tổng cước tháng 9/2020</h3>
				<div class="info-items">
					<div class="price">77.000 đ</div>
				</div>
			</div>
		</div>

		<div class="info-right">
			<div class="m-card">
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>

	<div class="m-card check">
		<h3 class="title">Tra cước</h3>
		<form> 
			<div class="input-box">
                <select type="text" name="category" class="input-box-default">
                    <option value="">Chọn chủ đề</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
            </div>
            <div class="input-box">
                <select type="text" name="category" class="input-box-default">
                    <option value="">Chọn loại</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
            </div>
			<div class="btn-border">Tra cước</div>
		</form>
	</div>

	<div class="user-post-paid-info-content">
		<div class="m-card check">
			<h3 class="title">Nhận thông báo cước</h3>
			<form> 
				<div class="input-box">
	                <input type="email" name="email" class="input-box-data" placeholder="Nhập email">	
	                <span><img src="{{asset('source/icons/icon-email.svg')}}" alt="" class="input-box-icon"></span>
	            </div>
				<div class="btn-border mr-0">Đăng kí</div>
			</form>
		</div>

		<div class="m-card check">
			<h3 class="title">Email đã đăng kí</h3>
			<ul class="card-list-items">
				<li class="card-item">
					<div class="card-item__field">
						<div class="email">dinhquy@gmail.com</div>
						<div class="text-note">Chưa xác thực</div>
					</div>
					<a href="#" class="btn-bg-white-fit">Xác thực</a>
				</li>
				<li class="card-item">
					<div class="card-item__field">
						<div class="email">dinhquy@gmail.com</div>
						<div class="text-note">Đã xác thực</div>
					</div>
					<a href="#" class="btn-bg-white-fit btn-outline-danger">Hủy</a>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection