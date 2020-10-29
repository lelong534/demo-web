@extends('base', ['title' => 'Vị trí cửa hàng'])

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
		        <h2>Hỗ trợ khách hàng</h2>&nbsp;&nbsp;&nbsp;
		        <span>
		            <img 
		                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
		                class="icon"       
		            />
		        </span>&nbsp;&nbsp;&nbsp;
		        <h2 class="text-primary">Vị trí cửa hàng</h2>
		    </div>
		    <div class="content-title is-mobile">
		        Ví trí cửa hàng
		    </div>

		    <!-- CONTENT BODY -->
		    <div class="location-content">
		    	<div class="location-body">
		    		<div class="location-body__left">
			    		<div class="search-location-box">
			    			<form> 
			    				@csrf
					    		<div class="input-box">
						            <select type="text" name="topic" class="input-box-data">
						            	<option>Tỉnh/Thành phố</option>
						                <option>Marketing</option>
						                <option>Công nghệ thông tin</option>
						                <option>Design</option>
						            </select>
						            <span><img src="{{asset('source/icons/caret-arrow-up.svg')}}" class="icon-right"/></span>
						        </div>
						        <div class="input-box">
						            <select type="text" name="topic" class="input-box-data">
						            	<option>Quận/huyện</option>
						                <option>Marketing</option>
						                <option>Công nghệ thông tin</option>
						                <option>Design</option>
						            </select>
						            <span><img src="{{asset('source/icons/caret-arrow-up.svg')}}" class="icon-right"/></span>
						        </div>
						        <div class="button is-mobile">Gửi</div>
						        <div class="button is-desktop">Tìm kiếm</div>
					        </form>
					    </div>

					    <div class="location-content">
					    	<div class="m-card">
						    	<div class="store">
						    		<img src="{{asset('source/image/map.png')}}" alt="">
						    		<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
						    	</div>
						    </div>
					    </div>
					</div>

					<div class="location-body__right">
						<div class="body-title">
							Có thể bạn quan tâm
						</div>
						<div class="m-card">
							<ul class="body-content">
								<li class="store">
									<div class="store-name item-title"><a href="#">Đại lí Nguyễn Hoàng Mobifone</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
								<li class="store">
									<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
								<li class="store">
									<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
								<li class="store">
									<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
								<li class="store">
									<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
								<li class="store">
									<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
								<li class="store">
									<div class="store-name item-title"><a href="#">Cửa hàng Mobifone Nguyễn Hoàng</a></div>
						    		<div class="store-address">Số 7, Đội Cấn, Ba Đình, Hà Nội</div>
						    		<div class="store-phone">0936316699</div>
						    		<div class="store-time">Giờ làm việc: 8:00 - 17:30</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
		    </div>
		</div>
	</div>
</main>

@endsection