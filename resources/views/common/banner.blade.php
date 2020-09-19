<!-- carosel -->
<div id="caroselBanner" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('source/image/banner.png')}}" class="d-block w-100" alt="banner">
        </div>
        <div class="carousel-item">
            <img src="{{asset('source/image/banner2.jpg')}}" class="d-block w-100" alt="banner">
        </div>
        <div class="carousel-item">
            <img src="{{asset('source/image/banner3.jpg')}}" class="d-block w-100" alt="banner">
        </div>
        <div class="carousel-item">
            <img src="{{asset('source/image/banner4.jpg')}}" class="d-block w-100" alt="banner">
        </div>
    </div>
    <a class="carousel-control-prev" href="#caroselBanner" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#caroselBanner" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- search form -->
<form class="form-search-job" action="{{route('employ')}}" method="GET">
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
                <option selected> Marketing</option>
                <option>Công nghệ thông tin</option>
                <option>Design</option>
            </select>
            <span><img src="{{asset('source/icons/icon-arrow-up.svg')}}" class="search-job-icon"/></span>
        </div>
        <div class="search-job-box">
            <select type="text" name="address" class="input-search-job">        
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
</form>