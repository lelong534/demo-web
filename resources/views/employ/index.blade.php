@extends('base', ['title' => 'Tuyển dụng'])

@section('content')
<!-- content -->
@include('common.banner_employ')
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
                <h2 class="text-primary">Tuyển dụng</h2>
            </div>
            <div class="content-title is-mobile">
                Tuyển dụng
            </div>

            <!-- search form -->
            <!-- <form class="form-search-job" action="{{route('employ')}}" method="GET">
                <div class="form-search-job-data">
                    <div class="search-job-box">
                        @if(isset($name))
                            <input type="text" name="name" class="input-search-job" value="{{$name}}" >
                        @else
                            <input type="text" name="name" class="input-search-job" placeholder="Tìm việc" >
                        @endif
                        <span><img src="{{asset('source/image/icon-search-30.png')}}" class="search-job-icon"/></span>
                    </div>
                    <div class="search-job-box">
                        <select type="text" name="category" class="input-search-job">
                            <option value="">Ngành nghề</option>
                            <option> Marketing</option>
                            <option>Công nghệ thông tin</option>
                            <option>Design</option>
                        </select>
                        <span><img src="{{asset('source/icons/icon-arrow-up.svg')}}" class="search-job-icon"/></span>
                    </div>
                    <div class="search-job-box">
                        <select type="text" name="address" class="input-search-job">  
                            <option value="">Nơi làm việc</option>        
                            @foreach(['Hà Nội', 'Đà Nẵng', 'Hồ Chí Minh'] as $lc)
                                @if(isset($address) && $lc == $address) 
                                    <option selected>{{$lc}}</option>
                                @else
                                    <option>{{$lc}}</option>
                                @endif
                            @endforeach
                        </select>   
                        <span><img src="{{asset('source/icons/icon-arrow-up.svg')}}" class="search-job-icon"/></span>    
                    </div>
                </div>
                <button type="submit" class="btn btn-primary bg-white text-primary font-weight-bold">Tìm kiếm</button>
            </form> -->
            
            <div class="employ-content">
                <form class="form-search-job">
                    <div>
                        <div class="input-box">
                            <input type="text" class="input-box-default" placeholder="Tìm việc">  
                            <span><img src="{{asset('source/image/i_search_gray.svg')}}" class="icon-right is-mobile"/></span>
                            <span><img src="{{asset('source/image/i_search.svg')}}" class="icon-right is-desktop"/></span>
                        </div>
                        <div class="input-box">
                            <select type="text" name="topic" class="input-box-default">
                                <option>Ngành nghề</option>
                                <option>Marketing</option>
                                <option>Công nghệ thông tin</option>
                                <option>Design</option>
                            </select>
                            <span><img src="{{asset('source/icons/caret-arrow-up.svg')}}" class="icon-right is-mobile"/></span>
                            <span><img src="{{asset('source/image/arrow-down-white.svg')}}" class="icon-right is-desktop"/></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-box">
                            <select type="text" name="topic" class="input-box-default">
                                <option>Nơi làm việc</option>
                                <option>Hà Nội</option>
                                <option>TP Hồ Chí Minh</option>
                                <option>Đà Nẵng</option>
                            </select>
                            <span><img src="{{asset('source/icons/caret-arrow-up.svg')}}" class="icon-right is-mobile"/></span>
                            <span><img src="{{asset('source/image/arrow-down-white.svg')}}" class="icon-right is-desktop"/></span>
                        </div>
                        <a href="#">Tìm kiếm</a>
                    </div>
                </form>
                <div class="content-body">
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

                    @include('pagination.default', ['paginator' => null])
                </div>
            </div>
        </div>
    </div>
</main>
@endsection