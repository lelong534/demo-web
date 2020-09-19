@extends('app', ['title' => 'Chi tiết tuyển dụng'])

@section('content')
<!-- content -->
@if (count($errors) > 0)
	<div class="alert alert-danger text-center"> 
		<!-- <ul style="list-style: none">
			@foreach($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul> -->
		{{$errors->first()}}
	</div>
@endif
<div class="content">
    <div class="content-title">
    	<!-- title -->
        <h3><a href="{{route('employ')}}" style="font-size: 1.75rem; color:black;">Trang chủ</a></h3>&nbsp;&nbsp;&nbsp;
        <span>
            <img 
                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                class="icon"                        
               />
        </span>&nbsp;&nbsp;&nbsp;
        <h3><a href="{{route('employ')}}" style="font-size: 1.75rem; color:black;">Tuyển dụng</a></h3>&nbsp;&nbsp;&nbsp;
        <span>
            <img 
                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                class="icon"                        
            />
        </span>&nbsp;&nbsp;&nbsp;
        <h3 class="text-primary">Chi tiết tuyển dụng</h3>
    </div>
    <!-- content -->
    <div class="content-body">
    	<div class="container">
	        <div class="row">
	            <div class="m-card card-job-left col-8">
	            	<div class="card-job-top">
	                    <div class="card-job-image">
	                        <img src="{{asset('source/image/card_job_detail.png')}}" alt="job"/>
	                    </div>
	                    <div class="card-job-content-top">
	                    	<div class="card-job-title">{{$job->name}}</div>
		                    <div class="card-job-body-item">
		                    	<img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
		                    	{{$job->address}}
		                    </div>
		                    <div class="card-job-body-item">
		                    	<img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
		                    	Mức lương: {{$job->min_salary}} đ - {{$job->max_salary}} đ
		                    </div>
		                    <div class="card-job-body-item">
		                    	<img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
		                    	Ngày hết hạn: {{$job->expired}}
		                    </div>
		                    <div class="card-job-body-button">
			                	<div class="card-job-body-button-left">5 ngày trước</div>
			                	<!-- <div class="card-job-body-button-right" 
			                		data-toggle="modal" data-target="#uploadCV">Nộp đơn</div> -->
			                	<div class="card-job-body-button-right">
			                		<a href="{{route('sendcv', $job->id)}}" class="text-decoration-none text-white">Nộp đơn</a>
			                	</div>
			                </div>
		                </div>
		            </div>
		            <div class="card-job-bottom">
		            	<h1 class="title">Phúc lợi</h1>
		            	<div class="benefit-content">
		            		<div class="row">
		            			<div class="col-6">
		            				<img src="{{asset('source/icons/icon-insurrance.svg')}}" alt="insurrance" class="icon-small" />
		            				Bảo hiểm
		            			</div>
		            			<div class="col-6">
		            				<img src="{{asset('source/icons/icon-gift.svg')}}" alt="gift" class="icon-small" />
		            				Thưởng
		            			</div>
		            		</div>
		            	</div>
		            	<h1 class="title">Mô tả công việc</h1>
		            	<ul class="job-description">
		            		<li>Tiếp cận khách hàng, thực hiện công tác giới thiệu, quảng bá và bán sản phẩm công ty</li>
		            	</ul>
		            	<h1 class="title">Mô tả công việc</h1>
		            	<ul class="job-description">
		            		<li>Tiếp cận khách hàng, thực hiện công tác giới thiệu, quảng bá và bán sản phẩm công ty</li>
		            	</ul>
		            </div>
	            </div>
	            <div class=" col-4 card-job-right">
        			<p class="text-primary font-weight-bold">Có thể bạn quan tâm</p>
        			@foreach($relate_jobs as $relate_job)
        			<a href="{{route('detail',$relate_job->id)}}" class="text-decoration-none text-body">
		            	<div class="m-card">
		                    <div class="card-job-title">{{$relate_job->name}}</div>
		                    <div class="card-job-body">
		                        <div class="card-job-body-item">
			                        <img src="{{asset('source/icons/icon-location.svg')}}" alt="location" class="icon-small" />
		                    		{{$relate_job->address}}
	                    		</div>
		                        <div class="card-job-body-item">
		                        	<img src="{{asset('source/icons/icon-money.svg')}}" alt="money" class="icon-small" />
	                    			Mức lương: {{$relate_job->min_salary}} đ - {{$relate_job->max_salary}} đ
	                    		</div>
		                        <div class="card-job-body-item">
		                        	<img src="{{asset('source/icons/icon-time.svg')}}" alt="time" class="icon-small" />
		                        	Ngày hết hạn: {{$relate_job->expired}}
		                        </div>
		                    </div>
		                </div>
	            	</a>
	                @endforeach
	            </div>
	        </div>
	    </div>
    </div>
</div>
@endsection