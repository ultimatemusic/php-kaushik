@extends('admin.layout')
@section('title-name')
::admin home page
@endsection
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class="dashboard">
@if (Session('success'))
        <script>
        swal("{{session('success')}} ", "Click Ok To Continue !", "success");
        </script>        
        @endif 

        @if (Session('error'))
        <script>
        swal("{{session('error')}} ", "Click Ok To Continue !", "success");
        </script>
        @endif 
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

                <div class=" flex justify-center w-full ">
                    <div class="box box1 p-6 rounded-lg shadow-lg text-center bg-blue-400 w-72">
                        <i class="uil uil-thumbs-up text-3xl mb-2"></i>
                        <span class="text block text-lg font-semibold mb-1">Total contact </span>
                        <span class="number text-2xl font-bold">{{ count($data ?? []) }}</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Manage Contact</span>
                </div>
                <div class="overflow-x-auto ms-8 mt-6">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                <thead>
                <tr class="bg-gray-100 text-gray-700">>
                <th class="py-3 px-4 text-left">Id</th>
                <th class="py-3 px-4 text-left">Name</th>
                <th class="py-3 px-4 text-left">email</th>
                <th class="py-3 px-4 text-left">Subject</th>
                
                <th class="py-3 px-4 text-left">Description</th>
                <th class="py-3 px-4 text-left">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $data1)
                <tr class="border-b">
                <td class="py-2 px-4">{{$data1->id}}</td>
                <td class="py-2 px-4">{{$data1->name}}</td>
                <td class="py-2 px-4 w-1/3">{{$data1->email}}</td>
                <td class="py-2 px-4">{{$data1->subject}}</td>
                
                <td class="py-2 px-4">{{$data1->description}}</td>
                <td class="py-2 px-4">
                <!-- <a href='{{"/admin/edit-c/".$data1->id}}' class="text-blue-600 hover:underline mr-2">Edit</a> -->

                <a href='{{"/admin/delete-contact/".$data1->id}}' class="text-red-600 hover:underline mr-2" onclick="return confirm('Are you sure to delete data ?')">Delete</button>
                </form>
                </td>
                </tr>

                @endforeach

                </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
    @endsection('content')