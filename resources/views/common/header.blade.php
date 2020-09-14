<!-- header -->
<div class="header">
    <div class="headerImage">
        <a href="{{route('employ')}}">
            <img src="{{asset('source/image/logo-header.svg')}}" alt="#"/>
        </a>
    </div>
    <div class="headerItems">
        <div class="dropdown headerItem">
          <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cá nhân
          </div>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="headerItem">Đăng nhập/Đăng ký</div>
        <div class="headerItem">
            <img src="https://img.icons8.com/cute-clipart/64/000000/usa.png" class="icon" />
        </div>
        <form>
            <div class="search-box">
                <input type="text" name="search" class="inputSearch font-italic" placeholder="Search" >
                <span><img src="https://img.icons8.com/ios/50/000000/search--v1.png" class="searchIcon"/></span>
            </div>
        </form>
    </div>
</div>

<!-- menu list -->
<div class="menu-list">
    <div class="menu-list-item"><a class="link-no-decoration" href="">Dịch vụ di động</a></div>
    <div class="menu-list-item"><a class="link-no-decoration" href="">Chăm sóc khách hàng</a></div>
    <div class="menu-list-item"><a class="link-no-decoration" href="">Tin tức</a></div>
    <div class="menu-list-item active"><a class="link-no-decoration" href="">Tuyển dụng</a></div>
    <div class="menu-list-item"><a class="link-no-decoration" href="">My Mobilephone</a></div>
</div>