@extends('application', ['title' => 'Đối tác'])

@section('content')  
<ul id="introduction-menu">
    <li><a href="{{route('introduction_history')}}"><h3>Giới thiệu chung</h3></a></li>
    <li><a href="{{route('introduction_cooperate')}}"><h3>Hợp tác với Mobifone</h3></a></li>
    <li><a href="{{route('introduction_partner')}}"><h3 class="active">Đối tác</h3></a></li>
    <li><a href="{{route('customer_location')}}"><h3>Điểm cung cấp dịch vụ viễn thông</h3></a></li>
    <li><a href="{{route('introduction_structure')}}"><h3>Cửa hàng bán lẻ</h3></a></li>
</ul>
<ul id="partner-menu">
	<li class="active" data-tab-target="#mobifone">Dịch vụ mang thương hiệu Mobifone</li>
	<li data-tab-target="#partner">Dịch vụ thương hiệu đối tác</li>
	<li data-tab-target="#other">Dịch vụ 4/6/7/8 XXX</li>
</ul>
<div class="introduction-content"> 
	<div class="table-content active" id="mobifone" data-tab-content>
		<table class="table table-striped">
		    <thead class="table-info">
		        <tr>
		            <th>STT</th>
		            <th>Tên dịch vụ</th>
		            <th>Đối tác cung cấp</th>
		            <th>Đầu mối</th>
		            <th>Thời gian cung cấp</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>1</td>
		            <td>1playnv</td>
		            <td>Công ty cổ phần Nhất Vương</td>
		            <td>
		            	<p class="name">Đỗ Thế Hưng</p>
						<p class="email">Email: hungdt@gmail.com</p>
					</td>
					<td>1 ngày</td>
		        </tr>
		        <tr>
		            <td>2</td>
		            <td>2learntvcn4</td>
		            <td>Công ty cổ phần tư vấn giải pháp y tế & công nghệ 4T</td>
		            <td>
		            	<p class="job-def">Trưởng phòng kỹ thuật</p>
						<p class="name">Trần Khánh Linh</p>
						<p class="email">Email: linhkt@gmail.com</p>
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>3</td>
		            <td>8clipcddv</td>
		            <td>Công ty cổ phần trò chơi di động Việt</td>
		            <td>
		            	<p class="name">Hoàng Thị Thu Hiền</p>
						<p class="email">Email: hienht@vngames.vn</p>
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>4</td>
		            <td>9phutdvb</td>
		            <td>Công ty cổ phần dịch vụ BAZA</td>
		            <td>
		            	Lê Ngọc Hân
					</td>
					<td></td>
		        </tr>
		    </tbody>
		</table>
	</div>
	<div class="table-content hidden" id="partner" data-tab-content>
		<table class="table table-striped">
		    <thead class="table-info">
		        <tr>
		            <th>STT</th>
		            <th>Tên dịch vụ</th>
		            <th>Đối tác cung cấp</th>
		            <th>Đầu mối</th>
		            <th>Thời gian cung cấp</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>1</td>
		            <td>8clipcddv</td>
		            <td>Công ty cổ phần trò chơi di động Việt</td>
		            <td>
		            	<p class="name">Hoàng Thị Thu Hiền</p>
						<p class="email">Email: hienht@vngames.vn</p>
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>2</td>
		            <td>9phutdvb</td>
		            <td>Công ty cổ phần dịch vụ BAZA</td>
		            <td>
		            	Lê Ngọc Hân
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>3</td>
		            <td>2learntvcn4</td>
		            <td>Công ty cổ phần tư vấn giải pháp y tế & công nghệ 4T</td>
		            <td>
		            	<p class="job-def">Trưởng phòng kỹ thuật</p>
						<p class="name">Trần Khánh Linh</p>
						<p class="email">Email: linhkt@gmail.com</p>
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>4</td>
		            <td>1playnv</td>
		            <td>Công ty cổ phần Nhất Vương</td>
		            <td>
		            	<p class="name">Đỗ Thế Hưng</p>
						<p class="email">Email: hungdt@gmail.com</p>
					</td>
					<td>1 ngày</td>
		        </tr>
		    </tbody>
		</table>
	</div>
	<div class="table-content hidden" id="other" data-tab-content>
		<table class="table table-striped">
		    <thead class="table-info">
		        <tr>
		            <th>STT</th>
		            <th>Tên dịch vụ</th>
		            <th>Đối tác cung cấp</th>
		            <th>Đầu mối</th>
		            <th>Thời gian cung cấp</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>1</td>
		            <td>8clipcddv</td>
		            <td>Công ty cổ phần trò chơi di động Việt</td>
		            <td>
		            	<p class="name">Hoàng Thị Thu Hiền</p>
						<p class="email">Email: hienht@vngames.vn</p>
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>2</td>
		            <td>9phutdvb</td>
		            <td>Công ty cổ phần dịch vụ BAZA</td>
		            <td>
		            	Lê Ngọc Hân
					</td>
					<td></td>
		        </tr>
		        <tr>
		            <td>3</td>
		            <td>1playnv</td>
		            <td>Công ty cổ phần Nhất Vương</td>
		            <td>
		            	<p class="name">Đỗ Thế Hưng</p>
						<p class="email">Email: hungdt@gmail.com</p>
					</td>
					<td>1 ngày</td>
		        </tr>
		        <tr>
		            <td>4</td>
		            <td>2learntvcn4</td>
		            <td>Công ty cổ phần tư vấn giải pháp y tế & công nghệ 4T</td>
		            <td>
		            	<p class="job-def">Trưởng phòng kỹ thuật</p>
						<p class="name">Trần Khánh Linh</p>
						<p class="email">Email: linhkt@gmail.com</p>
					</td>
					<td></td>
		        </tr>
		    </tbody>
		</table>
	</div>
    @include('common.theme-introduction')
</div>

@endsection