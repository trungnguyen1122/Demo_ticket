@extends('layouts.my_ticket.layout')
@section('main')
    <div id="content" class="main-content">


        <link href="https://tkbvn-tokyo.s3.amazonaws.com/dist/tkbvn/css/loading.css" rel="stylesheet" type="text/css">
        <link href="https://tkbvn-tokyo.s3.amazonaws.com/dist/tkbvn/css/your-tickets.css" rel="stylesheet" type="text/css">
        <div id="my-ticket-page">
            <div class="w-80 w-content">

                <!-- upcomming event -->
                <h3 class="head">Vé đã mua</h3>
                <div class="lb-list-e"></div>
                <div class="list-e">
                    <div class="aday">
                       <ul>
                            <li>
                                <div>
                                    <div>
                                        <div class="left w-21">
                                            <div class="e-logo">
                                                <img src="https://tkbvn-tokyo.s3.amazonaws.com/Upload/eventlogo/2019/05/16/DDB174.jpg">
                                            </div>
                                        </div>
                                        <div class="left w-79">
                                            <h3 class="e-title"><a href="/event/hoi-thao-bs-tri-doan-tai-ha-noi-2019-75753/53219" title="Hội thảo Bs. Trí Đoàn tại Hà Nội 2019">Hội thảo Bs. Trí Đoàn tại Hà Nội 2019</a></h3>
                                            <div class="e-date-ad">
                                                <div class="e-time"><span class="icon-clock "></span>CN, 25 Tháng 8 2019 8:30 AM</div>
                                                <div class="e-location"><span class="icon-place2 "></span>Hà Nội - Hà Nội, Quận Ba Đình, Thành Phố Hà Nội</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash-bottom"></div>
                                </div>
                                <div class="right w-79">
                                    <div class="a-block">
                                        <div class="b-title">
                                            <span class="i-infoticker "></span>
                                            <strong>Vé bạn đã mua</strong>

                                            <span class="btn icon-minus"></span>
                                        </div>
                                        <div class="border" style="display: block;">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Thời gian đặt vé</th>
                                                    <th>Tên loại vé</th>
                                                    <th>Giá vé</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td style="text-align: left">
                                                        <div>
                                                            <span class="icon-clock "></span>3:01 PM
                                                        </div>
                                                        <div style="margin-top: 10px;">
                                                            <span class="i-date"></span>19 Tháng 7 2019
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div>Miễn phí</div>
                                                    </td>
                                                    <td>

                                                        <div>Miễn phí</div>

                                                    </td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="a-block">
                                        <div class="b-title">
                                            <span class="i-people"></span>
                                            <strong>Thông tin người mua</strong>
                                            <span class="btn icon-minus icon-plus"></span>
                                        </div>
                                        <div class="border" style="display: none;">
                                            <table class="first-td">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <strong>Họ tên</strong>
                                                    </td>
                                                    <td>
                                                        {{Auth::user()->name}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Email</strong>
                                                    </td>
                                                    <td>
                                                        {{Auth::user()->email}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                            <strong>Số điện thoại</strong>
                                                    </td>
                                                    <td>
                                                        {{Auth::user()->phone}}

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                                <div class="clr"></div>
                            </li>
                        </ul>
                    </div>

                    <a class="add-e btn btn-medium btn-primary block ladda-button" type="button" href="/" data-style="zoom-out"><span class="ladda-label"><span class="icon-more">Đặt vé các sự kiện khác</span></span><span class="ladda-spinner"></span></a>
                </div>
                <!-- end upcomming event -->

            </div>

            <!--/info ticketbox-->

        </div>
        <div class="cancel-event-pop" id="cancel-event-pop">
            <div class="modal hide fade">
                <form action="" method="post" novalidate="novalidate" class="frm" id="cancel-reason-form">
                    <div class="frm-header">
                        <h2 class="frm-title">Lý do hủy vé</h2>
                        <span class="btn-close-cancel"></span>
                    </div>
                    <div class="frm-body">
                        <div class="w-100 message"><i>Vui lòng chọn lý do hủy vé</i></div>
                        <div class="input-group">
                            <input type="radio" class="inline left" name="cancelReason" value="2"><div class="left inline">Bận việc, không tham dự được</div>
                        </div>
                        <div class="input-group">
                            <input type="radio" class="inline left" name="cancelReason" value="3"><div class="left inline">Đặt nhầm loại vé</div>
                        </div>
                        <div class="input-group">
                            <input type="radio" class="inline left" name="cancelReason" value="4"><div class="left inline">Đặt trùng vé</div>
                        </div>
                        <div class="input-group">
                            <input type="radio" id="other-reason-radio" class="inline left" name="cancelReason" value="1"><div class="left inline">Lý do khác</div>
                        </div>
                        <div class="input-group">
                            <textarea name="cancelReasonText" id="other-reason-txtarea" style="display: none"></textarea>
                        </div>
                    </div>
                </form>
                <div class="frm-foot">
                    <div class="input-group">
                        <div id="submit-cancel" class="btn-submit ladda-button" data-style="zoom-out" data-spinner-size="30" value=""><span class="ladda-label">Xác nhận hủy vé</span><span class="ladda-spinner"></span><span class="ladda-spinner"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://tkbvn-tokyo.s3.amazonaws.com/dist/tkbvn/js/spin-ladda.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $('.icon-minus').on('click', function () {
                    $(this).closest('.a-block').find('.border').toggle();
                    $(this).toggleClass('icon-plus');
                });

                Ladda.bind('.ladda-button');
                Ladda.bind('#submit-cancel');

                var confirmMess = 'Bạn có thật sự muốn hủy đơn hàng này không?';
                var cancelReasonForm = $('#cancel-reason-form');

                $('.btn-cancel-cod').on('click', function () {
                    var orderId = $(this).attr('data-id');
                    $('#cancel-event-pop .modal').modal('show').on('shown', function () {
                        cancelReasonForm.attr('data-id', orderId);
                        Ladda.stopAll();
                    });
                });
                $('.btn-close-cancel').on('click', function () {
                    $('#cancel-event-pop .modal').modal('hide');
                    cancelReasonForm.attr('data-id', '');
                    Ladda.stopAll();
                });

                $('#cancel-event-pop input[type="radio"]').click(function () {
                    var txtArea = $('#other-reason-txtarea');
                    if ($('#other-reason-radio').prop("checked")) {
                        txtArea.show();
                        txtArea.focus();
                    } else {
                        txtArea.hide();
                    }
                });

                $('#submit-cancel').click(function () {
                    cancelReasonForm.submit();
                });

                cancelReasonForm.submit(function () {
                    var cancelReason = $('#cancel-event-pop input[type="radio"]:checked').val();
                    var cancelReasonText = $('#other-reason-txtarea').val();
                    if (!cancelReason || (cancelReason == 1 && !cancelReasonText)) {
                        alert('Vui lòng chọn lý do hủy vé');
                    } else {
                        var id = $(this).attr('data-id');
                        if (confirm(confirmMess)) {
                            $.ajax({
                                url: '/MyticketBox/CancelOrder',
                                data: {
                                    id: id,
                                    cancelReason: cancelReason,
                                    cancelReasonText: cancelReasonText
                                },
                                type: 'POST',
                                success: function (data) {
                                    if (data == "ok") {
                                        window.location.reload();
                                    }
                                }
                            });
                        }
                    }
                    Ladda.stopAll();
                    return false;
                });
                // tooltip
                $('a[data-toggle="tooltip"]').tooltip();
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