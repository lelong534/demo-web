@extends('child', 
    [
        'title' => 'Thông tin tài khoản',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Kết nối dài lâu'
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
						<div class="name">Nguyen Thi Hoai Thu</div>
						<div class="phone">0123456789</div>
					</div>
				</div>
				<a href="#" class="btn-bg-white-fit">Chi tiết</a>
				<ul class="list-items">
					<li>
						<img src="{{asset('source/image/i_trophy_cup.svg')}}" class="icon-small" alt=".">
						<div>Hội viên đồng</div>
					</li>
					<li>
						<img src="{{asset('source/image/i_creditcard.svg')}}" class="icon-small" alt=".">
						<div>Chưa đăng kí thẻ hội viên</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="info-right">
			<div class="m-card">
				<ul class="list-space">
					<li>
						<div class="name">Điểm tích lũy tháng</div>
						<div class="value text-blue-bold">339</div>
					</li>
					<li>
						<div class="name">Điểm xét hạng tháng</div>
						<div class="value text-blue-bold">339</div>
					</li>
					<li>
						<div class="name">Bắt đầu chu kỳ</div>
						<div class="value text-blue-bold">05/06/2020</div>
					</li>
					<li>
						<div class="name">Kết thúc chu kỳ</div>
						<div class="value text-blue-bold">20/06/2020</div>
					</li>
					<li>
						<div class="name">Tổng điểm tích luỹ</div>
						<div class="value text-blue-bold">3460</div>
					</li>
					<li>
						<div class="name">Tổng điểm xét hạng trong kỳ</div>
						<div class="value text-blue-bold">3460</div>
					</li>
					<a href="#" class="btn-relative-long">Đăng ký</a>
				</ul>
			</div>
		</div>
	</div>

	<!-- SERVICE -->
    <div class="connect-content">
        <div class="content-header">
            <h2 class="title">Dịch vụ</h2>
            <a href="#" class="all is-desktop">Xem tất cả<span> ></span></a>
        </div>
        <div class="lightSlider"> 
            <div class="m-card service">
                <div class="content-image">
                    <img src="{{asset('source/icon_mobile/tiktok.png')}}">
                </div>
                <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                <div class="m-card-body">
                    Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                </div>
            </div>
            <div class="m-card service">
                <div class="content-image">
                    <img src="{{asset('source/icon_mobile/data_d5.png')}}">
                </div>
                <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                <div class="m-card-body">
                    Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                </div>
            </div>
            <div class="m-card service">
                <div class="content-image">
                    <img src="{{asset('source/icon_mobile/iflix.png')}}">
                </div>
                <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                <div class="m-card-body">
                    Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                </div>
            </div>
            <div class="m-card service">
                <div class="content-image">
                    <img src="{{asset('source/icon_mobile/tiktok.png')}}">
                </div>
                <h1 class="title"><a href="#">Gói Data ngày D5</a></h1>
                <div class="m-card-body">
                    Với gói cước D5 bạn sẽ có 1 GB tốc độ cao/ngày và trong suốt 30 ngày, bạn sẽ không còn nỗi lo thiếu data để làm việc, giải trí…
                </div>
            </div>
        </div>
        <div class="content-footer">
            <a href="#">Xem tất cả</a>
        </div>
    </div>

    <div class="connect-content">
    	<div class="content-header">
            <h2 class="title">Danh sách ưu đãi</h2>
        </div>
        <div class="body-content">
       		<ul class="menu-list-items">
	    		<li class="menu-item active" data-tab-target="#hotel">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_hotel.svg')}}" alt="">
	    			</div>
	    			<p>Du lịch - Khách sạn</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#health">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_heart.svg')}}" alt="">
	    			</div>
	    			<p>Sức khỏe - Thẳm mỹ</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#airway">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_airplane.svg')}}" alt="">
	    			</div>
	    			<p>Hàng không vận chuyển</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#entertainment">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_smile.svg')}}" alt="">
	    			</div>
	    			<p>Vui chơi - Giải trí</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#restaurant">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_ring_bell.svg')}}" alt="">
	    			</div>
	    			<p>Nhà hàng</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#sport">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_cup.svg')}}" alt="">
	    			</div>
	    			<p>Thể thao</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#education">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_book.svg')}}" alt="">
	    			</div>
	    			<p>Giáo dục</p>
	    		</li>
	    		<li class="menu-item" data-tab-target="#goods">
	    			<div class="menu-item__thumb">
	    				<img src="{{asset('source/image/i_tshirt.svg')}}" alt="">
	    			</div>
	    			<p>Hàng tiêu dùng</p>
	    		</li>
	    	</ul>

	    	<ul class="give-list-items" id="hotel" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/cgv_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/orange_travel.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/sun_group_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="health" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="airway" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="entertainment" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="restaurant" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="sport" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="education" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
	    	<ul class="give-list-items hidden" id="goods" data-tab-content>
	    		<li class="give-item">
	    			<img src="{{asset('source/image/vin_logo.svg')}}" alt="">
	    			<ul class="list-space">
	    				<li><a href="#">Vin Group</a></li>
	    				<li>Tặng 5 ngày du lịch Nha Trang trị giá 8.000.000 đ</li>
	    			</ul>
	    			<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
	    		</li>
	    	</ul>
        </div>
    </div>
</div>
@endsection