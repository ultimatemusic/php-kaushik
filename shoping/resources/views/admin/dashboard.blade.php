@extends('admin.layout')
@section('title-name')
::admin home page
@endsection
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if (Session('success'))
        <div>
        <script>
            
        swal("{{session('success')}} ", "Click Ok To Continue !", "success");
        </script>
        </div>        
        @endif 

        @if (Session('error'))
        <div>
        <script>
        swal("{{session('error')}} ", "Click Ok To Continue !", "success");
        </script>
        </div>
        @endif
<?php
    // $useremail = 'hello';
?>


@section('content')
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="{{asset('assets/admin/images/profile.jpg')}}" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Users</span>
                </div>

                <div class="activity-data">
                    <div class="data type">
                        <span class="data-title">Id</span>
                        @foreach($data as $user)
                        <span class="data-list">{{$user->id}}</span>
                        <!-- <span class="data-list">New</span> -->
                        @endforeach
                    </div>
                    <div class="data names">
                        <span class="data-title">Name</span>
                        @foreach($data as $user)
                        <span class="data-list">{{$user->name}}</span>
                        <!-- <span class="data-list">Prem Shahi</span> -->
                        @endforeach
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        @foreach($data as $user)
                        <span class="data-list">{{$user->email}}</span>
                        <!-- <span class="data-list">premshahi@gmail.com</span> -->
                        @endforeach
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        @foreach($dates as $date)
                        <span class="data-list">{{$date->creation_date}}</span>
                        <!-- <span class="data-list">2024-01-01</span> -->
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection('content')
