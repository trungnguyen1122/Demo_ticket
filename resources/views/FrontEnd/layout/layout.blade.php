<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Ticket box</title>
</head>
<body>
<nav class="navbar navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class=" navbar-nav mr-auto ">
                <li ><a href="/" class="icon_home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><input  type="text" class="form-control" placeholder="Tìm sự kiện"></li>
                <li class="dropdown " style="margin-top: 10px;">
                    <a class="profile " role="button" data-toggle="dropdown" aria-expanded="true">
                        <span class="location-name hidden-xs"><i class="fa fa-map-marker"></i> Chọn địa điểm <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="profile-menu dropdown-menu" role="menu">
                        <li><a href="/my-ticketbox/orders" target="_blank">Hồ Chí Minh</a></li>
                        <li><a href="/my-ticketbox/events" target="_blank">Hà Nội</a></li>
                        <li><a href="/my-ticketbox/revenue" target="_blank">Địa điểm khác</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav">
                <li class="dropdown ">
                    <a class="profile " role="button" data-toggle="dropdown" aria-expanded="true">
                        <table style="margin: 10px 20px 0px 0px;">
                            <tbody>
                            <tr>
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <td><span class="profile-photo circle"><img src="uploads/image/{{Auth::user()->image}}" width="30px" height="30px" style="border-radius: 50%"></span></td>
                                            <td class="profile-name">{{Auth::user()->name}}</td>
                                        @endauth
                                    </div>
                                @endif

                            </tr>
                            </tbody>
                        </table>
                    </a>
                    <ul class="profile-menu dropdown-menu" role="menu">
                        <li>
                            <a href="/my-ticketbox/orders" target="_blank"><span class="icon ello-ticket-1 color-9"></span>Vé đã đặt</a>
                        </li>
                        <li>
                            <a href="/my-ticketbox/events" target="_blank"><span class="icon ello-calendar-3 color-9"></span>Sự kiện đã tạo</a>
                        </li>

                        <li>
                            <a href="/my-ticketbox/revenue" target="_blank"><span class="icon ello-money color-9"></span>Số dư tài khoản</a>
                        </li>
                        <li>
                            <a href="/my-ticketbox/profile" target="_blank"><span class="icon ello-vcard color-9"></span>Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a data-action="logout"><span class="icon ello-logout-1 color-9"></span>Đăng xuất</a>
                        </li>
                    </ul>
                </li>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        @else
                            <a href="{{ route('login') }}" class="menu_login">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }} "class="menu_login">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <li><a href="{{route('create')}}"><button class="create"><span><i class="fa fa-plus"></i> <strong>Tạo sự kiện</strong></span></button></a></li>
            </ul>

        </div>
    </div>
</nav>
@yield('main')
<footer>
    <div class="row" style="padding:45px 0 0 45px;">
        <div class="col-sm-6 col-md-3">
            <p class="text-title">Hotline hỗ trợ</p>
            <p class="text-content"><i class="fa fa-phone"></i>  Hồ Chí Minh: Thứ 2 - Thứ 6 (8:30 - 19:30) </p>
            <p class="text-strong">028.7300.7998</p>
            <p class="text-content"><i class="fa fa-phone"></i>  Hà Nội: Thứ 2 - Thứ 6 (8:30 - 19:30) </p>
            <p class="text-strong">028.7300.7998</p>
            <p class="text-title">Hotline hỗ trợ</p>
            <p class="text-content"><i class="fa fa-envelope-o"></i> Support@gmail.com</p>
        </div>

        <div class="col-sm-6 col-md-3">
            <p class="text-title">Chúng tôi giúp gì được cho bạn?</p>
            <p class="text-content">Dễ dàng-Tiện dụng-Bảo mật cao</p>
            <p class="text-title">Văn phòng Hồ Chí Minh</p>
            <p class="text-content"><i class="fa fa-map-marker"> Tầng 1, Cao ốc văn phòng H3, 384 Hoàng Diệu, Q4, TPHCM</i></p>
            <p class="text-title">Văn phòng Hà Nội</p>
            <p class="text-content"><i class="fa fa-map-marker"> Cao 1ốc42 Lê Duẩn, Khâm Thiên, Đống Đa, Hà Nội</i></p>
        </div>

        <div class="visible-sm-block" style="clear:both"></div>

        <div class="col-sm-6 col-md-3">
            <p class="text-title">Hướng dẫn mua vé</p>
            <p class="text-content">Chỉ với vài thao tác đơn giản</p>
            <p class="text-title">Về công ty chúng tôi</p>
            <p class="text-content">Cơ chế giải quyết tranh chấp/ khiếu nại</p>
            <p class="text-content">Quy chế hoạt động sàn TMĐT</p>
            <p class="text-content">Thông tin tuyển dụng</p>
            <p class="text-content">Thông tin về GiiG</p>
        </div>

        <div class="col-sm-6 col-md-3">
            <p class="text-title">FAQ</p>
            <p class="text-content">Câu hỏi thường gặp</p>
        </div>
    </div><hr>

</footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".lazy").slick({
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });

</script>

</body>
</html>