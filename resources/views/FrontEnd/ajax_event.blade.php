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
                        <a href="{{url('/event')}}/{{$item->url}}"> <strong>{{$item->name}}</strong></a>
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
    {{$events->links()}}
@endif

