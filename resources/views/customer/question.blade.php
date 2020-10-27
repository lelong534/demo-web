@extends('base', ['title' => 'Gửi phản ánh'])

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
		        <h2 class="text-primary">Câu hỏi thường gặp</h2>
		    </div>
		    <div class="content-title is-mobile">
		        Câu hỏi thường gặp
		    </div>

		    <!-- CONTENT BODY -->
		    <div class="question-content">
		    	<ul class="nav">
		    		<li class="active"  data-tab-target="#goi-cuoc">
		    			<div class="nav-item__thumb">
		    				<img src="{{asset('source/icon_mobile/icon-qs-type1-blue.png')}}">
		    			</div>
		    			<p>Gói cước</p>
		    		</li>
		    		<li data-tab-target="#dich-vu">
		    			<div class="nav-item__thumb">
		    				<img src="{{asset('source/icon_mobile/icon-qs-type2-blue.png')}}">
		    			</div>
		    			<p>Dịch vụ</p>
		    		</li>
		    		<li data-tab-target="#thanh-toan-cuoc">
		    			<div class="nav-item__thumb">
		    				<img src="{{asset('source/icon_mobile/icon-qs-type3-blue.png')}}">
		    			</div>
		    			<p>Thanh toán cước</p>
		    		</li>
		    		<li data-tab-target="#nap-tien">
		    			<div class="nav-item__thumb">
		    				<img src="{{asset('source/icon_mobile/icon-qs-type4-blue.png')}}">
		    			</div>
		    			<p>Nạp tiền</p>
		    		</li>
		    	</ul>

		    	<div class="question-body active" id="goi-cuoc" data-tab-content>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question1">1 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question1">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
		    			</div>
		    		</div>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question2">2 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question2">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
		    			</div>
		    		</div>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question3">3 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question3">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
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
		    	<div class="question-body hidden" id="dich-vu" data-tab-content>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question1">1 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question1">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
		    			</div>
		    		</div>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question2">2 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question2">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
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
		    	<div class="question-body hidden" id="thanh-toan-cuoc" data-tab-content>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question1">1 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question1">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
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
		    	<div class="question-body hidden" id="nap-tien" data-tab-content>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question1">1 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question1">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
		    			</div>
		    		</div>
		    		<div class="question-item" data-toggle="collapse" data-target="#collapse_question2">
		    			<div class="question">2 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question2">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
		    			</div>
		    		</div>
		    		<div class="question-item">
		    			<div class="question" data-toggle="collapse" data-target="#collapse_question3">3 . Mỗi KH cá nhân có thể đứng tên bao nhiêu thuê bao trả sau?
		    				<img src="{{asset('source/icon_mobile/arrow-down.png')}}">
		    			</div>
		    			<div class="answer collapse" id="collapse_question3">
		    				<p>Trả lời</p>
		    				Nếu tài khoản chính của thuê bao dưới 50.000đ thì phí chuyển đổi là 5.000đ/ lần. Nếu tài khoản chính của thuê bao từ 50.000đ trở lên thì phí chuyển đổi là 10% tài khoản chính/ lần.
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