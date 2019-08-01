@extends('layouts.my_ticket.layout')
@section('main')
    <div id="content" class="main-content">
    <div id="your-events-page">
        <link rel="stylesheet" type="text/css" href="{{asset('css/my-event.css')}}">
        <div class="w-80 auto w-content" >

            <h3 class="head">Sự kiện của bạn</h3>

            <div class="list-e">
                <div>
                    <div class="clr "></div>

                    @if(isset($events))
                        @foreach($events as $item)
                    <div class="aday ">
                        <div class="left w-60">
                            <div class="e-logo">
                                <img src="/storage/logos/{{$item->logo}}"style="width: 555px; height: 211px">
                            </div>
                        </div>

                        <div class="left w-40" style="position:relative">

                            <h2 class="e-title"><strong>{{$item->name}}</strong></h2>


                            <div class="e-date-ad">
                                <div class="e-time "><span class="icon-clock "></span>
                                    <?php
                                    showTime($item->event_start, $item->event_end);
                                    ?></div>
                                <div class="e-location ">{!! $item->event_info !!}</div>
                            </div>
                        </div>
                        <div class="clr"></div>
                        <div>

                            <div class="manage-event">
                                <table cellspacing="0" cellpadding="0" style="width:100%;text-align:center">
                                    <tbody><tr>
                                        <td style="width:17%">
                                            <a class="btn-manage  btn" href="/my-ticketbox/event/76165" target="_blank">
                                                <i class="fa fa-ticket" aria-hidden="true"></i><br>
                                                <span>Loại vé</span>
                                            </a>
                                        </td>
                                       <td style="width:17%" class="">
                                            <a class="btn-manage  btn" href="" target="_blank">
                                                <span class="i-group"></span><br>
                                                <span>Danh sách khách</span>
                                            </a>
                                        </td>


                                        <td style="width:17%">
                                            <a class="btn-manage  btn white" target="_blank" href="/my-ticketbox/event/76165/edit">
                                                <span class="i-edit"></span><br>
                                                <span>Chỉnh sửa</span>
                                            </a>
                                        </td>

                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>

                        <div class="clr"></div>
                    </div><!-- end ngRepeat: event in events.Past | orderBy:'StartTimeFrom':true -->
                    @endforeach
                @endif
                    <!-- ngIf: events.PastQuantity > 0 --><div class="paging-bottom ">
                        <div class="left">
                            <button  class="lk-paging" disabled="disabled">
                                Trước
                            </button>
                            <span class="current-page">1/1</span>
                            <button class="lk-paging" disabled="disabled">
                                Sau
                            </button>
                        </div>
                        <div class="right my-events display-per-item">
                            <span style="padding-right: 10px;">Hiển thị mỗi trang</span>
                            <select class="show-tick "  data-width="90px" title="Results per page" ><option value="0">10</option><option value="1" selected="selected">20</option><option value="2">50</option><option value="3">100</option></select><div class="btn-group bootstrap-select show-tick" style="width: 90px;"><button type="button" class="btn dropdown-toggle selectpicker btn-inverse" data-toggle="dropdown" title="20"><span class="filter-option pull-left">20</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0"><a tabindex="0" class="" style=""><span class="text">10</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1" class="selected"><a tabindex="0" class="" style=""><span class="text">20</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">50</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="3"><a tabindex="0" class="" style=""><span class="text">100</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
                        </div>
                    </div><!-- end ngIf: events.PastQuantity > 0 -->
                    <div class="clr "></div></div>
            </div>

            <a class="add-e add-e-p  btn-tkb btn-medium btn-success block" type="button" data-style="zoom-out" data-spinner-size="40" target="_blank" href="/create">
                <span class="inline">Tạo sự kiện</span><i class="icon-add-black inline"></i>
            </a>

        </div>
    </div>
    </div>
    @stop