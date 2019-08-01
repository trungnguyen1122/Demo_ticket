<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
    <base href="{{asset('')}}">

{{--    end--}}

    <link href="admin/vendors/nprogress/nprogress.css" rel="stylesheet">

    <link href="admin/build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="asset/vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

    <!-- Font Awesome -->
    <!-- NProgress -->

    <!-- Custom styling plus plugins -->
    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="admin/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="admin/build/js/custom.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>







</head>

<body>
<nav class="navbar navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class=" navbar-nav mr-auto ">
                <a href="/" style="color: #FFFFFF;font-size: 24px;"><i class="fa fa-home" aria-hidden="true"></i></a>

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
            </ul>

        </div>
    </div>
</nav>

<div class="row" style="margin-top: 30px;"><div class="col-md-12"><center><strong><h2>Tạo sự kiện</h2></strong></center></div></div>

<div class="main">
    <div class="container">
        <form method="POST" id="signup-form" class="signup-form" action="{{route('submit')}} " enctype="multipart/form-data">
            {{ csrf_field()}}
            <div>
                <h3>Thông tin sự kiện</h3>
                <fieldset>
                    <h2>Thông tin về sự kiện</h2>
                    <p class="desc">Vui lòng điền đầy đủ thông tin ở các trường phía dưới.</p>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label class="form-label">Hình ảnh banner</label>

                            <input type="file" id="fileName" name="logo"  onchange="validateFileType()">
                            <center><img id="blah" src="#" alt="your banner" width="555" height="210"/></center>
                        </div>


                        <div class="form-row">
                            <label class="form-label">Tên sự kiện</label>
                            <div class="form-group">
                                <input type="text" name="event_name" id="first_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Địa điểm</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="text-input">Tên địa điểm</span>
                                    <input type="text" name="location" required />
                                    <span class="text-input">Địa chỉ</span>
                                    <input type="text" name="address" required />
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input">Đường dẫn đến sự kiện</span>
                                    <input type="text" name="url" required />
                                    <select name="city" id="provinceSelector" style="margin-top:30px" required>
                                        <option value="">Tỉnh Thành phố</option>
                                        @if(isset($provinces))
                                            @foreach($provinces as $item)
                                                <option value="{{$item->provinceid}}">{{$item->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <select name="district" id="district" required>
                                        <option value="">Quận huyện</option>

                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Chọn loại sự kiện...</label>
                            <select class="" id="multipleSelectExample" data-placeholder="Select an option" multiple="" style="width: 500px" required name="kind[]">

                                @if(isset($kinds))
                                    @foreach($kinds as $item)
                                        <option value="{{$item->kind_id}}" disabled>{{$item->name}}</option>
                                        @foreach($item->kinds as $i)
                                            <option value="{{$i->kind_id}}">{{$i->name}}</option>
                                        @endforeach
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ssn" class="form-label">Thông tin sự kiện</label>
                        </div>
                        <textarea class="summernote" name="event_info" required value="Nhập thông tin sự kiên"></textarea>
                    </div>
                </fieldset>

                <h3>Thông tin liên lạc</h3>
                <fieldset>
                    <h2 style="margin-bottom: 25px;">Thông tin liên lạc</h2>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label>Tên nhà tổ chức</label>
                            <input type="text" name="organization"  required/>
                        </div>
                        <div class="form-group">
                            <label>Thông tin nhà tổ chức</label>
                        </div>

                        <textarea class="summernote" name="org_info" value="Nhập thông tin nhà tổ chức" required></textarea>

                        <div class="form-row">
                            <label class="form-label">Thông tin liên lạc</label>
                            <div class="form-flex">
                                <div class="form-group">
                                    <input type="number" name="phone" placeholder="Số điện thoại"  required />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Thư điện tử" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h3>Thời gian diễn ra</h3>
                <fieldset>
                    <h2 style="margin-bottom: 55px;">Thời gian</h2>
                    <div class="fieldset-content">
                        <div class="form-row">
                            <div class="form-flex">
                                <div class="form-group">
                                    <label>Ngày bắt đầu</label>
                                    <input type="date"  name="event_date_start" required />
                                </div>
                                <div class="form-group">
                                    <label>Ngày kết thúc</label>
                                    <input type="date"  name="event_date_end" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset-content">
                        <div class="form-row">
                            <div class="form-flex">

                                <div class="form-group">
                                    <label>Thời gian bắt đầu</label>
                                    <input type="time" value="00:00" name="event_time_start" required />
                                </div>
                                <div class="form-group">
                                    <label>Thời gian kết thúc</label>
                                    <input type="time" value="00:00"  name="event_time_end" required />
                                </div>
                            </div>
                        </div>
                    </div>




                </fieldset>
                <h3>Loại vé</h3>
                <fieldset style="padding: 20px;">
                    <h2 style="margin-bottom: 55px;">Loại vé</h2>
                    <div class="fieldset-content">
                           <div class="show w-100">
                               <div class="container" id="addticket">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="x_panel">
                                               <div class="x_title">
                                                   <h2 style="color: black;font-weight: bold">Loại vé</h2>
                                                   <ul class="nav navbar-right panel_toolbox" style="color: black">
                                                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                       </li>
                                                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                       </li>
                                                   </ul>
                                                   <div class="clearfix"></div>
                                               </div>
                                               <div class="x_content">
                                   <div class="form-group">
                                       <center><strong><label>Ngày bán vé</label></strong></center><hr>
                                   </div>
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label>Ngày bắt đầu</label>
                                                               <input type="date"  name="ticket_date_start[]" required />
                                                           </div>
                                                           <div class="form-group">
                                                               <label>Ngày kết thúc</label>
                                                               <input type="date" name="ticket_date_end[]" required />
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                           <div class="form-group">
                                                               <label>Thời gian bắt đầu</label>
                                                               <input type="time"  name="ticket_time_start[]" value="00:00" required />
                                                           </div>
                                                           <div class="form-group">
                                                               <label>Thời gian kết thúc</label>
                                                               <input type="time"  name="ticket_time_end[]" value="00:00" required/>
                                                           </div>
                                                       </div>
                                                        <div class="col-md-12" style="margin-top: 30px;">
                                                       <div class="row">
                                                           <div class="col-md-6">
                                                               <div class="form-group">
                                                                   <label>Tên vé</label>
                                                                   <input type="text"  name="ticket_name[]" required />
                                                               </div>
                                                               <div class="form-group">
                                                                   <label>Giá vé (VNĐ)</label>
                                                                   <input type="number" name="price[]" required />
                                                               </div>

                                                           </div>
                                                           <div class="col-md-6">
                                                               <div class="form-group">
                                                                   <label>Số lượng vé</label>
                                                                   <input type="number" name="qty[]" required />
                                                               </div>
                                                               <div class="form-group">
                                                                   <label>Số vé tối đa một đơn</label>
                                                                   <input type="number"  name="maxqty[]" required/>
                                                               </div>
                                                           </div>
                                                       </div></div>


                                                       <div class="form-group">
                                                           <label>Mô tả vé</label>
                                                       </div>
                                                       <textarea  name="ticket_desc[]" style="width: 100%"></textarea>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                        <div class="form-group">
                            <center><strong><label class="btn" id="add_btn">Thêm loại vé</label></strong></center>
                        </div>
                    </div>
                </fieldset>
            </div>
            <button class="btn btn-lg btn-primary" style="float: right;" type="submit">submit</button>
        </form>
    </div>

</div>

<script src="admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="admin/vendors/nprogress/nprogress.js"></script>
<script src="asset/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="asset/vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="asset/vendor/jquery-steps/jquery.steps.js"></script>
<script src="asset/vendor/minimalist-picker/dobpicker.js"></script>
<script src="asset/vendor/nouislider/nouislider.min.js"></script>
<script src="asset/vendor/wnumb/wNumb.js"></script>
<script src="asset/js/main.js"></script>
<!-- Bootstrap -->
<!-- FastClick -->


<!-- Custom Theme Scripts -->

</body>

<script type="text/javascript">
    let file = document.getElementById("fileName");
    function validateFileType(){
        var fileName = file.value,
            idxDot = fileName.lastIndexOf(".") + 1,
            extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){

        }else{
            alert("Only jpg/jpeg and png files are allowed!");
            file.value = "";  // Reset the input so no files are uploaded
        }
    }
    $(document).ready(function () {

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#fileName").change(function() {
            readURL(this);
        });


            $('#multipleSelectExample').select2({
                maximumSelectionLength:2
            });
            const provinceSelector = document.getElementById('provinceSelector');
            provinceSelector.addEventListener('change', function () {
                var province_id = $('#provinceSelector').val();
                $('#district').val('');
                $.ajax({
                    method: 'get',
                    url: '/province/' + province_id,
                    success : function (data) {
                        var result = '';
                        for(var i = 0; i < data.length; i++) {
                            result += '<option value="'+ data[i].districtid+'">'+ data[i].name+'</option>';
                        }
                        $('#district').html(result);
                    }
                })
            });
        $("#add_btn").click(function(){
            $('#addticket').add(' <div class="row">\n' +
                '                                       <div class="col-md-12">\n' +
                '                                           <div class="x_panel">\n' +
                '                                               <div class="x_title">\n' +
                '                                                   <h2 style="color:black;font-weight: bold">Loại vé</h2>\n' +
                '                                                   <ul class="nav navbar-right panel_toolbox" style="color: black">\n' +
                '                                                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>\n' +
                '                                                       </li>\n' +
                '                                                       <li><a class="close-link"><i class="fa fa-close"></i></a>\n' +
                '                                                       </li>\n' +
                '                                                   </ul>\n' +
                '                                                   <div class="clearfix"></div>\n' +
                '                                               </div>\n' +
                '                                               <div class="x_content">\n' +
                '                                   <div class="form-group">\n' +
                '                                       <center><strong><label>Ngày bán vé</label></strong></center><hr>\n' +
                '                                   </div>\n' +
                '                               <div class="form-group">\n' +
                '                                   <label>Ngày bắt đầu</label>\n' +
                '                                   <input type="date"  name="ticket_date_start[]" required />\n' +
                '                               </div>\n' +
                '                               <div class="form-group">\n' +
                '                                   <label>Ngày kết thúc</label>\n' +
                '                                   <input type="date" name="ticket_date_end[]" required />\n' +
                '                               </div>\n' +
                '                               <div class="form-group">\n' +
                '                                   <label>Thời gian bắt đầu</label>\n' +
                '                                   <input type="time"  name="ticket_time_start[]" required />\n' +
                '                               </div>\n' +
                '                               <div class="form-group">\n' +
                '                                   <label>Thời gian kết thúc</label>\n' +
                '                                   <input type="time"  name="ticket_time_end[]" required/>\n' +
                '                               </div>\n' +
                '\n' +
                '\n' +
                '                                                   <div class="col-md-12 col-lg-12 col-sm-12">\n' +
                '                                                       <div class="form-group">\n' +
                '                                                           <label>Tên vé</label>\n' +
                '                                                           <input type="text"  name="ticket_name[]" required />\n' +
                '                                                       </div>\n' +
                '                                                       <div class="form-group">\n' +
                '                                                           <label>Giá vé (VNĐ)</label>\n' +
                '                                                           <input type="number" name="price[]" required />\n' +
                '                                                       </div>\n' +
                '                                                       <div class="form-group">\n' +
                '                                                           <label>Số lượng vé</label>\n' +
                '                                                           <input type="number"  name="qty[]" required />\n' +
                '                                                       </div>\n' +
                '                                                       <div class="form-group">\n' +
                '                                                           <label>Số vé tôi đa một đơn</label>\n' +
                '                                                           <input type="number"  name="maxqty[]" required/>\n' +
                '                                                       </div>\n' +
                '                                                       <div class="form-group">\n' +
                '                                                           <label>Mô tả vé</label>\n' +
                '                                                       </div>\n' +
                '                                                       <textarea  name="ticket_desc[]" style="width: 100%"></textarea>\n' +
                '                                                   </div>\n' +
                '                                               </div>\n' +
                '                                           </div>\n' +
                '                                       </div>\n' +
                '                                   </div> ').appendTo("#addticket");
        });

    });
    $('.summernote').summernote({
        tabsize: 2,
        height: 100
    });


</script>
<style>
    .modal-backdrop {

        z-index: 0;
    }
    .modal-backdrop {

        z-index: 0;
    }
    fieldset{
        background-color: #FFFFFF;
    }
</style>


</html>