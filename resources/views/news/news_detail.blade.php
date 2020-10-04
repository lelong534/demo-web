@extends('base', ['title' => 'Tin tức'])

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
		        <h2 class="text-primary">Tin tức</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"       
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2 class="text-primary">Tin tức sự kiện</h2>
		    </div>
		    <div class="content-title is-mobile">
		        Tin tức sự kiện
		    </div>

		    <!-- TIN CHÍNH -->
		    <div class="news-detail-content">
    			<div class="title">MobiFone được bình chọn vào Top 24 doanh nghiệp có lợi nhuận tốt nhất năm 2020</div>
    			<div class="content">MobiFone được bình chọn trong “Top 500 doanh nghiệp có lợi nhuận tốt nhất Việt Nam năm 2020” do Công ty cổ phần Báo cáo Đánh giá Việt Nam (Vietnam Report) công bố ngày 10/9/2020.<br/>Theo bảng danh sách này, Tổng công ty Viễn thông MobiFone đã vinh dự đứng thứ 24, tăng một bậc so với vị trí trong bảng xếp hạng năm 2019, đồng thời cũng là một trong hai trong doanh nghiệp viễn thông có lợi nhuận cao nhất trong năm.</div>
    			<img src="{{asset('source/image/news-detail.png')}}">
    			<div class="content">Với mục đích tôn vinh các doanh nghiệp tiêu biểu đạt thành tích kinh doanh vượt trội, có khả năng sinh lời tốt và là những cột trụ của nền kinh tế Việt Nam trong tương lai, bảng xếp hạng 500 doanh nghiệp Việt Nam có lợi nhuận tốt nhất dựa trên kết quả nghiên cứu và đánh giá độc lập theo chuẩn mực quốc tế của Công ty Vietnam Report, với sự tư vấn của các chuyên gia uy tín trong và ngoài nước, được định kỳ công bố thường niên từ năm 2017. Các doanh nghiệp lọt vào Bảng xếp hạng Profit500 là các doanh nghiệp có hoạt động sản xuất kinh doanh hiệu quả và có hiệu suất sinh lời tốt, mặc dù phải đối mặt với nhiều khó khăn, thách thức từ sự bùng phát của đại dịch COVID-19 trên phạm vi toàn cầu với những diễn biến hết sức phức tạp. Tiêu chí đánh giá được thể hiện qua các chỉ tiêu doanh thu, lợi nhuận trước thuế trong năm gần nhất, có tính đến các yếu tố quy mô tài sản, quy mô lao động và uy tín trên truyền thông.<br/>Bên cạnh việc sử dụng hiệu quả nguồn vốn nhà nước, với năng suất lao động cao nhất trong khối doanh nghiệp nhà nước, khoảng 9 tỷ đồng/người/năm, MobiFone là một trong những đơn vị đóng góp tích cực cho xã hội. Đặc biệt là trong thời gian bùng phát dịch bệnh COVID-19, MobiFone là doanh nghiệp được xã hội đánh giá là đơn vị tích cực đồng hành cùng công tác phòng chống dịch, từ các bản tin ngắn tuyên truyền các thông tin của Bộ Y tế tới hàng chục triệu khách hàng phổ biến về cách thức phòng chống dịch bệnh đến việc tăng cường mạng lưới đến việc tăng dung lượng phục vụ các khu vực cách ly tập trung, tăng dung lượng data tặng khách hàng, miễn phí các gói cước cho lực lượng tuyến đầu chống dịch. Dấu ấn của MobiFone năm 2020 còn là các giải pháp CNTT hiệu quả phục vụ cho thời kỳ giãn cách xã hội, làm việc từ xa với các giải pháp văn phòng điện tử, góp phần tạo lập một trạng thái “bình thường mới”, phát triển sản xuất kinh doanh trong thời kỳ dịch bệnh.</div>
    			<div class="share-box">
    				<a href="#"><div class="button">Yêu thích</div></a>
    				<a href="#"><div class="button">Facebook</div></a>
    				<a href="#"><div class="button">Chia sẻ</div></a>
    			</div>
    		</div>

    		<!-- OTHER NEWS -->
    		<div class="service-content news-page">
                <div class="content-header">
                    <h2>Tin tức khác</h2>
                </div>
                <div class="lightSlider"> 
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/image/news4.png')}}">
                        </div>
                        <div class="m-card-body">
                            MobiFone tặng 5GB miễn phí khi cài ứng dụng Bluezone
                        </div>
                        <div class="time">
                            Thứ hai, 01/09/2020
                        </div>
                    </div>
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/image/news2.png')}}">
                        </div>
                        <div class="m-card-body">
                            MobiFone tặng 120 GB co học sinh, sinh viên vùng dịch đến hết năm 2020
                        </div>
                        <div class="time">
                            Thứ hai, 01/09/2020
                        </div>
                    </div>
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/image/news3.png')}}">
                        </div>
                        <div class="m-card-body">
                            Ưu đãi “chồng” ưu đãi chào tháng 9 cùng MobiFone
                        </div>
                        <div class="time">
                            Thứ hai, 01/09/2020
                        </div>
                    </div>
                    <div class="m-card service">
                        <div class="content-image">
                            <img src="{{asset('source/icon_mobile/tiktok.png')}}">
                        </div>
                        <div class="m-card-body">
                            Ưu đãi “chồng” ưu đãi chào tháng 9 cùng MobiFone
                        </div>
                        <div class="time">
                            Thứ hai, 01/09/2020
                        </div>
                    </div>
                </div>
                <div class="content-footer">
                    <a href="#">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection