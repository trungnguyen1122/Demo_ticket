@extends('FrontEnd.layout.layout')
@section('main')
    <?php
        $logo = Storage::disk('public')->url('logos'.'/'.$event->logo);
        if(!Storage::exists('logos/'.$event->logo)) {
            $logo = Storage::disk('public')->url('logos'.'/'.'default.png');
        }
    ?>
    <img src="{{$logo}}" class="img-fluid" alt="Responsive image" width="100%"
         style="object-fit: cover; height: 350px;">
    <div class="head_detail">
        <div class="container">
            <div class="row content_page">

                <div class="col-sm-12 col-md-8 pl-pr-0 specialBox">
                    <center style="padding: 15px 0px 15px 0px"><h2><strong>{{$event->name}}</strong></h2></center>
                    <p><strong><i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php
                                showTime($event->event_start, $event->event_end);
                            ?>
                </strong>
                    </p>
                    <p><strong><i class="fa fa-map-marker" aria-hidden="true"></i> {{$event->location}}</strong></p>
                    <div class="row menuDetail">
                        <div class="col-md-3"><a href="#" data-target="gt">Giới thiệu</a></div>
                        <div class="col-md-3"><a href="#" data-target="ntc">Nhà tổ chức</a></div>
                        <div class="col-md-3"><a href="#" data-target="ttv">Thông tin vé</a></div>
                        <div class="col-md-3"><a href="#" data-target="tl">Thảo luận</a></div>
                    </div>
                    <div class="content" id="ajax-content">
                        <h4 style="padding-top: 40px;"><strong>Giới thiệu</strong></h4><hr>
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{$event->name}}</p>


                                <p style="padding: 20px 0 20px 0"><strong>Thông tin</strong></p>

                                <p class="text-1">{!! $event->event_info !!}</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4 pd-left-6 padding-right-0 info-box-wr">
                    <div class="col-sm-12 pl-pr-0 hidden-xs hidden-sm">

                        @if(isSellingTicket($event->event_start))
                            <a href="{{url('checkout/'.$event->event_id)}}">  <button type="button" class="btn btn-danger btn-lg btn-block">Mua ve</button></a>

                        @else
                            <button type="button" class="btn btn-danger btn-lg btn-block disabled">Sự kiện đã kết thúc</button>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            var trigger = $('.menuDetail .col-md-3 a'),
                container = $('#ajax-content');

            trigger.on('click', function () {
                // var $this = $(this),
                //     target = $this.data('target');
                //
                // container.load(target);
                //
                // return false;
                var target = $(this).data('target');
                console.log(target);
                $.ajax({
                    method: 'get',
                    url : 'ajax'+target,
                    data: {
                        event_id : {{$event->event_id}},
                    },
                    success : function (result) {
                        container.html(result);
                    }
                })
                return false;
            });


        });

    </script>

@stop