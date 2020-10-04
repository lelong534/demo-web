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
		        <h2 class="text-primary">Tin tức</h2>
		    </div>
		    <ul class="events-menu is-desktop">
		    	<li><a href="#"></a>Tất cả</li>
		    	<li class="active"><a href="#"></a>Chương trình khuyến mãi</li>
		    	<li><a href="#"></a>Tin tức sự kiện</li>
		    	<li><a href="#"></a>Thông cáo báo chí</li>
		    </ul>
		    <div class="content-title is-mobile">
		        Tin tức sự kiện
		    </div>

		    <!-- TIN CHÍNH -->
		    <div class="events-content news-page">
		    	<div class="content-body">
				    <div class="m-card events"> 
	                    <div class="content-image">
	                        <img src="{{asset('source/image/news1.png')}}">
	                    </div>
	                    <p class="title">Khuyến mãi</p>
	                    <div class="m-card-body">
	                        MobiFonetăngk 100k mua sắm Tiki cho hội viên kết nối dài lâu.
	                    </div>
	                </div>
	                <div class="m-card event-nd">
	                    <div class="event-image">
	                        <img src="{{asset('source/image/news2.png')}}">
	                    </div>
	                    <div class="event-nd-content">
	                    	<p class="title">Khuyến mãi</p>
	                        <p class="content">
	                        	MobiFone tặng 5GB miễn phí khi cài ứng dụng Bluezone
	                        </p>
	                    </div>
	                </div>
	                <div class="m-card event-nd">
	                    <div class="event-image">
	                        <img src="{{asset('source/image/news3.png')}}">
	                    </div>
	                    <div class="event-nd-content">
	                    	<p class="title">Khuyến mãi</p>
	                        <p class="content">
	                        	MobiFone tặng 120 GB co học sinh, sinh viên vùng dịch đến hết năm 2020
	                        </p>
	                    </div>
	                </div>
	                <div class="m-card event-nd">
	                    <div class="event-image">
	                        <img src="{{asset('source/image/news4.png')}}">
	                    </div>
	                    <div class="event-nd-content">
	                    	<p class="title">Khuyến mãi</p>
	                        <p class="content">
	                        	Ưu đãi “chồng” ưu đãi chào tháng 9 cùng MobiFone
	                        </p>
	                    </div>
	                </div>
	            </div>
            </div>

            <!-- TIN KHÁC -->
            <div class="other-news">
            	<div class="title">Tin tức khác</div>
            		<div class="other-news__content">
		                <div class="news-item">
		                    <div class="news-image">
		                        <img src="{{asset('source/image/news_other1.png')}}">
		                    </div>
		                    <div class="news-content">
		                    	<a href="{{route('news_detail')}}"><p class="title">Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</p></a>
		                        <p class="content">
		                        	Tour du lịch Nha Trang thì có rất nhiều, có thể lên hàng chục đến trăm tour khác nhau. Một con số phải nói là rất ấn tượng nếu so về số lượng đối với các khu vực lân cận. Sở dĩ có được điều này có lẽ phải cảm ơn ông Trời đã ưu ái đối với nơi đây, ban cho quá nhiều cảnh đẹp, ngoài những khu du lịch nổi tiếng gắn liền với những địa điểm du lịch Nha Trang mà các bạn đã từng biết thì nơi này còn rất nhiều nàng công chúa đang ngủ quên đang chờ ngày được đánh thức để phục vụ cho niềm đam …
		                        </p>
		                    </div>
		                </div>
		                <div class="news-item">
		                    <div class="news-image">
		                        <img src="{{asset('source/image/news_other2.png')}}">
		                    </div>
		                    <div class="news-content">
		                    	<a href="{{route('news_detail')}}"><p class="title">Phòng Deluxe Ocean View 2N1DD - Vinperl Nha Trang Resort</p></a>
		                        <p class="content">
		                        	Tour du lịch Nha Trang thì có rất nhiều, có thể lên hàng chục đến trăm tour khác nhau. Một con số phải nói là rất ấn tượng nếu so về số lượng đối với các khu vực lân cận. Sở dĩ có được điều này có lẽ phải cảm ơn ông Trời đã ưu ái đối với nơi đây, ban cho quá nhiều cảnh đẹp, ngoài những khu du lịch nổi tiếng gắn liền với những địa điểm du lịch Nha Trang mà các bạn đã từng biết thì nơi này còn rất nhiều nàng công chúa đang ngủ quên đang chờ ngày được đánh thức để phục vụ cho niềm đam …
		                        </p>
		                    </div>
		                </div>
		                <div class="news-item">
		                    <div class="news-image">
		                        <img src="{{asset('source/image/news_other3.png')}}">
		                    </div>
		                    <div class="news-content">
		                    	<a href="{{route('news_detail')}}"><p class="title">Khám phá Singapore - Indonesian - Malaysia</p></a>
		                        <p class="content">
		                        	Một chuyến thăm khu Marina Bay đảm bảo sẽ thỏa mãn mọi giác quan của bạn. Công cuộc lấn biển chỉ bắt đầu vào những năm 1970, vì vậy sự chuyển mình của khu vực này quả thực là một điều kỳ diệu. Chiêm ngưỡng các công trình kiến trúc lừng danh nằm trên đường chân trời đầy ấn tượng, hoặc khoe với người khác rằng bạn đã được ngắm một số khung cảnh đẹp nhất thế giới tại Sands SkyPark® ở Marina Bay Sands®, do kiến trúc sư lừng danh Moshe Safdie thiết kế.
		                        </p>
		                    </div>
		                </div>
		            </div>
				    <div class="navigator" id="news-pagination">   
				        <ul class="pagination">
				            <a href="#">
				            	<li><img src="{{asset('source/icon_mobile/arrow_prev.svg')}}"></li>
				            </a>
				            <a href="#">
				            	<li class="active">1</li>
				            </a>
				            <a href="#">
				            	<li>2</li>
				            </a>
				            <a href="#">
				            	<li>3</li>
				            </a>
				            <a href="#">
				            	<li>4</li>
				            </a>
				            <a href="#">
				            	<li>5</li>
				            </a>
				            <a href="#">
				            	<li><img src="{{asset('source/icon_mobile/arrow_next.svg')}}"></li>
				            </a>
				        </ul>
				    </div>
				</div>
			</div>
        </div>
    </div>
</main>

@endsection