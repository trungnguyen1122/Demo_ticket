@extends('admin.layout.layout')
@section('main')
    <div class="right_col">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3><strong>Danh sách hình ảnh banner</strong></h3>

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
                                    <th width="550px;">Hình ảnh</th>
                                    <th>Ghi chú</th>
                                    <th style="width: 100px;">Thao tác</th>
                                    <th style="width: 100px;">Trạng thái</th>
                                </tr>
                                </thead>


                                <tbody id="tbody">
                                @if(isset($img_banners))
                                    @foreach($img_banners as $img_banner)
                                        <tr>
                                            <td><img id="img_review" src="/storage/banner/{{$img_banner->img}}" alt="imgae"></td>
                                            <td>{{$img_banner->description}}</td>
                                            <td><a href="admin/delete/banner/{{$img_banner->banner_id}}" class="btn btn-danger btn-md" con><i class="fa fa-trash"></i> Xóa</a></td>
                                            <td>
                                                <label class="switch">
                                                    <input class="status" type="checkbox" <?php echo $img_banner->status? 'checked':''; ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                                <input type="text" value="{{$img_banner->banner_id}}">
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
            <center><strong><h2><strong>Thêm hình ảnh</strong></h2></strong></center>
            <div class="row">
                <form action="{{route('image.upload.post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="col-md-12 ">
                    <h2><strong>Chọn hình ảnh</strong></h2>


                        <input type='file' name="image" onchange="readURL(this);" style="padding: 20px 0 20px 0;" />

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
                            <textarea class="form-control" name="description" aria-label="With textarea" cols="100%" rows="10" required></textarea>
                        </div></td>
                </tr>
                </tbody>
            </table>

                <h3 style="float: right"><button type="submit" class="btn btn-danger btn-md" id="upload"><i class="fa fa-plus"></i> Upload</button></h3>
                </form>
            </div>



        </div>
    </div>
    <script>



        function refreshPage(){
            window.location.reload();
        }
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        var upload_btn = document.getElementById('upload');

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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
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
        #blah{
            width: 500px;
            height: 200px;

        }
        #img_review{
            width: 400px;
            height: 150px;
        }

    </style>
@stop