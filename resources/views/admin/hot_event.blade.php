@extends('admin.layout.layout')
@section('main')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách sự kiện hot</h3>

                </div>
            </div>
            <div class="clearfix"></div>
            <ddefaiv class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <h3 style="float: right"><a class="btn btn-primary btn-md"  onClick="refreshPage()"><i class="fa fa-refresh"></i> Refresh</a></h3>
                        <h3 style="float: right"><a class="btn btn-success btn-md"><i class="fa fa-check"></i> Hoàn tất</a></h3>

                        <h3 style="float: right"><a class="btn btn-danger btn-md" id="myBtn"><i class="fa fa-plus"></i> Thêm</a></h3>


                        <div class="x_content">

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên sự kiện</th>
                                    <th>Nhà tổ chức</th>
                                    <th>Số điện thoại</th>
                                    <th>Thao tác</th>
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>


                                <tbody>
                                @if(isset($events))
                                    @foreach($events as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->organizer}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>
                                                <a href="{{url('').'/event/'.$item->event_id}}" class="btn btn-primary btn-md" target="_blank"><i class="fa fa-folder"></i> Chi tiết</a>
                                                <a href="#" class="btn btn-danger btn-md"><i class="fa fa-trash"></i> Xóa</a>
                                            </td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox"checked>
                                                    <span class="slider round"></span>
                                                </label>
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
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <center><strong><h2>Thêm sự kiện</h2></strong></center>
            <ddefaiv class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_content">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Tìm theo tên sự kiện" title="Type in a name">
                            <table id="datatable2" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên sự kiện</th>
                                    <th>Nhà tổ chức</th>
                                    <th>Số điện thoại</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Adam</td>
                                    <td>System Architect</td>
                                    <td>60</td>
                                    <td><a href="#" class="btn btn-danger btn-md"><i class="fa fa-plus"></i> Thêm</a></td>
                                </tr>
                                <tr>
                                    <td>bdam</td>
                                    <td>Ssssssss</td>
                                    <td>61</td>
                                    <td><a href="#" class="btn btn-danger btn-md"><i class="fa fa-plus"></i> Thêm</a></td>
                                </tr>
                                <tr>
                                    <td>cdam</td>
                                    <td>System Architect</td>
                                    <td>63</td>
                                    <td><a href="#" class="btn btn-danger btn-md"><i class="fa fa-plus"></i> Thêm</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </ddefaiv>
        </div>

    </div>
    <script>
        function refreshPage(){
            window.location.reload();
        }
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("datatable2");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];

                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
        }
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        #myInput{
            border: 1px solid black;
            width: 300px;
            height: 30px;
            margin-bottom: 30px;
            border-radius: 4px;
        }
    </style>
    @stop