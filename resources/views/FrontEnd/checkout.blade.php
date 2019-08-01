@extends('FrontEnd.layout.layout')
@section('main')
<div class="head_banner">
<div class="container">
    <p class="text_head">{{$event->name}}</p>
    <p style="color:#FFFFFF;padding-bottom: 20px;">Thời gian diễn ra</p>
    <p style="color:#FFFFFF;padding-bottom: 20px;">
    <?php
        showTime($event->event_start, $event->event_end);
        ?>

    </p>
</div>
</div>

<div class="checkout_content">
    <div class="container">
        <div class="row" style="padding:45px 0 40px 0; ">
            <div class="col-md-7 col-xs-12">
                <div class="info">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Loại vé</th>
                            <th>Gía vé</th>
                            <th>Số lượng</th>
                            <th></th>
                        </tr>
                        </thead>
@if(isset($event->tickets))
                        @foreach($event->tickets as $item)
                            <tr>

                                <td class="ticket-name">{{$item->name}}</td>
                                <td class="ticket-price">
                                    {{ number_format($item->price)}} VND
                                </td>
                                <td>
                                        @if(isTicketSelling($item->sell_start, $item->sell_end))
                                            <span><button class="minus-btn">-</button></span><input class="selectQty" disabled value="0" style="width: 30px;" type="number" max="{{$item->max_per}}"><span><button class="plus-btn">+</button></span>

                                        @else
                                            Vé đã ngừng bán
                                    @endif
                                </td>
                                <td>

                                    <input type="text" style="display: none" value="{{$item->event_id}}">

                                </td>
                            </tr>
                            @endforeach

@endif
                    </table>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 checkout">
                <div class="main_checkout">
                    <p style="text-align: center;font-size: 24px;"><strong>Thông tin giỏ hàng</strong></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Loại vé</th>

                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody id="table-body">


                        </tbody>
                        <tr style="background-color:#666666;color: #ffffff;font-weight: bold ">
                            <td>Tổng cộng</td>
                            <td id="total"></td>
                        </tr>
                    </table>
                    <div class="sum">
                        <button type="button" class="btn btn-success btn-lg btn-block"><strong>Thanh toán</strong></button>
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        const selectQty =  $('.selectQty');
        const name = $('.ticket-name');
        const price = $('.ticket-price');
        $('.minus-btn').on('click', function () {
            let input = $(this).parent().next();
            let min = input.attr('min');
            console.log(min);
            let qty = parseInt(input.val());
            if(qty > 0) {
                $(this).parent().next().val(qty-1);
            }
            $('#table-body').html(showToCart());
        });
        $('.plus-btn').on('click', function () {
            let input = $(this).parent().prev();
            let max = input.attr('max');
            let qty = parseInt($(this).parent().prev().val());
            if(qty < max) {
                $(this).parent().prev().val(qty + 1);
            } else {
                alert("Vé được giới hạn : " + max);
            };
            $('#table-body').html(showToCart());

        });
        function showToCart() {
            console.log(1);
            var result = "";
            var total = 0;
            for (var i = 0; i < selectQty.length; i++) {
                if(selectQty[i].value > 0) {
                    total += parseInt(price[i].textContent) * selectQty[i].value;
                    result +=
                        ' <tr>' +
                            '<td>' +
                                '<p>' + name[i].textContent +'</p>' +
                                '<p>'+price[i].textContent +'</p>' +
                            '</td>' +

                             '<td>' +
                                '<p>'+ selectQty[i].value +'</p>' +
                                 '<p>'+ parseInt(price[i].textContent) * selectQty[i].value + '</p>' +
                            '</td>' +
                        '</tr>';
                };
            }
            $('#total').html(total);
            return result;
        }
    });
</script>
    @stop