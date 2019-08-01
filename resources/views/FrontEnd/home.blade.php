<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <title>Ticket</title>
</head>
<body>
<nav class="navbar navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class=" navbar-nav mr-auto ">
                <li><a href="/" style="color: #ffffff;font-size: 24px;padding: 20px;margin-right: 20px;"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><input type="text" class="form-control" placeholder="Tìm sự kiện" id="searchname" name="TagName" autocomplete="off"></li>
                <li class="dropdown " style="margin-top: 10px;">
                    <a class="profile " role="button" data-toggle="dropdown" aria-expanded="true">
                        <span class="location-name hidden-xs"><i class="fa fa-map-marker"></i> Chọn địa điểm <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="profile-menu dropdown-menu" role="menu">
                        <li><a href="/event?city=ha-noi" target="_blank">Hà Nội</a></li>
                        <li><a href="/event?city=ho-chi-minh" target="_blank">Hồ Chí Minh</a></li>
                        <li><a href="/event?city=dia-diem-khac" target="_blank">Địa điểm khác</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav">
                <li class="dropdown ">

                    @guest
                        <div class="pt-3">
                        <a href="{{ route('login') }}"class="mn_login" >ĐĂNG NHẬP</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"class="mn_login">ĐĂNG KÝ</a>
                        @endif
                        </div>
                        @else
                        <a class="profile " role="button" data-toggle="dropdown" aria-expanded="true">
                            <table style="margin: 10px 20px 0px 0px;">
                                <tbody>
                                <tr>
                                    <td><span class="profile-photo circle"><img src="uploads/image/{{Auth::user()->image}}" width="30px" height="30px" style="border-radius: 50%"></span></td>
                                    <td class="profile-name">{{Auth::user()->name}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </a>
                    <ul class="profile-menu dropdown-menu" role="menu">
                        <li>
                            <a href="/my-info/my-ticket" target="_blank"><span class="icon ello-ticket-1 color-9"></span>Vé đã đặt</a>
                        </li>
                        <li>
                            <a href="/my-info/my-event" target="_blank"><span class="icon ello-calendar-3 color-9"></span>Sự kiện đã tạo</a>
                        </li>

                        <li>
                            <a href="/my-info/revenue" target="_blank"><span class="icon ello-money color-9"></span>Số dư tài khoản</a>
                        </li>
                        <li>
                            <a href="/my-info/profile" target="_blank"><span class="icon ello-vcard color-9"></span>Thông tin cá nhân</a>
                        </li>

                        <li>
                            <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                        @endguest
                </li>
                <li><a href="{{url('create')}}"><button class="create"><span><i class="fa fa-plus"></i> <strong>Tạo sự kiện</strong></span></button></a></li>
            </ul>


        </div>
    </div>
</nav>

<div class="container-fluid">
    <section class="center slider">
        @if(isset($banners))
            @foreach($banners as $banner)
        <div>
            <img src="storage/banner/{{$banner->img}}">
        </div>
            @endforeach
     @endif

    </section>
</div>
<div class="section-header text-center">
    <span>Sự kiện nổi bật</span>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" ><i class="fa fa-home"></i></label>
                </div>
                <select class="custom-select" id="citySelector">
                    <option selected value>Chọn thành phố...</option>
                    <option value="01TTT">Hà Nội</option>
                    <option value="79TTT">Hồ Chí Minh</option>
                    <option value="all">Tất cả thành phố</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" ><i class="fa fa-list"></i>
                    </label>
                </div>
                <select class="custom-select" id="kindSelector">
                    <option selected value>Chọn thể loại...</option>
                    @if(isset($kinds))
                        @foreach($kinds as $item)

                        @if($item->parent_id == null)
                                <option value="{{$item->kind_id}}" disabled>{{$item->name}}</option>
                                @foreach($kinds as $i)
                                    @if($i->parent_id == $item->kind_id)
                                        <option value="{{$i->kind_id}}">{{$i->name}}</option>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" ><i class="fa fa-sort"></i>
                    </label>
                </div>
                <select class="custom-select" >
                    <option selected>Sắp xếp theo</option>
                    <option value="1">Giá tăng dần</option>
                    <option value="2">Giá giảm dần</option>
                    <option value="3">Sắp xếp theo ng</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" >$</label>
                </div>
                <select class="custom-select" id="priceSelector">
                    <option selected value>Chọn giá vé...</option>
                    <option value="0">Có phí</option>
                    <option value="1">Miễn phí</option>
                </select>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container" id="ajax-event">
    <?php
        $count = -1;
     ?>
    @if(isset($events))
            <div class="row" style="margin-bottom: 35px;">
        @foreach($events as $item)
            <?php $logo = Storage::disk('public')->url('logos'.'/'.$item->logo);
                        if(!Storage::exists('logos/'.$item->logo)) {
                            $logo = Storage::disk('public')->url('logos'.'/'.'default.png');
                        }
                    ?>

            @if($count++ == 1)
                <?php $count = 0;
                    echo "</div><div class='row' style='margin-bottom: 35px;'>"?>
                    @endif
                <?php  $t = Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $item->event_start);?>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body"><a href="{{url('/event')}}/{{$item->url}}"><img src="{{$logo}}" width="100%" height="200px" style="object-fit: cover;"></a></div>
                        <div class="panel-footer">
                            <a href="{{url('/event')}}/{{$item->url}}" > <strong>{{$item->name}}</strong></a>
                            <div class="col-md-12" style="margin:20px 0px 10px 0px;">
                                <div class="row">
                                    <div class="col-md-9">
                                        <span>Từ <strong>252,000 VND</strong></span>
                                        <br>
                                        <button class="city">
                                            <?php
                                                if($item->city_id == '01TTT') echo 'HÀ NỘI';
                                                else if($item->city_id == '79TTT') echo 'HỒ CHÍ MINH';
                                            ?>
                                        </button><span> <i class="fa fa-align-justify"></i>

                                              <?php
                                                  $str = $item->kind_id;
                                                  $arr = explode('.', $str);
                                                  for($i = 0; $i < count($arr); $i++) {
                                                      echo '<a id="a_kind" href="#">'.$kinds[$arr[$i]-1]->name.'</a>';
                                                  }
                                              ?>

                                </span>
                                    </div>
                                    <div class="col-md-3 col-right">
                                        <div class="event-date">
                                            <div class="relative">
                                                <div class="date-month">
                                                    <center>{{$t->month}}</center>
                                                </div>
                                                <div class="date-detail">
                                                    <div class="date-num ">
                                                        <center>{{$t->day}}</center>
                                                    </div>
                                                    <div class="date-day">
                                                        <center>{{$t->shortEnglishDayOfWeek}}</center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        @endif

        {{$events->links()}}
