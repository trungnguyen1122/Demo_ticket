@extends('layouts.my_ticket.layout')
@section('title','Số dư tài khoản')
@section('main')
    <div id="content" class="main-content">
        <script type="text/javascript" src="https://tkbvn-tokyo.s3.amazonaws.com/site/global/scripts/revenue.js"></script>
        <link href="{{asset('css/your-account.css')}}" rel="stylesheet">
        <div id="my-revenue-page">
            <div class="w-80 w-content">

                <h3 class="head">Số dư tài khoản <span class="a-number">0  <span class="a-currency"></span></span></h3>

                <div class="lb-total">Tổng thu nhập <span class="a-total"><span class="high-color">0  </span></span></div>



                <div class="a-line"></div>
            </div>
            <!--/info ticketbox-->

        </div>


        <script type="text/javascript">
            var decimal = ',';
            var thousand = '.';
            function displayPrice(tprice) {
                var str = tprice.split(decimal)[0];
                str = str.split("").reverse().join("");
                str = str.match(/[\s\S]{1,3}/g).join(thousand);
                str = str.split("").reverse().join("");
                return str;
            }

            function livePrice(tprice) {
                var str = tprice.split(thousand).join('');
                str = str.split("").reverse().join("");
                str = str.match(/[\s\S]{1,3}/g).join(thousand);
                str = str.split("").reverse().join("");
                return str;
            }

            $(document).ready(function () {
                $(".show-trans").click(function (event) {
                    var id = $(this).attr('data-id');
                    $("#tb-trans-" + id).slideToggle();
                });
                $(".pop-transfer").click(function (event) {
                    event.preventDefault();
                    var maxmoney = $(this).attr('data-maxmoney');
                    maxmoney = maxmoney.toString();
                    if (maxmoney == '') {
                        maxmoney = '0';
                    }
                    var url = $(this).attr("href");
                    var eid = $(this).attr('data-eventid');
                    if (url.indexOf("#") == 0) {
                        $(url).modal('open');
                    } else {
                        $.ajax({
                            url: url,
                            data: { id: eid },
                            success: function (data) {
                                $('<div class="modal hide" id="transferModal">' + data + '</div>').modal().on('hidden', function () { $(this).remove(); });
                                $('#fr-transfer').find('#max').text(displayPrice(maxmoney));
                                $('input:text:visible:first').val(displayPrice(maxmoney)).focus();
                                var bankfee = Math.floor(maxmoney * 0.02);
                                var requestamount = Math.floor(maxmoney * 0.98)
                                $("#bankfee").text(livePrice(bankfee.toString()));

                                $("#requestamount").text(livePrice(requestamount.toString()));
                            }
                        });
                    }
                });
            });
        </script>
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