@extends('layouts.my_ticket.layout')
@section('main')
    <div id="content" class="main-content">
        <link href="https://tkbvn-tokyo.s3.amazonaws.com/site/global/content-v2/css/your-account.css?v1" rel="stylesheet">
        <div id="">
            <!--payment info-->
            <div class="w-80 w-content">
                <form action="{{route('updateBank')}}" method="post">
                    {!! csrf_field() !!}
                    <div id="panel-payment-form" class="">
                        <div class="auto" style="margin-bottom:5%">
                            <div class="alert alert-error" id="alert-info">
                                Vui lòng nhập đủ thông tin
                            </div>
                            <div id="payment-info" class="setting-content">
                                <div class="left panel-icon">
                                    <span class="icon-pig-p"></span>
                                </div>
                                <div class="left w-94">
                                    <label class="setting-head">Thông tin tài khoản của bạn</label>
                                    <span class="meaning font-roboto">SuperTicket sẽ chuyển tiền bán vé đến tài khoản của bạn</span>

                                    <div class="info-bank-account">
                                        <div class="input-group input-payment">
                                            <span class="input-group-addon">Chủ tài khoản <span style="color: #ba4234">*</span></span>
                                            <input class="form-control" data-val="true" data-val-required="Account name is required." id="BankAccountName" name="chu_tk" type="text" value="{{Auth::user()->chu_tk}}">
                                            <span class="meaning font-roboto error right"><span class="field-validation-valid" data-valmsg-for="BankAccountName" data-valmsg-replace="true"></span></span>
                                        </div>
                                        <div class="input-group input-payment">
                                            <span class="input-group-addon">Số tài khoản <span style="color: #ba4234">*</span></span>
                                            <input class="form-control" data-val="true" data-val-required="Account number is required." id="BankAccountNumber" name="so_tk" type="text" value="{{Auth::user()->so_tk}}">
                                            <span class="meaning font-roboto error right"><span class="field-validation-valid" data-valmsg-for="BankAccountNumber" data-valmsg-replace="true"></span></span>
                                        </div>
                                        <div class="input-group input-payment">
                                            <span class="input-group-addon">Tên ngân hàng <span style="color: #ba4234">*</span></span>
                                            <input class="form-control" data-val="true" data-val-required="Bank name is required." id="BankName" name="ten_ngan_hang" type="text" value="{{Auth::user()->ten_ngan_hang}}">
                                            <span class="meaning font-roboto error right"><span class="field-validation-valid" data-valmsg-for="BankName" data-valmsg-replace="true"></span></span>
                                        </div>
                                        <div class="input-group input-payment">
                                            <span class="input-group-addon">Chi nhánh <span style="color: #ba4234">*</span></span>
                                            <input class="form-control" data-val="true" data-val-required="Bank office is required." id="BankOffice" name="chi_nhanh" type="text" value="{{Auth::user()->chi_nhanh}}">
                                            <span class="meaning font-roboto error right"><span class="field-validation-valid" data-valmsg-for="BankOffice" data-valmsg-replace="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                    <div class="line-brown-setting"></div>


                                </div>
                                <div class="clr"></div>
                            </div>
                            <div style="display:inline">
                                <button class="btn btn-medium btn-primary block" type="submit">Lưu lại</button>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!--/info ticketbox-->

        </div>
        <script>
            $('#formSubSendGrid').submit(function (event) {
                event.preventDefault();
                var email = $('#subscribeEmailtxt').val();
                $.ajax({
                    url: '/Home/SubscibeNewEmail',
                    type: 'POST',
                    data: {
                        'email': email,
                    },
                    cache: false,
                    beforeSend: function(xhr) {
                        $('#subscribeMess').html("");
                    },
                    success: function (result) {
                        $('#subscribeMess').html(result.mess);
                    }
                });
            });

        </script>

    </div>
@stop