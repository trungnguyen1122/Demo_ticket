<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/image/logo.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SuperTicket - @yield('title')</title>


    <!-- Custom Theme Style -->
    <link href="{{asset('custom.css')}}" rel="stylesheet">
    <link href="https://tkbvn-tokyo.s3.amazonaws.com/dist/tkbvn/css/loading.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/yourstyle.css')}}" type="text/css">
    <link rel="apple-touch-icon" sizes="114x114" href="https://tkbvn-tokyo.s3.amazonaws.com/images-v2/icon.png?v1">
    <link rel="apple-touch-icon" sizes="72x72" href="https://tkbvn-tokyo.s3.amazonaws.com/images-v2/icon.png?v1">
    <link rel="apple-touch-icon" href="https://tkbvn-tokyo.s3.amazonaws.com/images-v2/icon.png?v1">
    <link rel="stylesheet" href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/jqueryui/jquery-ui-1.10.3.custom.css">
    <link rel="stylesheet" href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/jquery.timepicker.css">
    <link rel="stylesheet" type="text/css" href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/loading.css">
    <link rel="stylesheet" type="text/css" href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/easy-pie-chart.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/left-bar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">

    <link rel="stylesheet" href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/bootstrap/bootstrap-select.css">
    <link rel="stylesheet" href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/bootstrap/base/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <style>

        .main-content {
            width: 70%;
            margin-left: 30%;
            overflow: auto;
        }
        .w-content {e
            margin: 5% auto;
        }

    </style>


    </script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
    <script type="text/javascript" async="" src="//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"></script>
    <script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.9.1" async=""></script>
    <script src="https://connect.facebook.net/signals/config/307447363083179?v=2.9.1&amp;r=stable" async=""></script>
    <script async="" src="//connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>





    <style>
        iframe[name='google_conversion_frame'] {
            height: 0 !important;
            width: 0 !important;
            line-height: 0 !important;
            font-size: 0 !important;
            margin-top: -13px;
            float: left;
        }
    </style>
    <script>
        var URL_VERSION = '3006',
            userId = 0,
            userEmail = null;
        userId = 393549; userEmail = 'kylix.par@gmail.com';

        var tkb = window.tkb || {};
        window.tkb = tkb;

        tkb.siteSetting = tkb.siteSetting || {
            siteId: 1,
            staticDomain: 'https://tkbvn-tokyo.s3.amazonaws.com',
            staticRootPath: 'https://tkbvn-tokyo.s3.amazonaws.com/dist/tkbvn',
            urlVersion: '3006',
            folderName: 'tkbvn',
            //userId: userId,
            //userEmail: userEmail,
            culture: {
                defaultCulture: 'en',
                currenctCulture: 'vi',
                listCulture: [{"id":1,"name":"Tiếng Việt","languageIsoCode":"vi","cultureIsoCode":"vi-VN","priority":1},{"id":2,"name":"English","languageIsoCode":"en","cultureIsoCode":"en-US","priority":2}]
            },
            currency: {
                name: 'Vietnamese Dong',
                isoCode: 'VND',
                symbol: '₫'
            },
            tracking: {
                gaTrackingId: 'UA-44294974-1',
                fbTrackingId: '307447363083179'
            }
        };
    </script>
    <script type="text/javascript" src="https://dx.steelhousemedia.com/spx?dxver=4.0.0&amp;shaid=12625&amp;tdr=https%3A%2F%2Fticketbox.vn%2Fmy-ticketbox%2Forders&amp;plh=https%3A%2F%2Fticketbox.vn%2Fmy-ticketbox%2Forders&amp;cb=57108246772656180"></script><script src="https://tkbvn-tokyo.s3.amazonaws.com/dist/tkbvn/js/tkb.js?v=3006"></script>
    <!-- Google Code for Remarketing Tag -->
    <script type="text/javascript">
        var google_tag_params = {};
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 985278676;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/985278676/?random=1563934603680&amp;cv=9&amp;fst=1563934603680&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635471&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=1&amp;u_tz=420&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;frm=0&amp;url=https%3A%2F%2Fticketbox.vn%2Fmy-ticketbox%2Forders&amp;ref=https%3A%2F%2Fticketbox.vn%2Fmy-ticketbox%2Forders&amp;tiba=V%C3%A9%20cho%20c%C3%A1c%20s%E1%BB%B1%20ki%E1%BB%87n%20s%E1%BA%AFp%20t%E1%BB%9Bi%20c%E1%BB%A7a%20t%C3%B4i%20%7C%20TicketBox&amp;rfmt=3&amp;fmt=4"></script><style type="text/css"></style><style type="text/css"></style><style type="text/css" id="notify-bootstrap">
        .notifyjs-bootstrap-base {
            font-weight: bold;
            padding: 8px 15px 8px 14px;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #fcf8e3;
            border: 1px solid #fbeed5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            white-space: nowrap;
            padding-left: 25px;
            background-repeat: no-repeat;
            background-position: 3px 7px;
        }
        .notifyjs-bootstrap-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border-color: #EED3D7;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAtRJREFUeNqkVc1u00AQHq+dOD+0poIQfkIjalW0SEGqRMuRnHos3DjwAH0ArlyQeANOOSMeAA5VjyBxKBQhgSpVUKKQNGloFdw4cWw2jtfMOna6JOUArDTazXi/b3dm55socPqQhFka++aHBsI8GsopRJERNFlY88FCEk9Yiwf8RhgRyaHFQpPHCDmZG5oX2ui2yilkcTT1AcDsbYC1NMAyOi7zTX2Agx7A9luAl88BauiiQ/cJaZQfIpAlngDcvZZMrl8vFPK5+XktrWlx3/ehZ5r9+t6e+WVnp1pxnNIjgBe4/6dAysQc8dsmHwPcW9C0h3fW1hans1ltwJhy0GxK7XZbUlMp5Ww2eyan6+ft/f2FAqXGK4CvQk5HueFz7D6GOZtIrK+srupdx1GRBBqNBtzc2AiMr7nPplRdKhb1q6q6zjFhrklEFOUutoQ50xcX86ZlqaZpQrfbBdu2R6/G19zX6XSgh6RX5ubyHCM8nqSID6ICrGiZjGYYxojEsiw4PDwMSL5VKsC8Yf4VRYFzMzMaxwjlJSlCyAQ9l0CW44PBADzXhe7xMdi9HtTrdYjFYkDQL0cn4Xdq2/EAE+InCnvADTf2eah4Sx9vExQjkqXT6aAERICMewd/UAp/IeYANM2joxt+q5VI+ieq2i0Wg3l6DNzHwTERPgo1ko7XBXj3vdlsT2F+UuhIhYkp7u7CarkcrFOCtR3H5JiwbAIeImjT/YQKKBtGjRFCU5IUgFRe7fF4cCNVIPMYo3VKqxwjyNAXNepuopyqnld602qVsfRpEkkz+GFL1wPj6ySXBpJtWVa5xlhpcyhBNwpZHmtX8AGgfIExo0ZpzkWVTBGiXCSEaHh62/PoR0p/vHaczxXGnj4bSo+G78lELU80h1uogBwWLf5YlsPmgDEd4M236xjm+8nm4IuE/9u+/PH2JXZfbwz4zw1WbO+SQPpXfwG/BBgAhCNZiSb/pOQAAAAASUVORK5CYII=);
        }
        .notifyjs-bootstrap-success {
            color: #468847;
            background-color: #DFF0D8;
            border-color: #D6E9C6;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAutJREFUeNq0lctPE0Ecx38zu/RFS1EryqtgJFA08YCiMZIAQQ4eRG8eDGdPJiYeTIwHTfwPiAcvXIwXLwoXPaDxkWgQ6islKlJLSQWLUraPLTv7Gme32zoF9KSTfLO7v53vZ3d/M7/fIth+IO6INt2jjoA7bjHCJoAlzCRw59YwHYjBnfMPqAKWQYKjGkfCJqAF0xwZjipQtA3MxeSG87VhOOYegVrUCy7UZM9S6TLIdAamySTclZdYhFhRHloGYg7mgZv1Zzztvgud7V1tbQ2twYA34LJmF4p5dXF1KTufnE+SxeJtuCZNsLDCQU0+RyKTF27Unw101l8e6hns3u0PBalORVVVkcaEKBJDgV3+cGM4tKKmI+ohlIGnygKX00rSBfszz/n2uXv81wd6+rt1orsZCHRdr1Imk2F2Kob3hutSxW8thsd8AXNaln9D7CTfA6O+0UgkMuwVvEFFUbbAcrkcTA8+AtOk8E6KiQiDmMFSDqZItAzEVQviRkdDdaFgPp8HSZKAEAL5Qh7Sq2lIJBJwv2scUqkUnKoZgNhcDKhKg5aH+1IkcouCAdFGAQsuWZYhOjwFHQ96oagWgRoUov1T9kRBEODAwxM2QtEUl+Wp+Ln9VRo6BcMw4ErHRYjH4/B26AlQoQQTRdHWwcd9AH57+UAXddvDD37DmrBBV34WfqiXPl61g+vr6xA9zsGeM9gOdsNXkgpEtTwVvwOklXLKm6+/p5ezwk4B+j6droBs2CsGa/gNs6RIxazl4Tc25mpTgw/apPR1LYlNRFAzgsOxkyXYLIM1V8NMwyAkJSctD1eGVKiq5wWjSPdjmeTkiKvVW4f2YPHWl3GAVq6ymcyCTgovM3FzyRiDe2TaKcEKsLpJvNHjZgPNqEtyi6mZIm4SRFyLMUsONSSdkPeFtY1n0mczoY3BHTLhwPRy9/lzcziCw9ACI+yql0VLzcGAZbYSM5CCSZg1/9oc/nn7+i8N9p/8An4JMADxhH+xHfuiKwAAAABJRU5ErkJggg==);
        }
        .notifyjs-bootstrap-info {
            color: #3A87AD;
            background-color: #D9EDF7;
            border-color: #BCE8F1;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QYFAhkSsdes/QAAA8dJREFUOMvVlGtMW2UYx//POaWHXg6lLaW0ypAtw1UCgbniNOLcVOLmAjHZolOYlxmTGXVZdAnRfXQm+7SoU4mXaOaiZsEpC9FkiQs6Z6bdCnNYruM6KNBw6YWewzl9z+sHImEWv+vz7XmT95f/+3/+7wP814v+efDOV3/SoX3lHAA+6ODeUFfMfjOWMADgdk+eEKz0pF7aQdMAcOKLLjrcVMVX3xdWN29/GhYP7SvnP0cWfS8caSkfHZsPE9Fgnt02JNutQ0QYHB2dDz9/pKX8QjjuO9xUxd/66HdxTeCHZ3rojQObGQBcuNjfplkD3b19Y/6MrimSaKgSMmpGU5WevmE/swa6Oy73tQHA0Rdr2Mmv/6A1n9w9suQ7097Z9lM4FlTgTDrzZTu4StXVfpiI48rVcUDM5cmEksrFnHxfpTtU/3BFQzCQF/2bYVoNbH7zmItbSoMj40JSzmMyX5qDvriA7QdrIIpA+3cdsMpu0nXI8cV0MtKXCPZev+gCEM1S2NHPvWfP/hL+7FSr3+0p5RBEyhEN5JCKYr8XnASMT0xBNyzQGQeI8fjsGD39RMPk7se2bd5ZtTyoFYXftF6y37gx7NeUtJJOTFlAHDZLDuILU3j3+H5oOrD3yWbIztugaAzgnBKJuBLpGfQrS8wO4FZgV+c1IxaLgWVU0tMLEETCos4xMzEIv9cJXQcyagIwigDGwJgOAtHAwAhisQUjy0ORGERiELgG4iakkzo4MYAxcM5hAMi1WWG1yYCJIcMUaBkVRLdGeSU2995TLWzcUAzONJ7J6FBVBYIggMzmFbvdBV44Corg8vjhzC+EJEl8U1kJtgYrhCzgc/vvTwXKSib1paRFVRVORDAJAsw5FuTaJEhWM2SHB3mOAlhkNxwuLzeJsGwqWzf5TFNdKgtY5qHp6ZFf67Y/sAVadCaVY5YACDDb3Oi4NIjLnWMw2QthCBIsVhsUTU9tvXsjeq9+X1d75/KEs4LNOfcdf/+HthMnvwxOD0wmHaXr7ZItn2wuH2SnBzbZAbPJwpPx+VQuzcm7dgRCB57a1uBzUDRL4bfnI0RE0eaXd9W89mpjqHZnUI5Hh2l2dkZZUhOqpi2qSmpOmZ64Tuu9qlz/SEXo6MEHa3wOip46F1n7633eekV8ds8Wxjn37Wl63VVa+ej5oeEZ/82ZBETJjpJ1Rbij2D3Z/1trXUvLsblCK0XfOx0SX2kMsn9dX+d+7Kf6h8o4AIykuffjT8L20LU+w4AZd5VvEPY+XpWqLV327HR7DzXuDnD8r+ovkBehJ8i+y8YAAAAASUVORK5CYII=);
        }
        .notifyjs-bootstrap-warn {
            color: #C09853;
            background-color: #FCF8E3;
            border-color: #FBEED5;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAABJlBMVEXr6eb/2oD/wi7/xjr/0mP/ykf/tQD/vBj/3o7/uQ//vyL/twebhgD/4pzX1K3z8e349vK6tHCilCWbiQymn0jGworr6dXQza3HxcKkn1vWvV/5uRfk4dXZ1bD18+/52YebiAmyr5S9mhCzrWq5t6ufjRH54aLs0oS+qD751XqPhAybhwXsujG3sm+Zk0PTwG6Shg+PhhObhwOPgQL4zV2nlyrf27uLfgCPhRHu7OmLgAafkyiWkD3l49ibiAfTs0C+lgCniwD4sgDJxqOilzDWowWFfAH08uebig6qpFHBvH/aw26FfQTQzsvy8OyEfz20r3jAvaKbhgG9q0nc2LbZxXanoUu/u5WSggCtp1anpJKdmFz/zlX/1nGJiYmuq5Dx7+sAAADoPUZSAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfdBgUBGhh4aah5AAAAlklEQVQY02NgoBIIE8EUcwn1FkIXM1Tj5dDUQhPU502Mi7XXQxGz5uVIjGOJUUUW81HnYEyMi2HVcUOICQZzMMYmxrEyMylJwgUt5BljWRLjmJm4pI1hYp5SQLGYxDgmLnZOVxuooClIDKgXKMbN5ggV1ACLJcaBxNgcoiGCBiZwdWxOETBDrTyEFey0jYJ4eHjMGWgEAIpRFRCUt08qAAAAAElFTkSuQmCC);
        }
    </style>
    <style type="text/css" id="core-notify">
        .notifyjs-corner {
            position: fixed;
            margin: 5px;
            z-index: 1050;
        }

        .notifyjs-corner .notifyjs-wrapper,
        .notifyjs-corner .notifyjs-container {
            position: relative;
            display: block;
            height: inherit;
            width: inherit;
            margin: 3px;
        }

        .notifyjs-wrapper {
            z-index: 1;
            position: absolute;
            display: inline-block;
            height: 0;
            width: 0;
        }

        .notifyjs-container {
            display: none;
            z-index: 1;
            position: absolute;
            cursor: pointer;
        }

        [data-notify-text],[data-notify-html] {
            position: relative;
        }

        .notifyjs-arrow {
            position: absolute;
            z-index: 2;
            width: 0;
            height: 0;
        }</style>
    <style type="text/css">
        .noscript { display: none; }
    </style>
    <style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">
        .zopim { display: none !important }
    </style>
</head>

<body>
<div class="wrapper" id="creat-event">
    @include('layouts.my_ticket.menu')


    @yield('main')

    <!-- footer content -->





    <!-- jQuery Smart Wizard -->
    <script src="{{asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{asset('../build/js/custom.min.js')}}"></script>


</div>
</body>
