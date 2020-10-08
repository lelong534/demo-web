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
	    Lịch sử hình thành
	</div>
	<div class="introduction-body">
	    <div class="content">
	    	MobiFone được thành lập ngày 16/04/1993 với tên gọi ban đầu là Công ty thông tin di động. Ngày 01/12/2014, Công ty được chuyển đổi thành Tổng công ty Viễn thông MobiFone, trực thuộc Bộ Thông tin và Truyền thông, kinh doanh trong các lĩnh vực: dịch vụ viễn thông truyền thống, VAS, Data, Internet & truyền hình IPTV/cable TV, sản phẩm khách hàng doanh nghiệp, dịch vụ công nghệ thông tin, bán lẻ và phân phối và đầu tư nước ngoài.<br/>
			<span class="text-blue">1993</span>: Thành lập Công ty Thông tin di động. Giám đốc công ty Ông Đinh Văn Phước
			<br/><br/>
			<span class="text-blue">1994</span>: Thành lập Trung tâm Thông tin di động Khu vực I & II
			<br/><br/>
			<span class="text-blue">1995</span>: Công ty Thông tin di động ký Hợp đồng hợp tác kinh doanh (BCC) với Tập đoàn Kinnevik/Comvik (Thụy Điển)<br/>
			Thành lập Trung tâm Thông tin di động Khu vực III<br/><br/>

			<span class="text-blue">2005</span>: Công ty Thông tin di động ký thanh lý Hợp đồng hợp tác kinh doanh (BCC) với Tập đoàn Kinnevik/Comvik.
			Nhà nước và Bộ Bưu chính Viễn thông (nay là Bộ Thông tin và Truyền thông) có quyết định chính thức về việc cổ phần hoá Công ty Thông tin di động.<br/>
			Ông Lê Ngọc Minh lên làm Giám đốc Công ty Thông tin di động thay Ông Đinh Văn Phước (về nghỉ hưu)<br/><br/>

			<span class="text-blue">2006</span>: Thành lập Trung tâm thông tin di động Khu vực IV<br/><br/>

			<span class="text-blue">2008</span>: Thành lập Trung tâm thông tin di động Khu vực V. Kỷ niệm 15 năm thành lập Công ty thông tin di động.
			Thành lập Trung tâm Dịch vụ Giá trị Gia tăng.<br/>
			Tính đến tháng 04/2008, MobiFone đang chiếm lĩnh vị trí số 1 về thị phần thuê bao di động tại Việt Nam.<br/>
			<span class="text-blue">2009</span>: Nhận giải Mạng di động xuất sắc nhất năm 2008 do Bộ Thông tin và Truyền thông trao tặng; VMS - MobiFone chính thức cung cấp dịch vụ 3G; Thành lập Trung tâm Tính cước và Thanh khoản.<br/><br/>

			<span class="text-blue">2010</span>: Chuyển đổi thành Công ty TNHH 1 thành viên do Nhà nước làm chủ sở hữu. <br/><br/>

			<span class="text-blue">2013</span>: Kỷ niệm 20 năm thành lập Công ty Thông tin di động và đón nhận Huân chương Độc lập Hạng Ba<br/><br/>

			MobiFone là nhà cung cấp mạng thông tin di động đầu tiên và duy nhất tại Việt Nam (2005-2008) được khách hàng yêu mến, bình chọn cho giải thưởng mạng thông tin di động tốt nhất trong năm tại Lễ trao giải Vietnam Mobile Awards do tạp chí Echip Mobile tổ chức. Đặc biệt trong năm 2009, MobiFone vinh dự nhận giải thưởng Mạng di động xuất sắc nhất năm 2008 do Bộ thông tin và Truyền thông Việt nam trao tặng.<br/><br/>

			<span class="text-blue">2014:
				<ul class="introduction">
					<li>Ngày 26/06: Ông Mai Văn Bình được bổ nhiệm phụ trách chức vụ Chủ tịch Công ty Thông tin di động.</li>
					<li>Ngày 10/07: Bàn giao quyền đại diện chủ sở hữu Nhà nước tại Công ty VMS từ Tập đoàn VNPT về Bộ TT&TT.</li>
					<li>Ngày 13/08: Ông Lê Nam Trà được bổ nhiệm chức vụ Tổng Giám đốc Công ty Thông tin di động.</li>
					<li>Ngày 01/12: Nhận quyết định thành lập Tổng công ty Viễn Thông MobiFone trên cơ sở tổ chức lại Công ty TNHH một thành viên Thông tin di động.</li><br/><br/>
				</ul>
			</span>
		</div>
	</div>
    @include('common.theme-introduction')
</div>

@endsection