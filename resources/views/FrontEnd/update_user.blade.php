@extends('layouts.my_ticket.layout')
@section('title','Hồ sơ cá nhân')
@section('main')
    <div id="content" class="main-content">

        <link rel="stylesheet" type="text/css" href="{{asset('css/my-profile.css')}}">

        <div id="your-events-page">
            <form id="fr-profile" method="POST" action="{{route('updateProfile')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="w-80 auto w-content" style="min-height: 400px">

                    <div class="auto w-80">
                        <div class="avatar">

                            <img src="{{asset('')}}uploads/image/{{Auth::user()->image}}" class="img-circle" id="e-avatar">
                            </div>




                        <div class="p-fields">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="icon-white icon-user"></span></span>

                            <input type="text" name="name" class="form-control" placeholder="Tên" value="{{Auth::user()->name}}">


                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="icon-white icon-briefcase3"></span></span>
                                <input type="text" name="job" class="form-control" placeholder="Nghề nghiệp" value="{{Auth::user()->job}}">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="icon-white icon-briefcase3"></span></span>
                                <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="{{Auth::user()->address}}">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><span class="icon-phone"></span></span>
                                <input type="tel" name="phone" class="form-control" placeholder="Số điện thoại" value="{{Auth::user()->phone}}">
                            </div>

                            <div class="input-group" style="position: relative">
                                <span class="input-group-addon"><i class="icon-birthday"></i></span>
                                <span class="left">
                                <input type="date" name="birthday" class="form-control" value="<?php
                                $time = strtotime(Auth::user()->birthday);
                                if ($time) {
                                    $new_date = date('Y-m-d', $time);
                                    echo $new_date;
                                }
                                ?>">
                                </span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="icon-white icon-save"></span></span>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" id="save-profile" class="btn btn-medium btn-primary block ladda-button" data-style="zoom-out"><span class="ladda-label">Lưu </span><span class="ladda-spinner"></span></button>
                        </div>
                    </div>
                </div>
            </form>
            <!--/info ticketbox-->

        </div>

        <!-- /#content-->


        <script type="text/javascript" src="https://tkbvn-tokyo.s3.amazonaws.com/scripts/jquery.fineuploader-3.7.1.js"></script>




    </div>
@stop