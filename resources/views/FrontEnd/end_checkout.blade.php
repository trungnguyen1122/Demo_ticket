@extends('FrontEnd.layout.layout')
@section('main')
    <div class="head_banner">
        <div class="container">
            <p class="text_head">Tên sự kiện</p>
            <p style="color:#FFFFFF;padding-bottom: 20px;">Thời gian diễn ra</p>
        </div>
    </div>
    <div class="checkout_content">
        <div class="container">
            <div class="row" style="padding:45px 0 40px 0; ">
                <div class="col-md-7 col-xs-12">
                    <div class="info" style="padding:10px;">
                        <center><strong><p>Thông tin người nhận vé</p></strong></center>
                        <div class="row">
                            <div class="col-md-6">
                                <span>Họ và tên</span>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span>Email</span>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                        </div>
                        <span class="title_z">Số điện thoại</span>
                        <div class="input-group input-group-lg">
                            <input type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <span class="title_z">Địa chỉ</span>
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        </div>
                            <p>Tỉnh thành phố</p>
                        <select name="city" id="provinceSelector">
                            <option value="">Tỉnh Thành phố</option>
                            @if(isset($provinces))
                                @foreach($provinces as $item)
                                    <option value="{{$item->provinceid}}">{{$item->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <select name="district" id="district">
                            <option value="">Quận huyện</option>

                        </select>


                    </div>
                </div>
                <div class="col-md-5 col-xs-12 checkout">
                    <div class="main_checkout">
                        <p style="text-align: center;font-size: 24px;"><strong>Thông tin giỏ hàng</strong></p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Loại vé</th>
                                <th>số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>vip1</td>
                                <td style="text-align: center">1</td>
                                <td>200.000VND</td>
                            </tr>
                            <tr style="background-color:#666666;color: #ffffff;font-weight: bold ">
                                <td>Tổng cộng</td>
                                <td></td>
                                <td>200.000 VND</td>
                            </tr>
                        </table>
                        <div class="sum">
                            <button type="button" class="btn btn-success btn-lg btn-block"><strong>Hoàn tất</strong></button>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
    <script>
        const provinceSelector = document.getElementById('provinceSelector');
        provinceSelector.addEventListener('change', function () {
            var province_id = $('#provinceSelector').val();
            console.log(province_id);
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
    </script>
    <style>
        .title_z{
        margin-top: 20px;}
    </style>
@stop