@extends('layout')
@section('title-name')
::shopping Home page
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="cdn.tailwindcss.com"></script>
@section('content')
<section>
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Shop By Category</h2>

    <div class="flex flex-row space-x-3 overflow-x-auto pb-2 sm:justify-center">
        <a href="#" class="flex-shrink-0 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-full transition duration-300 shadow-md">
            All Products
        </a>
        
        <a href="#" class="flex-shrink-0 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-full transition duration-300">
            Electronics
        </a>
        
        <a href="#" class="flex-shrink-0 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-full transition duration-300">
            Apparel
        </a>
        
        <a href="#" class="flex-shrink-0 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-full transition duration-300">
            Home Goods
        </a>
        
        <a href="#" class="flex-shrink-0 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-full transition duration-300">
            Books
        </a>
        
        <a href="#" class="flex-shrink-0 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-full transition duration-300">
            Outdoor Gear
        </a>
        
        </div>
    </div>
        </section>

        <section>
            




    <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-base md:h-96">
            <!-- Item 1 -->
            <div class=" duration-700 ease-in-out" data-carousel-item="active" >
                <img src="{{asset('assets/images/slider/6.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/images/slider/3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/images/slider/4.avif')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/images/slider/5.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/images/slider/7.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-base bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-base bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>



    </section>
 

    <section class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">🔥 Top Sell This Week</h2>
    
    <div class="flex space-x-6 pb-4 overflow-x-auto">
        
        <div class="flex-shrink-0 w-64 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
            <a href="#" class="block">
                <div class="h-48 bg-gray-100 rounded-t-lg flex items-center justify-center">
                    <span class="text-gray-500">
                        <img src="{{asset('assets/images/products/womens.jpg')}}" alt="Product Image" class="h-full object-contain">
                    </span>
                </div>
                
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 truncate">Premium Wireless Headphones</h3>
                    <p class="text-sm text-gray-500 mt-1">Electronics</p>
                    
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-xl font-bold text-indigo-600">$199.99</span>
                        
                        <div class="flex items-center text-sm text-yellow-500">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 17.27l6.18 3.73-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73-1.64 7.03z"/></svg>
                            <span class="ml-1 text-gray-500">(4.8)</span>
                        </div>
                    </div>

                    <button class="w-full mt-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition duration-300">
                        Add to Cart
                    </button>
                </div>
            </a>
        </div>
       
        </div>
</section>
@endsection('content')