@extends('child', 
    [
        'title' => 'Tiện ích',
        'page_link_first_level' => 'Tuyển dụng',
        'page_link_second_level' => 'Giới thiệu công ty'
    ]
)

@section('content')
<div class="body-content employ">
	<div class="m-card introduction">
		<img src="{{asset('source/image/mobif_template1.svg')}}">
		<div class="card-bottom">
            <div class="card-thumb">
                <img src="{{asset('source/image/card_job_detail.png')}}" alt="job"/>
            </div>
            <div class="card-right">
	            <div class="card-title">
	                <h3 class="title">Trụ sở Mobifone</h3>
	            </div>
	            <ul class="card-body">
	                <li class="item">
	                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
	                    Tòa nhà MobiFone - Duy Tân, số 5/82 đường Duy Tân, Quận Cầu Giấy, TP. Hà Nội
	                </li>
	                <li class="item">
	                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
						8 am - 5.30pm,  thứ Hai - thứ Sáu
	                </li>
	            </ul>
	        </div>
        </div>
	</div>
	<br/>
	<h2 class="title">Việc làm đang tuyển</h2>
	<div class="grid-two-column">
        <div class="m-card employ">
            <div class="card-job-title has-share">
                <h3 class="title">Manager</h3>
                <div class="card-job-title__button">
                    <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//123.31.17.73%3A8000/detail/1" target="popup" class="is-desktop">
                    Chia sẻ</a>
                </div>
            </div>
            <ul class="card-job-body">
                <li class="item">
                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
                    Hà Nội
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
                    10.000.000 đ - 20.000.000 đ
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
                    Ngày hết hạn: 20/10/2020
                </li>
                <li class="item">
                    <div class="item__left">5 ngày trước</div>
                    <div class="item__right" data-toggle="modal" data-target="#uploadCV">
                        <a href="#" class="btn-bg-white">Ứng tuyển</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="m-card employ">
            <div class="card-job-title has-share">
                <h3 class="title">Manager</h3>
                <div class="card-job-title__button">
                    <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//123.31.17.73%3A8000/detail/1" target="popup" class="is-desktop">
                    Chia sẻ</a>
                </div>
            </div>
            <ul class="card-job-body">
                <li class="item">
                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
                    Hà Nội
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
                    10.000.000 đ - 20.000.000 đ
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
                    Ngày hết hạn: 20/10/2020
                </li>
                <li class="item">
                    <div class="item__left">5 ngày trước</div>
                    <div class="item__right" data-toggle="modal" data-target="#uploadCV">
                        <a href="#" class="btn-bg-white">Ứng tuyển</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="m-card employ">
            <div class="card-job-title has-share">
                <h3 class="title">Manager</h3>
                <div class="card-job-title__button">
                    <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//123.31.17.73%3A8000/detail/1" target="popup" class="is-desktop">
                    Chia sẻ</a>
                </div>
            </div>
            <ul class="card-job-body">
                <li class="item">
                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
                    Hà Nội
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
                    10.000.000 đ - 20.000.000 đ
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
                    Ngày hết hạn: 20/10/2020
                </li>
                <li class="item">
                    <div class="item__left">5 ngày trước</div>
                    <div class="item__right" data-toggle="modal" data-target="#uploadCV">
                        <a href="#" class="btn-bg-white">Ứng tuyển</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="m-card employ">
            <div class="card-job-title has-share">
                <h3 class="title">Manager</h3>
                <div class="card-job-title__button">
                    <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//123.31.17.73%3A8000/detail/1" target="popup" class="is-desktop">
                    Chia sẻ</a>
                </div>
            </div>
            <ul class="card-job-body">
                <li class="item">
                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
                    Hà Nội
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
                    10.000.000 đ - 20.000.000 đ
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
                    Ngày hết hạn: 20/10/2020
                </li>
                <li class="item">
                    <div class="item__left">5 ngày trước</div>
                    <div class="item__right" data-toggle="modal" data-target="#uploadCV">
                        <a href="#" class="btn-bg-white">Ứng tuyển</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="m-card employ">
            <div class="card-job-title has-share">
                <h3 class="title">Manager</h3>
                <div class="card-job-title__button">
                    <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//123.31.17.73%3A8000/detail/1" target="popup" class="is-desktop">
                    Chia sẻ</a>
                </div>
            </div>
            <ul class="card-job-body">
                <li class="item">
                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
                    Hà Nội
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
                    10.000.000 đ - 20.000.000 đ
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
                    Ngày hết hạn: 20/10/2020
                </li>
                <li class="item">
                    <div class="item__left">5 ngày trước</div>
                    <div class="item__right" data-toggle="modal" data-target="#uploadCV">
                        <a href="#" class="btn-bg-white">Ứng tuyển</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="m-card employ">
            <div class="card-job-title has-share">
                <h3 class="title">Manager</h3>
                <div class="card-job-title__button">
                    <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//123.31.17.73%3A8000/detail/1" target="popup" class="is-desktop">
                    Chia sẻ</a>
                </div>
            </div>
            <ul class="card-job-body">
                <li class="item">
                    <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
                    Hà Nội
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
                    10.000.000 đ - 20.000.000 đ
                </li>
                <li class="item">
                    <img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
                    Ngày hết hạn: 20/10/2020
                </li>
                <li class="item">
                    <div class="item__left">5 ngày trước</div>
                    <div class="item__right" data-toggle="modal" data-target="#uploadCV">
                        <a href="#" class="btn-bg-white">Ứng tuyển</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br/>
    <h2 class="title">Môi trường làm việc</h2>
    <div class="m-card slider">
        <div class="card-slider-header">
		    <ul class="lightSlider3">
		    	<li data-thumb="{{asset('source/image/work-envir1.png')}}">
					<img src="{{asset('source/image/work-envir1.png')}}" />
				</li>
				<li data-thumb="{{asset('source/image/work-envir2.png')}}">
					<img src="{{asset('source/image/work-envir2.png')}}" />
				</li>
				<li data-thumb="{{asset('source/image/work-envir3.png')}}">
					<img src="{{asset('source/image/work-envir3.png')}}" />
				</li>
				<li data-thumb="{{asset('source/image/work-envir4.png')}}">
					<img src="{{asset('source/image/work-envir4.png')}}" />
				</li>
				<li data-thumb="{{asset('source/image/work-envir5.png')}}">
					<img src="{{asset('source/image/work-envir5.png')}}" />
				</li>
            </ul>
		</div>
		<div class="card-slider-content">
			<h3 class="title">MobiFone có môi trường làm việc tốt thứ hai ngành viễn thông</h3>
			<p>
			Anphabe đã công bố danh sách “100 nơi làm việc tốt nhất Việt Nam 2018”, trong đó MobiFone giữ vững vị trí số 15 và được đánh giá là tốt thứ hai ngành viễn thông.<br/>
			Theo công bố của tổ chức Anphabe, MobiFone giữ vững vị trí số 15 trong top 100 nơi làm việc tốt nhất Việt Nam năm 2018. Nếu tính theo các doanh nghiệp viễn thông thì MobiFone đứng vị trí thứ 2.<br/>
			Hiện nay, MobiFone có hơn 4.000 cán bộ công nhân viên. Mức đóng góp ngân sách của nhân viên MobiFone được xem là khá cao so với các doanh nghiệp nói chung và khối doanh nghiệp nhà nước nói riêng, ước tính trung bình đạt 9,62 tỷ đồng/người/năm.<br/>
			Với con số này, MobiFone cũng là một trong những doanh nghiệp có năng suất lao động cao nhất hiện nay. Đây cũng là mức năng suất mà rất ít doanh nghiệp đạt được.
			</p>
		</div>
	</div>
	<br/>
	<h2 class="title">Địa điểm</h2>
	<div class="m-card location">
		<div class="card-location-right">
			<img src="{{asset('source/image/map.png')}}">
		</div>
		<div class="card-location-left">
			<h3 class="title">Trụ sở chính Mobifone Hà Nội</h3>
			<p>Tòa nhà Mobifone - Duy Tân, Quận Cầu Giấy, TP Hà Nội</p>
			<img src="{{asset('source/image/headquarter.png')}}" class="is-desktop">
		</div>
	</div>
</div>
@endsection