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
            </div>
        </div>

        <!-- category -->

        <div class="dash-content">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Left: Add Category Form -->
                <div class="md:w-1/3 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-4">Add Category</h2>
                    <form  method="POST">
                        @csrf
                         <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Select Category</label>
                            <select
                            id="category"
                            name="category"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required
                            >
                            <option value="" disabled selected>Select a category</option>
                            @foreach($category as $category1)
                            <option value="{{ $category1->id }}">{{ $category1->category }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div>
                        <label for="subcategory_name" class="block text-sm font-medium text-gray-700 mb-1">Category Name</label>
                        <input
                            type="text"
                            id="subcategory_name"
                            name="subcategory_name"
                            value="{{$data->subcategory_name}}"
                            placeholder="Jumka"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required
                        >
                        </div>
                        <br>
                        <button
                        type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                        update category
                        </button>
                    </form>
                </div>

                <!-- Right: Categories Table -->
                
            </div>
        </div>
    </section>
    @endsection('content')