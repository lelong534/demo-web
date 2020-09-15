@extends('app', ['title' => 'Tuyển dụng'])

@section('content')
<!-- content -->
<div class="content">
    <div class="content-title">
        <h3>Trang chủ</h3>&nbsp;&nbsp;&nbsp;
        <span>
            <img 
                src="https://img.icons8.com/fluent-systems-filled/24/000000/more-than.png"
                class="icon"       
            />
        </span>&nbsp;&nbsp;&nbsp;
        <h3 class="text-primary">Tuyển dụng</h3>
    </div>

    <div class="content-body">
        <div class="row">
            @foreach($jobs as $job)
            <div class="col-6">
                <a href="{{route('detail',$job->id)}}" class="text-decoration-none text-body">
                    <div class="m-card">
                        <div class="card-job-title has-share">{{$job->name}}
                            <div class="card-job-title__button">
                                <img class="icon-small" src="{{asset('source/icons/icon-share.svg')}}">
                                Chia sẻ
                            </div>
                        </div>
                        <div class="card-job-body">
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
                                <div class="card-job-body-button-right m-btn-detail" 
                                    data-toggle="modal" data-target="#uploadCV">Ứng tuyển</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>                      
        @include('pagination.default', ['paginator' => $jobs])
    </div>
</div>
@endsection