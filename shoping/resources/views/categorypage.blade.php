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
 <style>
        /* Custom styles for aesthetic enhancements */
        .category-item {
            transition: all 0.2s ease-in-out;
        }
        .category-item:hover:not(.active) {
            transform: translateX(4px);
            background-color: #e5e7eb; /* Subtle hover effect */
        }
        /* Style for the active (selected) category item - text-only */
        .active {
            font-weight: 700; /* Slightly bolder */
            color: #1052FF; /* Primary blue text */
            background-color: #e0e7ff; /* Primary color background for active item */
        }
        /* Removed all icon-related custom CSS */
    </style>
@section('content')   
<section>
    <main class="max-w-7xl mx-auto p-4 md:p-8">
        <h2 class="text-3xl font-extrabold mb-6">Explore Our Collections</h2>

        <!-- Main Content Grid: Unequal Split -->
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-12 gap-6">

            <!-- 1. Categories Sidebar (Static Content - TEXT ONLY) -->
            <aside class="md:col-span-1 lg:col-span-3 bg-white p-4 rounded-xl shadow-lg h-fit sticky top-4">
                <h3 class="text-lg font-semibold mb-4 border-b pb-2">Categories</h3>
                <nav>
                    <ul id="category-list" class="space-y-1">
                        @foreach($category as $category)
                        @if($category_name==$category->category)
                        <a href="/category-page/{{$category->id}}" >
                            <li class="category-item active cursor-pointer p-3 rounded-lg text-gray-700">
                                <span class="text-sm">{{$category->category}}</span>
                            </li>
                        </a>
                        @else
                        <a href="/category-page/{{$category->id}}" >
                            <li class="category-item  cursor-pointer p-3 rounded-lg text-gray-700">
                                <span class="text-sm">{{$category->category}}</span>
                            </li>
                        </a>
                        @endif
                        @endforeach

                    </ul>
                </nav>
            </aside>

            <!-- 2. Products Display Area (Static Content) -->
            <section class="md:col-span-3 lg:col-span-9">
                <div class="flex justify-between items-center mb-6">
                    <h3 id="product-section-title" class="text-2xl font-bold">
                        {{$category_name}}
                    </h3>
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <span>Sort by:</span>
                        <select class="p-1 border rounded-lg">
                            <option>Newest</option>
                        </select>
                    </div>
                </div>

                <!-- Product Grid -->
                <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    
                    <!-- Static Product Card 1 -->
                     @foreach($data as $data)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="{{asset('assets/admin/images/product_img/'.$data->product_image) }}" alt="Abstract Art Canvas" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h4 class="text-base font-semibold truncate">{{$data->product_name}}</h4>
                            <p class="text-primary-blue font-bold text-lg mt-1">₹{{$data->price}}</p>
                            <button class="mt-3 w-full bg-primary-blue text-white py-2 rounded-lg text-sm hover:bg-blue-600 transition duration-150 shadow-lg">
                                <a href="{{'/view-product/'.$data->id}}"> Add to Cart</a>
                            </button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
        </div>
    </main>
</section>

@endsection('content')