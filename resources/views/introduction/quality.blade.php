@extends('application', ['title' => 'Giới thiệu'])

@section('content') 
<div id="menu-wrapper">
    <ul id="introduction-menu">
	    <li><a href="{{route('introduction_history')}}"><h3 class="active">Giới thiệu chung</h3></a></li>
	    <li><a href="{{route('introduction_cooperate')}}"><h3>Hợp tác với Mobifone</h3></a></li>
	    <li><a href="{{route('introduction_partner')}}"><h3>Đối tác</h3></a></li>
	    <li><a href="{{route('customer_location')}}"><h3>Điểm cung cấp dịch vụ viễn thông</h3></a></li>
	    <li><a href="{{route('introduction_structure')}}"><h3>Cửa hàng bán lẻ</h3></a></li>
	</ul>
</div>
<div class="introduction-content"> 	 	
	<div class="theme-title">
	    Chất lượng dịch vụ
	</div>
	<div class="introduction-body">
	    <div class="content">
			1. Các dịch vụ được cung cấp
			<br/><br/>
			2. Các quy chuẩn kỹ thuật, tiêu chuẩn áp dụng cho các dịch vụ được cung cấp
			<br/><br/>
			3. Bản công bố chất lượng
			<br/><br/>
			4. Báo cáo định kỳ về chất lượng
			<br/><br/>
			5. Kết quả tự kiểm tra định kỳ
			<br/><br/>
			6. Địa chỉ tiếp nhận khiếu nại
			<br/><br/>
			7. Quy trình tiếp nhận khiếu nại
			<br/><br/>
			8. Thông tin hỗ trợ khách hàng
		</div>
	</div>
    @include('common.theme-introduction')
</div>

@endsection