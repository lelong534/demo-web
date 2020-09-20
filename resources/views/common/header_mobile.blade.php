<!-- HEADER -->
<header>
    <div class="header is-mobile">
        <div class="inner">
            <div class="nav">
                <div class="nav-toggle" id="nav-toggle">
                    <img src="{{asset('source/icon_mobile/menu.png')}}" alt="menu">
                </div>
                <div>
                    <a href="{{route('home')}}" class="nav-logo">
                        <img src="{{asset('source/icon_mobile/logo.png')}}" alt="logo">
                    </a>
                </div>
                <div>
                    <img src="{{asset('source/icon_mobile/search.png')}}" alt="search">
                </div>
            </div>
            <div class="nav-menu" id="nav-menu">
                <div class="nav-user">
                    <a href="#">Đăng kí</a>
                    <a href="#">Đăng nhập</a>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">Dịch vụ di động</li>
                    <li class="nav-item">Hỗ trợ khách hàng</li>
                    <li class="nav-item">Tin tức</li>
                    <li class="nav-item">Tuyển dụng</li>
                    <li class="nav-item has-border">My Mobifone</li>
                    <li class="nav-item has-border">Cá nhân</li>
                    <li class="nav-item has-border">Ngôn ngữ</li>
                </ul>
            </div>   
        </div>
    </div>

    <div class="header is-desktop">
        <div class="inner">
            <div class="headerImage">
                <a href="{{route('employ')}}">
                    <img src="{{asset('source/image/logo-header.svg')}}" alt="#"/>
                </a>
            </div>
            <div class="header-items">
                <div class="dropdown header-item">
                  <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cá nhân
                  </div>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="header-item">Đăng nhập/Đăng ký</div>
                <div class="header-item">
                    <img src="{{asset('source/icons/icon-flag.svg')}}" class="icon" />
                </div>
                <form>
                    <div class="search-box">
                        <input type="text" name="search" class="inputSearch font-italic" placeholder="Search" >
                        <span><img src="https://img.icons8.com/ios/50/000000/search--v1.png" class="searchIcon"/></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="header-menu is-desktop">
        <ul class="nav-list">
            <li><a href="#" class="nav-item active">Dịch vụ di động</a></li>
            <li><a href="#" class="nav-item">Hỗ trợ khách hàng</a></li>
            <li><a href="#" class="nav-item">Tin tức</a></li>
            <li><a href="#" class="nav-item">Tuyển dụng</a></li>
            <li><a href="#" class="nav-item">My Mobifone</a></li>
        </ul>
    </div>      
</header>