</div>


<script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

    $(document).on('ready', function() {

        $('#searchname').autocomplete({
            source:'{!!URL::route('autocomplete')!!}',
            minlength:1,
            autoFocus:true,
            select:function(e,ui)
            {
                console.log(ui.item.id);
                let url = '' + 'event/' +ui.item.id;
                window.location.href = url;
            }
        });
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


        const customSelect = $('.custom-select');
        for(var i = 0; i < customSelect.length; i++) {

            customSelect[i].addEventListener('change', function () {
                var city_id = $('#citySelector').val();
                var kind_id = $('#kindSelector').val();
                var is_free = $('#priceSelector').val();

                $.ajax({
                    method :'get',
                    url: '{{route('filterEvents')}}',
                    data : {
                        city_id : city_id,
                        kind_id : kind_id,
                        is_free : is_free
                    },
                    success: function (data) {
                        $('#ajax-event').html(data);
                    }

                })

            })
        }
        {{--const a_lement = $('#a_kind');--}}
        {{--a_lement.addEventListener('click', function () {--}}
        {{--    var city_id = $('#citySelector').val();--}}
        {{--    var kind_id = $('#a_kind').val();--}}
        {{--    var is_free = $('#priceSelector').val();--}}
        {{--    $.ajax({--}}
        {{--        method :'get',--}}
        {{--        url: '{{route('filterEvents')}}',--}}
        {{--        data : {--}}
        {{--            city_id : city_id,--}}
        {{--            kind_id : kind_id,--}}
        {{--            is_free : is_free--}}
        {{--        },--}}
        {{--        success: function (data) {--}}
        {{--            console.log('success');--}}
        {{--            $('#ajax-event').html(data);--}}

        {{--        }--}}

        {{--    })--}}
        {{--})--}}

    });

</script>
</body>
</html>