
    <div id="sideLeft" class="sidebar">
        <!-- profile -->

        <div class="side-top top-bar">
            <div class="logo left">
                <a href="/" title="SuperTicket">
                    <i class="fa fa-home" aria-hidden="true" style="color:#FFFFFF;font-size: 24px;"></i>
                </a>
            </div>

            <!-- Đã đăng nhập -->
            <div class="profile right dropdown">
                <a class="profile-name dropdown-toggle right" data-toggle="dropdown">


                    <img src="{{asset('')}}uploads/image/{{Auth::user()->image}}" class="img-circle small-avatar" id="small-avatar-user">
                    {{Auth::user()->name}}

                </a>
                <ul class="dropdown-menu right">
                    <li><a href="{{route('myTicket')}}">Vé đã mua</a></li>
                    <li><a href="{{route('myProfile')}}" class="odd">Hồ sơ cá nhân</a></li>
                    <li><a href="{{route('myEvent')}}" class="odd">Sự kiện đã tạo</a></li>
                    <li><a href="{{route('revenue')}}" class="odd">Số dư tài khoản</a></li>
                    <li><a href="{{route('auth.changepassword')}}">Thay đổi password</a></li>
                    <li><a href="/user/signout?redirectUrl=/">Đăng xuất</a></li>
                </ul>
            </div>
            <script type="text/javascript">

                if (window.location.hash && window.location.hash == '#_=_') {
                    window.location.hash = '';
                }
            </script>

            <div class="clr"></div>

        </div>
        <!--/profile-->
        <div class="nav-bar">
            <ul class="list-ctrl">
                <li id="lk-your-profile" class="li-ctrl"><a href="{{route('myProfile')}}" title="Hồ sơ cá nhân"><span class="i-human"></span> Hồ sơ cá nhân</a></li>
                <li id="lk-your-ticket" class="li-ctrl "><a href="{{route('myTicket')}}" title="Vé đã mua"><span class="i-tix"></span> Vé đã mua</a></li>
                <li id="lk-your-event" class="li-ctrl "><a href="{{route('myEvent')}}" title="Sự kiện đã tạo"><span class="i-calendar"></span> Sự kiện đã tạo </a></li>
                <li id="lk-your-account" class="li-ctrl "><a href="{{route('revenue')}}"><span class="i-dolar"></span> Số dư tài khoản</a></li>
                <li id="lk-your-option" class="li-ctrl"><a href="{{route('myBank')}}"><span class="i-pig"></span> Tài khoản ngân hàng</a></li>


            </ul>
        </div>




    </div>
