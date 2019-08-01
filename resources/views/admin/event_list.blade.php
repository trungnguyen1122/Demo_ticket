@extends('admin.layout.layout')
@section('main')
    <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Danh sách sự kiện đã phê duyệt</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <ddefaiv class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Tên sự kiện</th>
                                <th>Nhà tổ chức</th>
                                <th>Người tạo</th>
                                <th>Số điện thoại</th>
                                <th>Thao tác</th>
                                <th>Trạng thái</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{$event->name}}</td>
                                <td>{{$event->organizer}}</td>
                                <td>{{$event->user->name}}</td>
                                <td>{{$event->user->phone}}</td>
                                <td><a href="{{asset('')}}event/{{$event -> url}}" class="btn btn-primary btn-md" target="_blank"><i class="fa fa-folder"></i> Chi tiết </a>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox"checked>
                                        <span class="slider round"></span>
                                    </label></td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </ddefaiv>
    </div>
</div>

    @stop