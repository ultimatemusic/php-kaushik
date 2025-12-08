@extends('layout')
@section('title-name')
::shopping Home page
@endsection
@section('content')
     <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        
        <!-- Hero Section -->
        <div class="relative bg-primary-blue text-white rounded-2xl shadow-xl overflow-hidden mb-12 h-[300px] md:h-[450px] flex items-center justify-center">
            <!-- Background Placeholder Image (Replace with actual image later) -->
            <img src="{{asset('assets\images\benner.jpg')}}"  class="absolute inset-0 w-full h-full object-cover opacity-70" alt="Hero background">
            <div class="relative z-10 text-center p-6 " >
                <h1 class="text-4xl sm:text-6xl font-extrabold mb-3">
                    Style Revolution
                </h1>
                <p class="text-lg sm:text-xl font-light mb-6">
                    Shop the freshest trends and classic staples.
                </p>
                <a href="#" class="inline-block bg-accent-pink text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-pink-700 transition duration-300 transform hover:scale-105">
                    SHOP NOW
                </a>
            </div>
        </div>
        
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
                        <p class="text-secondary-gray text-sm">{{ $data->category }}</p>
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