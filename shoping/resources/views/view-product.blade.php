@extends('layout')
@section('title-name')
::shopping Home page
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session('success'))
<div>
<script>
swal("{{session('success')}}", "Click Ok To Continue!", "success");
</script>
</div>
@endif
@if (Session('error'))
<div>
<script>
swal("{{session('error')}} ", "Click Ok To Continue !", "error");
</script>
</div>
@endif
@section('content')   
<section class=" flex items-center justify-center py-8">
<!-- Product Card Container -->
    <div class="max-w-6xl w-full bg-white shadow-2xl rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-3xl md:flex">

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
                    Category:{{ $subcategory->subcategory_name}}
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
                    <div>
                        <span class="block text-sm font-medium text-gray-700">Color</span>
                        <div class="flex items-center space-x-2 mt-2">
                            <span class="w-5 h-5 bg-gray-800 rounded-full ring-2 ring-primary-green ring-offset-2"></span>
                            <span class="w-5 h-5 bg-indigo-600 rounded-full"></span>
                            <span class="w-5 h-5 bg-white border border-gray-200 rounded-full"></span>
                        </div>
                    </div>
                    
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4 sm:mb-0">
                    <div>
                    <script>
                        document.getElementById('qty').addEventListener('change', function() {
                            var selectedQty = this.value;
                            console.log('Selected Quantity:', selectedQty);
                            var price=selectedQty*{{$data->price}}
                            document.getElementById('price').innerText='₹ '+price;
                            console.log('Selected Quantity:', price);
                        });
                    </script>
                    
                    <span class="text-xl font-medium text-gray-400 line-through mr-2">₹{{$data->price + 500 }}</span>
                    <span class="text-4xl font-extrabold text-red-600"><p id='price'>₹{{$data->price}}</p> </span>
                    </div>
                <!-- End of Key Product Info Grid -->
                 <div class="flex items-center"> 
                    Ratings : 
                     <svg class="shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg class="shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg class="shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg class="shrink-0 size-5 text-gray-300 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg class="shrink-0 size-5 text-gray-300 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                 </div>
            </div>

             

            <!-- Bottom Price and Action -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mt-6 pt-4 border-t border-gray-100">
                <div class="mb-4 sm:mb-0">
                </div>
                
                <form action="{{ url('/add-to-cart') }}" method="POST" id="addToCartForm" onsubmit="document.getElementById('product_QTY').value = document.getElementById('qty').value;">
                @csrf
                    <input type="hidden" id="product_id" name="product_id" value="{{$data->id}}">
                    <input type="hidden" id="product_price" name="product_price" value="{{$data->price}}">
                    <input type="hidden" id="product_QTY" name="product_QTY" value="">
                    <input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}">
                    <input type="hidden" id="status" name="status" value="Pending">
                    <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-black text-white font-bold text-lg rounded-xl shadow-lg shadow-primary-green/30 hover:bg-emerald-600 transition duration-300 transform hover:scale-[1.05] focus:outline-none focus:ring-4 focus:ring-primary-green/50">
                    Add to Cart</button>
                </form>



                <!-- Add to Cart Button -->
                
            </div>
        </div>
    </div>


</section>
<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8 mb-12">
            <h2 class="text-3xl font-bold text-primary-blue mb-8 border-b-2 border-accent-pink pb-2">Related Product</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Product Card 1 -->
                @foreach($productgallery as $productgallery)
                <a href='{{"/view-product/".$productgallery->id}}' >
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden transform hover:-translate-y-1">
                    <img src="{{asset('assets/admin/images/product_img/'.$productgallery->product_image) }}"  alt="Men's Jacket" class="w-full h-60 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-primary-blue">{{ $productgallery->product_name }}</h3>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-xl font-bold text-accent-pink">{{ $productgallery->price }}</span>
                            <button class="bg-primary-blue text-white p-2 rounded-full hover:bg-accent-pink transition duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
                
            </div>
        </section>
@endsection('content')