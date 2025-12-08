@extends('layout')
@section('title-name')
::shopping Home page
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js">import 'flowbite';</script>
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
     <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        
        <section>
<div class="container mx-auto px-4 py-0">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Shop By Category</h2>

    <div class="flex flex-row space-x-3 overflow-x-auto pb-2 sm:justify-center">
        <a href="#" class="flex-shrink-0 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-full transition duration-300 shadow-md">
            All Products
        </a>
        @foreach($category as $category)
        <a href="{{'/category/'.$category->id}}" class="flex-shrink-0 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-full transition duration-300">
            {{ $category->category }}
        </a>
        @endforeach
        
        </div>
    </div>
        </section>

        <section>
            




<div id="controls-carousel" class="relative w-full" data-carousel="static">
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('assets/images/slider/6.png') }}" class="absolute block w-full h-full object-cover" alt="Slide 1">
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/slider/3.jpg') }}" class="absolute block w-full h-full object-cover" alt="Slide 2">
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/slider/4.avif') }}" class="absolute block w-full h-full object-cover" alt="Slide 3">
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/slider/5.jpg') }}" class="absolute block w-full h-full object-cover" alt="Slide 4">
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/slider/7.png') }}" class="absolute block w-full h-full object-cover" alt="Slide 5">
        </div>

    </div>

    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


    </section>


        <!-- Product Grid Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-primary-blue mb-8 border-b-2 border-accent-pink pb-2">Trending Now</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Product Card 1 -->
                @foreach($data as $data)
                <a href='{{"/view-product/".$data->id}}' >
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden transform hover:-translate-y-1">
                    <img src="{{asset('assets/admin/images/product_img/'.$data->product_image) }}"  alt="Men's Jacket" class="w-full h-60 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-primary-blue">{{ $data->product_name }}</h3>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-xl font-bold text-accent-pink">{{ $data->price }}</span>
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

    </main>

@endsection('content')