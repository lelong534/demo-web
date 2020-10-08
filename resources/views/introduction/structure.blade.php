@extends('application', ['title' => 'Giới thiệu'])

@section('content')
<div id="menu-wrapper">
    <ul id="introduction-menu">
        <li><h3 class="active">Giới thiệu chung</h3></li>
        <li><h3>Hợp tác với Mobifone</h3></li>
        <li><h3>Đối tác</h3></li>
        <li><h3>Điểm cung cấp dịch vụ viễn thông</h3></li>
        <li><h3>Cửa hàng bán lẻ</h3></li>
    </ul>
</div>
<div class="introduction-content">  
    <div class="theme-title">
        Cơ cấu tổ chức
    </div>
    <div class="introduction-body">
        <div class="content">
            Hiện nay, Tổng công ty Viễn thông MobiFone có 20 Phòng, Ban chức năng và 20 đơn vị trực thuộc khác bao gồm 9 Công ty Dịch vụ MobiFone tại 9 khu vực, Trung tâm Viễn thông quốc tế MobiFone, Trung tâm Dịch vụ đa phương tiện và giá trị gia tăng MobiFone, Trung tâm Công nghệ thông tin MobiFone, Trung tâm Quản lý và điều hành mạng (NOC), Trung tâm Mạng lưới MobiFone miền Bắc, Trung, Nam, Trung tâm Đo kiểm và sửa chữa thiết bị viễn thông MobiFone, Trung tâm Tính cước và Thanh khoản, Trung tâm Nghiên cứu và Phát triển, Trung tâm Tư vấn thiết kế MobiFone.<br/>
            Ngoài ra, MobiFone có bốn Công ty con bao gồm Công ty cổ phần Dịch vụ kỹ thuật MobiFone, Công ty cổ phần Công nghệ MobiFone toàn cầu, Công ty cổ phần Dịch vụ gia tăng MobiFone, và Công ty cổ phần nghe nhìn toàn cầu.<br/>
            <span class="text-blue">Văn phòng Tổng Công ty viễn thông MobiFone</span>: Tòa nhà MobiFone - Lô VP1, Phường Yên Hòa, Quận Cầu Giấy, Thành phố Hà Nội.<br/>
            <span class="text-blue">Công ty Dịch vụ MobiFone khu vực 1</span>: có trụ sở chính tại Hà Nội, chịu trách nhiệm kinh doanh toàn bộ các dịch vụ do Tổng công ty cung cấp đối với tất cả các nhóm khách hàng theo mục tiêu, quy hoạch và kế hoạch phát triển của Tổng Công ty trên địa bàn thành phố Hà Nội<br/>
            Địa chỉ: Tòa nhà MobiFone - Duy Tân, số 5/82 đường Duy Tân, Quận Cầu Giấy, TP. Hà Nội.<br/>
            <span class="text-blue">Công ty Dịch vụ MobiFone khu vực 2</span>: có trụ sở chính tại TP. Hồ Chí Minh, chịu trách nhiệm kinh doanh toàn bộ các dịch vụ do Tổng công ty cung cấp đối với tất cả các nhóm khách hàng theo mục tiêu, quy hoạch và kế hoạch phát triển của Tổng Công ty trên địa bàn TP Hồ Chí Minh:<br/>
            Địa chỉ: MM 18, đường Trường Sơn, phường 14, Quận 10, TP. HCM.<br/>
            <span class="text-blue">Công ty Dịch vụ MobiFone khu vực 3</span>: có trụ sở chính tại Ðà Nẵng, chịu trách nhiệm kinh doanh toàn bộ các dịch vụ do Tổng công ty cung cấp đối với tất cả các nhóm khách hàng theo mục tiêu, quy hoạch và kế hoạch phát triển của Tổng Công ty trên khu vực miền Trung: Đà Nẵng, Quảng Trị, Thừa Thiên Huế, Quảng Nam, Quảng Ngãi, Bình Định, Phú Yên.<br/>
            Địa chỉ: Số 391 đường Nguyễn Văn Linh, Thành phố Đà Nẵng.<br/>
            <span class="text-blue">Công ty Dịch vụ MobiFone khu vực 4</span>: có trụ sở chính tại Vĩnh Phúc, chịu trách nhiệm kinh doanh toàn bộ các dịch vụ do Tổng công ty cung cấp đối với tất cả các nhóm khách hàng theo mục tiêu, quy hoạch và kế hoạch phát triển của Tổng Công ty trên địa bàn các tỉnh: Lào Cai, Lai Châu, Điện Biên, Yên Bái, Sơn La, Phú Thọ, Hòa Bình, Hà Nam, Nam Định, Ninh Bình, Vĩnh Phúc.<br/>
            Địa chỉ: 414, đường Mê Linh, phường Khai Quang, TP. Vĩnh Yên, tỉnh Vĩnh Phúc.<br/>
        </div>
    </div>
    @include('common.theme-introduction')
</div>

@endsection