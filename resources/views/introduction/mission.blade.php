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
	    Tầm nhìn sứ mệnh
	</div>
	<div class="introduction-body">
	    <div class="content">
	    	Mong muốn khách hàng luôn thoải mái và hài lòng khi sử dụng dịch vụ MobiFone, mỗi thành viên của MobiFone cam kết:
	    	<br/><br/>
			Mỗi khi gặp khách hàng, chúng ta sẽ:
			<br/><br/>
			<ul class="introduction">
				<li>Đón tiếp mỗi khách hàng với lời chào, cử chỉ, nụ cười, ánh mắt thân thiện. Nếu có thể, gọi tên khách hàng;</li>
				<li>Lắng nghe và phục vụ khách hàng với thái độ tôn trọng;</li>
				<li>Cố gắng tìm hiểu và dự đoán nhu cầu của khách hàng nhằm đáp ứng hơn những mong đợi của khách hàng;</li>
				<li>Cung cấp thông tin đúng về tất cả các dịch vụ, sản phẩm của MobiFone và trả lời nhanh chóng, chính xác các câu hỏi của khách hàng;</li>
				<li>Khi khách hàng có yêu cầu hoặc gặp khó khăn về sử dụng dịch vụ, chúng ta phải có trách nhiệm trước khách hàng và giải quyết hoàn chỉnh các yêu 	cầu đó cho đến khi khách hàng hài lòng;</li>
				<li>Giữ lời hứa và trung thực;</li>
				<li>Đích thân xin lỗi khách hàng khi khách hàng không hài lòng với dịch vụ của chúng ta, cho dù chúng ta có lỗi hay không;</li>
				<li>Cảm ơn khách hàng và khuyến khích khách hàng đóng góp ý kiến về việc cung cấp dịch vụ MobiFone.</li>
			</ul>
		</div>
	</div>
    @include('common.theme-introduction')
</div>

@endsection