@extends('application', ['title' => 'Giới thiệu'])

@section('content')

<div class="introduction-body">
	<div id="carouselIntroduction" class="carousel slide">   
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('source/image/introduction1.png')}}" class="d-block" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('source/image/introduction2.png')}}" class="d-block" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('source/image/introduction2.png')}}" class="d-block" alt="">
            </div>
        </div>  
        <ol class="carousel-indicators">
            <li data-target="#carouselIntroduction" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIntroduction" data-slide-to="1"></li>
            <li data-target="#carouselIntroduction" data-slide-to="2"></li>
        </ol>  
    </div>

    <div class="content">
    	MobiFone được thành lập ngày 16/04/1993 với tên gọi ban đầu là Công ty thông tin di động. Ngày 01/12/2014, Công ty được chuyển đổi thành Tổng công ty Viễn thông MobiFone, trực thuộc Bộ Thông tin và Truyền thông, kinh doanh trong các lĩnh vực: dịch vụ viễn thông truyền thống, VAS, Data, Internet & truyền hình IPTV/cable TV, sản phẩm khách hàng doanh nghiệp, dịch vụ công nghệ thông tin, bán lẻ và phân phối và đầu tư nước ngoài.<br/><br/>
		Tại Việt Nam, MobiFone là một trong ba mạng di động lớn nhất với hơn 30% thị phần. Chúng tôi cũng là nhà cung cấp mạng thông tin di động đầu tiên và duy nhất tại Việt Nam được bình chọn là thương hiệu được khách hàng yêu thích trong 6 năm liền.</br>
		Hiện nay, MobiFone có gần 50 triệu thuê bao với gần 30.000 trạm 2G và 20.000 trạm 3G. Tổng doanh thu năm 2017 của MobiFone đạt xấp xỉ 2 tỷ đô la Mỹ. <br/><br/>
		Theo công bố của tổ chức Anphabe, MobiFone giữ vững vị trí số 15 trong top 100 nơi làm việc tốt nhất Việt Nam năm 2018. Nếu tính theo các doanh nghiệp viễn thông thì MobiFone đứng vị trí thứ 2.<br/><br/>

		Đây là năm thứ 6 Anphabe thực hiện khảo sát "Nơi làm việc tốt nhất Việt Nam”. Năm nay, quy mô của khảo sát được mở rộng để đo lường sức hấp dẫn thương hiệu nhà tuyển dụng của 674 doanh nghiệp, thuộc 24 ngành nghề, với sự tham gia của 75.481 người đi làm có kinh nghiệm.
    </div>

    @include('common.theme-introduction')
</div>

@endsection