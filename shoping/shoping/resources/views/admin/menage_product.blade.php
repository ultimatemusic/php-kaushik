@extends('admin.layout')
@section('title-name')
::admin home page
@endsection
@section('content')

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
                    <span class="text">manage product</span>
                </div>
                <div class="overflow-x-auto ms-8 mt-6">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                <thead>
                <tr class="bg-gray-100 text-gray-700">>
                <th class="py-3 px-4 text-left">Id</th>
                <th class="py-3 px-4 text-left">Product Name</th>
                <th class="py-3 px-4 text-left">Product details</th>
                <th class="py-3 px-4 text-left">price</th>
                <th class="py-3 px-4 text-left">Category</th>
                <th class="py-3 px-4 text-left">QTY</th>
                <th class="py-3 px-4 text-left">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $product)
                <tr class="border-b">
                <td class="py-2 px-4">{{$product->id}}</td>
                <td class="py-2 px-4">{{$product->product_name}}</td>
                <td class="py-2 px-4 w-1/3">{{$product->description}}</td>
                <td class="py-2 px-4">{{$product->price}}</td>
                <td class="py-2 px-4">{{$product->category}}</td>
                <td class="py-2 px-4">{{$product->QTY}}</td>
                <td class="py-2 px-4">
                <a href='{{"/admin/edit-product/".$product->id}}' class="text-blue-600 hover:underline mr-2">Edit</a>

                <a href='{{"/admin/delete-product/".$product->id}}' class="text-red-600 hover:underline mr-2" onclick="return confirm('Are you sure to delete data ?')">Delete</button>
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