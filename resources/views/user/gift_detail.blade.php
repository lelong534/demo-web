@extends('child', 
    [
        'title' => 'Thông tin tài khoản',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Kết nối dài lâu',
        'page_link_third_level' => 'Danh sách ưu đãi',
        'page_link_fourth_level' => 'Chi tiết ưu đãi'
    ]
)

@section('content')
<div class="body-content">
	<div class="gift-header">
		<div class="m-card">
			<div class="gift-header__top">
				<div class="gift-header__top-left">
					<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
					<ul>
						<li class="name"><a href="#">Vin Group</a></li>
						<li>187 Văn Cao, Tây Hồ, Hà Nội</li>
					</ul>
				</div>
				<!-- nếu tài khoản không được dùng ưu đãi -->
				@if(false) 
				<div class="gift-header--no-available">
					<img src="{{asset('source/image/i_ko_du_dk_1.svg')}}" alt="">
					<p>Ưu đãi của đối tác không dành cho quý khách. Vui lòng liên hệ 9090 để biết thêm chi tiết</p>
				</div>
				@endif
			</div>

			<!-- nếu tài khoản dùng được ưu đãi -->
			@if(true)
			<div class="line"></div>
			<div class="gift-header__top-email">
				<div class="input-box">
		            <select type="text" name="job" class="input-box-default">
		                <option value="">Nghề nghiệp</option>
		                <option>A</option>
		                <option>B</option>
		                <option>C</option>
		            </select>
		            <span><img src="{{asset('source/image/caret-arrow-up.svg')}}" class="icon-right"/></span>
		        </div>
		        <a href="#" class="btn-border">Lấy E_CODE</a>
			</div>
			<div class="line"></div>
			@else
			<div class="line"></div>
			@endif
			<!-- kết thúc -->
		</div>
	</div>
	<div class="gift-content">
		<div class="m-card">
        	<p class="text-bold">Ưu đãi:</p>
            <ul class="introduction">
                <li>Tặng phiếu giảm giá điện tử (e-code) trị giá 200.000 đồng khi sử dụng dịch vụ tại khu vui chơi SunWorld Fansipan.</li>
                <li>E-code chỉ áp dụng cho các loại vé riêng lẻ không dùng để mua combo, với hóa đơn mua vé trị giá trên 200.000đ (sau khi trừ ưu đãi)</li>
                <li>Được áp dụng đồng thời với các chương trình khuyến mại khác. </li>
                <li>Mỗi một hóa đơn thanh toán chỉ được sử dụng 01 e-code.</li>
            </ul>

            <p class="text-bold">Hạng Hội viên được hưởng ưu đãi:</p>
            <ul class="introduction">
                <li>Hội viên hạng Kim cương, hạng Vàng, hạng Titan đã được cấp thẻ. </li>
                <li>Hội viên Kim cương được tặng 10 e-code/ năm.</li>
                <li>Hội viên Vàng được tặng đãi 8 e-code/ năm.</li>
                <li>Hội viên Titan được hưởng ưu đãi 6 e-code/ năm.</li>
                <li>Số lần hưởng ưu đãi nói trên áp dụng trên toàn bộ các khu vui chơi của SunWorld thuộc chương trình.</li>
            </ul>

            <p class="text-bold">Cách thức hưởng ưu đãi:</p>
            <ul class="introduction">
                <li>Bước 1: Hội viên lấy e-code để hưởng ưu đãi theo 2 cách:<br/>
					Soạn tin nhắn LK_SUNWORLDHL_Email gửi đến 9237 (dấu “_” là một khoảng trống).</br>
					Lấy e-code trên ứng dụng My MobiFone (ấn nút Lấy E-code)
				</li>
                <li>Bước 2: Hội viên xuất trình e-code khi mua vé vào khu vui chơi SunWorld Hạ Long để được trừ vào hóa đơn thanh toán.</li>
            </ul>

            <p class="text-bold">Thời gian áp dụng ưu đãi</p>
            Đến hết 31/12/2020
        </div>
	</div>
</div>
@endsection