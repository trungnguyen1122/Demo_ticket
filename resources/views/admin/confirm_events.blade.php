@extends('admin.layout.layout')
@section('main')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách sự kiện chưa phê duyệt</h3>
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
                                    <th>Phê duyệt</th>
                                </tr>
                                </thead>
                                <tbody id="tbody">
                                @if(isset($events))
                                @foreach($events as $event)
                                <tr>
                                    <td>{{$event->name}}</td>
                                    <td>{{$event->organizer}}</td>
                                    <td>{{$event->user->name}}</td>
                                    <td>{{$event->user->phone}}</td>
                                    <td>
                                        <a href="{{url('event').'/'.$event->event_id}}" class="btn btn-primary btn-md" target="_blank"><i class="fa fa-folder"></i> Chi tiết </a>
                                        <a href="{{asset('')}}admin/delete/{{$event->event_id}}" class="btn btn-danger btn-md" ><i class="fa fa-pencil"></i> xóa </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-md confirm"><i class="fa fa-check"></i> phê duyệt </button>
                                        <input type="text" value="{{$event->event_id}}" style="display: none;">
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </ddefaiv>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            const confirm = document.getElementsByClassName('confirm');
            for (let i = 0; i < confirm.length; i++) {
                confirm[i].addEventListener('click', function () {
                    $.confirm({
                        title: 'Confirm!',
                        content: '!',
                        buttons: {
                            confirm: function () {
                                $.ajax({
                                    method: 'get',
                                    url : '{{route('confirm')}}',
                                    data: {
                                        event_id : confirm[i].nextElementSibling.value
                                    },
                                    success : function (result) {
                                        $('#tbody').html(result);
                                    }
                                });
                            },
                            cancel: function () {
                                $.alert('Canceled!');
                            }
                        }
                    });
                })
            }

        })
    </script>
@stop