@extends('layout')
@section('title-name')
::shopping Home page
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@section('content')   
<section class="min-h-screen flex items-center justify-center py-8">
<!-- Product Card Container -->
    <div class="max-w-4xl w-full bg-white shadow-2xl rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-3xl md:flex">

        <!-- Part 1: Image Section (Responsive Width) -->
        <div class="md:w-1/3 p-4 flex items-center justify-center bg-gray-50 border-r border-gray-100">
            <img
                src="{{asset('assets/admin/images/product_img/'.$data->product_image) }}"
                alt="Product Placeholder Image"
                class="w-full h-auto object-cover rounded-lg transform transition duration-500 hover:scale-[1.02]"
                onerror="this.onerror=null;this.src='';"
            >
        </div>

        <!-- Part 2: Product Details Section (Responsive Width) -->
        <div class="md:w-2/3 p-6 sm:p-8 flex flex-col justify-between">
            
            <!-- Top Details -->
            <div>
                <span class="text-sm font-semibold text-primary-green uppercase tracking-wider mb-2 inline-block bg-primary-green/10 px-3 py-1 rounded-full">
                    Category:{{$data->category}}
                </span>
                
                <h1 class="text-3xl sm:text-4xl font-extrabold text-primary-dark mb-2 leading-tight">
                    {{$data->product_name}}
                </h1>
                
                <p class="text-gray-500 text-base mb-6">
                    {{$data->description}}
                </p>

                <!-- Key Product Info Grid -->
                <div class="grid grid-cols-2 gap-4 mb-6 border-t border-b border-gray-100 py-4">
                    <!-- Quantity Selector (Mock) -->
                    <div>
                        <label for="qty" class="block text-sm font-medium text-gray-700">Quantity</label>
                        <select id="qty" class="mt-1 block w-20 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-green focus:border-primary-green text-base">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    
                    <!-- Other Detail (e.g., Color) -->
                    <!-- <div>
                        <span class="block text-sm font-medium text-gray-700">Color</span>
                        <div class="flex items-center space-x-2 mt-2">
                            <span class="w-5 h-5 bg-gray-800 rounded-full ring-2 ring-primary-green ring-offset-2"></span>
                            <span class="w-5 h-5 bg-indigo-600 rounded-full"></span>
                            <span class="w-5 h-5 bg-white border border-gray-200 rounded-full"></span>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Bottom Price and Action -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mt-6 pt-4 border-t border-gray-100">
                <div class="mb-4 sm:mb-0">
                    <span class="text-xl font-medium text-gray-400 line-through mr-2"></span>
                    <span class="text-4xl font-extrabold text-red-600">₹ {{$data->price}}</span>
                </div>

                <!-- Add to Cart Button -->
                <button
                    onclick="swal('item added successfully in to the cart','click ok to continue','success')"
                    class="w-full sm:w-auto px-8 py-3 bg-black text-white font-bold text-lg rounded-xl shadow-lg shadow-primary-green/30 hover:bg-emerald-600 transition duration-300 transform hover:scale-[1.05] focus:outline-none focus:ring-4 focus:ring-primary-green/50"
                >
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</section>
@endsection('content')