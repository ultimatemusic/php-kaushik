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

<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8 mb-12">
            <h2 class="text-3xl font-bold text-primary-blue mb-8 border-b-2 border-accent-pink pb-2">{{ $category_name }}</h2>
            
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
@endsection('content')