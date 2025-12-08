@extends('admin.layout')
@section('title-name')
::admin adit product page
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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


        <div class="dash-content">
            <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Add New Product</h2>
            <form method="POST" enctype="multipart/form-data">
                @csrf
            <div class="space-y-6">
                <div>
                <label for="product-name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input
                    type="text"
                    id="product-name"
                    name="product_name"
                    value="{{ $data->product_name }}"
                    placeholder="e.g., Handmade Jumka"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                >
                </div>

                <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    placeholder="A brief but comprehensive description of the product."
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                >{{$data->description}}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
                    <div class="mt-1 relative rounded-lg shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">₹</span>
                    </div>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        step="1"
                        min="0"
                        placeholder="199"
                        value="{{ $data->price }}"
                        class="block w-full pl-7 pr-12 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required
                    >
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">INR</span>
                    </div>
                    </div>
                </div>
                        
            
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select
                    id="category"
                    name="category"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                    >
                    <option value="{{ $data->category }}">{{ $data->category }}</option>
                    <option value="electronics">Electronics</option>
                    <option value="apparel">Apparel</option>
                    <option value="home-goods">Home Goods</option>
                    <option value="books">Books</option>
                    </select>
                </div>
                </div>

                <div class="grid grid-cols-1 gap-6">

                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Stock Quantity</label>
                    <input
                    type="number"
                    id="quantity"
                    name="QTY"
                    min="0"
                    placeholder="100"
                    value="{{ $data->QTY }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                    >
                </div>
                </div>

                <div>
                <label for="product-image" class="block text-sm font-medium text-gray-700 mb-1">Product Image</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                <img src="{{asset('assets/admin/images/product_img/'.$data->product_image) }}" alt="Product Image" class="mx-auto h-48 w-48 object-cover rounded-md">    
                <!-- <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-8m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 32m0 0l2.5-2.5m-15.828-6.828l-2.5-2.5M28 32L16 20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="product_image" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div> -->
                </div>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-200 mt-6 flex justify-end space-x-3">
                <button
                type="button"
                class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                Cancel
                </button>
                <button
                type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                Update Product
                </button>
            </div>
            </form>
        </div>
</div>    
        
        </div>
    </section>
    @endsection('content')