@extends('admin.layout.layout')
@section('main')
    <div class="right_col">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3><strong>Danh sách tài khoản</strong></h3>

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
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày tạo</th>



                                </tr>
                                </thead>


                                <tbody>
                                @if(isset($users))
                                    @foreach($users as $user)


                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->created_at}}</td>




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
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <center><strong><h2><strong>Thêm hình ảnh</strong></h2></strong></center>
            <div class="row">
                <div class="col-md-12 ">
                    <h2><strong>Chọn hình ảnh</strong></h2>
                    <input type='file' onchange="readURL(this);" style="padding: 20px 0 20px 0;" />
                </div>
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="550px;">Hình ảnh</th>
                        <th>Ghi chú</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img id="blah" src="/storage/banner/default.jpg" alt="your image" /></td>
                        <td><div class="input-group">
                                <textarea class="form-control " aria-label="With textarea" cols="100%" rows="10"></textarea>
                            </div></td>

                    </tr>

                    </tbody>
                </table>

                <h3 style="float: right"><a class="btn btn-danger btn-md" id="myBtn"><i class="fa fa-plus"></i> Thêm</a></h3>

            </div>

        </div>
    </div>


@stop