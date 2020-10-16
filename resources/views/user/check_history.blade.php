@extends('child', 
    [
        'title' => 'My Mobifone',
        'page_link_first_level' => 'My Mobifone',
        'page_link_second_level' => 'Thông tin tài khoản'
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
						<div class="name">Nguyên Thị Hoài Thu</div>
						<div class="phone">0123456789</div>
					</div>
				</div>
				<h3 class="title">Tổng cước tháng 9/2020</h3>
				<div class="info-items">
					<div class="price">77.000 đ</div>
				</div>
			</div>
		</div>

		<div class="info-right">
			<div class="m-card">
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>

	<div class="grid-two-column">
		<div class="charge-history">
			<div class="m-card">
				<h3 class="title">Tháng 9/2020</h3>
				<ul class="history-list-items">
					<li class="item">
						<div class="item-wrapper">
							<div class="item-left">
								<div class="progress progress-small" data-value='100'>
						          	<span class="progress-left">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						          	<span class="progress-right">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						        </div>
						        <ul class="list-space">
				    				<li>Tổng cước</li>
				    				<li class="text-blue-bold">100.000.000 đ</li>
				    			</ul>
				    		</div>
		    				<div class="item-right">
				    			<img src="{{asset('source/image/i_lock.svg')}}" class="icon-small">
		    					<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
		    				</div>
		    			</div>
	    			</li>
	    			<li class="item active" data-tab-target="#call_history">
	    				<div class="item-wrapper">
							<div class="item-left">
								<div class="progress progress-small" data-value='25'>
						          	<span class="progress-left">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						          	<span class="progress-right">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						        </div>
						        <ul class="list-space">
				    				<li>Cuộc gọi</li>
				    				<li class="text-blue-bold">40.000.000 đ</li>
				    			</ul>
				    		</div>
				    		<div class="item-right">
				    			<img src="{{asset('source/image/i_lock.svg')}}" class="icon-small">
		    					<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
		    				</div>
		    			</div>
	    			</li>
	    			<li class="item" data-tab-target="#service_history">
	    				<div class="item-wrapper">
							<div class="item-left">
								<div class="progress progress-small" data-value='20'>
						          	<span class="progress-left">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						          	<span class="progress-right">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						        </div>
						        <ul class="list-space">
				    				<li>Dịch vụ</li>
				    				<li class="text-blue-bold">20.000.000 đ</li>
				    			</ul>
				    		</div>
		    				<div class="item-right">
				    			<img src="{{asset('source/image/i_lock.svg')}}" class="icon-small">
		    					<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
		    				</div>
		    			</div>
	    			</li>
	    			<li class="item" data-tab-target="#data_history">
	    				<div class="item-wrapper">
							<div class="item-left">
								<div class="progress progress-small" data-value='40'>
						          	<span class="progress-left">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						          	<span class="progress-right">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						        </div>
						        <ul class="list-space">
				    				<li>Data</li>
				    				<li class="text-blue-bold">40.000.000 đ</li>
				    			</ul>
				    		</div>
		    				<div class="item-right">
				    			<img src="{{asset('source/image/i_lock.svg')}}" class="icon-small">
		    					<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
		    				</div>
		    			</div>
	    			</li>
	    			<li class="item" data-tab-target="#charge_pack_history">
	    				<div class="item-wrapper">
							<div class="item-left">
								<div class="progress progress-small" data-value='50'>
						          	<span class="progress-left">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						          	<span class="progress-right">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						        </div>
						        <ul class="list-space">
				    				<li>Gói cước</li>
				    				<li class="text-blue-bold">40.000.000 đ</li>
				    			</ul>
				    		</div>
		    				<div class="item-right">
				    			<img src="{{asset('source/image/i_lock.svg')}}" class="icon-small">
		    					<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
		    				</div>
		    			</div>
	    			</li>
	    			<li class="item" data-tab-target="#change_location_history">
	    				<div class="item-wrapper">
							<div class="item-left">
								<div class="progress progress-small" data-value='65'>
						          	<span class="progress-left">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						          	<span class="progress-right">
						                <span class="progress-bar border-primary"></span>
						          	</span>
						        </div>
						        <ul class="list-space">
				    				<li>Chuyển vùng quốc tế</li>
				    				<li class="text-blue-bold">20.000.000 đ</li>
				    			</ul>
				    		</div>
		    				<div class="item-right">
				    			<img src="{{asset('source/image/i_lock.svg')}}" class="icon-small">
		    					<img src="{{asset('source/image/i_arrow_right.svg')}}" class="icon-small">
		    				</div>
		    			</div>
	    			</li>
	    		</ul>
			</div>
		</div>

		<div class="call-history">
			<div class="m-card">
				<h3 class="title">Thông tin chi tiết</h3>
				<ul class="history-list-items active" id="call_history" data-tab-content>
					<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>098 826 1234</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">125 đ</p>
			    			<p class="time">00:48</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>098 826 1234</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">125 đ</p>
			    			<p class="time">00:48</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>098 826 1234</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">125 đ</p>
			    			<p class="time">00:48</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>098 826 1234</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">125 đ</p>
			    			<p class="time">00:48</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>098 826 1234</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">125 đ</p>
			    			<p class="time">00:48</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_phone.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>098 826 1234</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">125 đ</p>
			    			<p class="time">00:48</p>
	    				</div>
	    			</li>
	    		</ul>
	    		<ul class="history-list-items hidden" id="service_history" data-tab-content>
					<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_chart-bar.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>mMusic</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">20.000 đ</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_chart-bar.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>MCA7</li>
			    				<li class="time">11:48:48</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">20.000 đ</p>
	    				</div>
	    			</li>
	    		</ul>
	    		<ul class="history-list-items hidden" id="data_history" data-tab-content>
					<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_wifi.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>2035 MB</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">1505 đ</p>
	    				</div>
	    			</li>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_wifi.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>2035 MB</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">1505 đ</p>
	    				</div>
	    			</li>
	    		</ul>
	    		<ul class="history-list-items hidden" id="charge_pack_history" data-tab-content>
	    			<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_wifi.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>2035 MB</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">1505 đ</p>
	    				</div>
	    			</li>
	    		</ul>
	    		<ul class="history-list-items hidden" id="change_location_history" data-tab-content>
					<li class="item">
						<div class="item-left">
							<img src="{{asset('source/image/i_wifi.svg')}}" class="icon-small">
					        <ul class="list-space">
			    				<li>2035 MB</li>
			    			</ul>
			    		</div>
	    				<div class="item-right">
			    			<p class="text-blue-bold">1505 đ</p>
	    				</div>
	    			</li>
	    		</ul>
	    	</div>
	    </div>
	</div>
</div>
@endsection