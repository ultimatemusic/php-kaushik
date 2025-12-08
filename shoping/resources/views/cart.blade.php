
@extends('layout')
@section('title-name')
::shopping cart page

@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Auth::check())
@section('content')   
<section class="min-h-screen p-4 sm:p-8">
    <div id="app" class="max-w-6xl mx-auto bg-white rounded-xl shadow-2xl p-4 sm:p-8">
        
        
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-8 border-b pb-4">
            Your Shopping Cart
        </h1>

        <div class="lg:grid lg:grid-cols-3 lg:gap-8">

            <!-- Cart Items List (2/3 width on desktop) -->
            <div class="lg:col-span-2 space-y-6" id="cart-items-container">
                <!-- Item 1: Premium Wireless Headset (In Stock) -->
                 @foreach($cart as $item)

                <div class="flex flex-col sm:flex-row items-start sm:items-center p-4 sm:p-6 bg-white border border-gray-200 rounded-xl shadow-md transition duration-150 hover:shadow-lg">
                    <!-- Product Image -->
                    <img src="{{asset('assets/admin/images/product_img/'.$item->product_image)}}" alt="Premium Wireless Headset" class="w-24 h-24 object-cover rounded-lg mr-4 mb-4 sm:mb-0">
                    <!-- Product Details -->
                    <div class="flex-grow">
                        <h3 class="text-lg font-semibold text-gray-800">{{$item->product_name}}</h3>
                        <p class="text-sm text-gray-500">Price: ₹  {{$item->product_price}} each</p>
                        <p class="text-md font-medium text-gray-800 mt-1 sm:hidden">Total: $199.99</p>
                        <!-- Status Badge -->
                        <span class="bg-green-100 text-green-800 mt-2 inline-block px-2 py-0.5 text-xs font-semibold rounded-full">In Stock</span>
                    </div>
                    <!-- Quantity Control and Item Total -->
                    <div class="flex items-center mt-3 sm:mt-0 sm:ml-4 space-x-4">
                        <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                            <button class="bg-gray-100 hover:bg-gray-200 p-2 text-gray-600 transition duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                            </button>
                            <!-- Static quantity input -->
                            <input type="text" value="{{$item->product_QTY}}" readonly class="w-10 text-center border-x border-gray-300 bg-white font-medium text-gray-800 p-2" aria-label="Quantity">
                            <button class="bg-gray-100 hover:bg-gray-200 p-2 text-gray-600 transition duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                            </button>
                        </div>
                        <p class="hidden sm:block w-24 text-right text-lg font-medium text-gray-800">₹ {{  $item->product_QTY*$item->product_price}}</p>
                        <!-- Remove Button -->
                        <a href="/delete-product-from-cart/{{$item->id}}" class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition duration-150" aria-label="Remove item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6l-12 12"/><path d="M6 6l12 12"/></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Summary Panel (1/3 width on desktop) -->
            <div class="lg:col-span-1 mt-8 lg:mt-0 sticky top-8">
                <div class="bg-indigo-50 p-6 rounded-xl shadow-lg border border-indigo-100">
                    <div class="flex justify-between text-gray-500">
                        <span>{{ Auth::user()->name }}</span>
                    </div>
                    <h2 class="text-2xl font-bold text-indigo-900 mb-6">Order Summary</h2>

                    <div class="space-y-3 text-gray-700" id="summary-details">
                        <!-- Static Summary Details (Calculated from mock data: 199.99 + 250.00 + 450.50 = 900.49) -->
                        <div class="flex justify-between">
                            <span>Subtotal ({{$toatalProduct}} items)</span>
                            <span class="font-medium">₹ {{$cartTotal->TOTAL}}</span>
                        </div>
                        <div class="flex justify-between text-gray-500">
                            <span>Shipping</span>
                            <span class="font-medium">Calculated</span>
                        </div>
                    </div>

                    <div class="border-t border-indigo-200 mt-6 pt-6 flex justify-between items-center text-xl font-bold">
                        <span class="text-indigo-900">Order Total</span>
                        <!-- Static Total (900.49 + 72.04 = 972.53) -->
                        <span id="order-total-amount" class="text-indigo-600">₹ {{$cartTotal->TOTAL}}</span>
                    </div>

                    <button class="w-full mt-8 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg transition duration-200 shadow-md shadow-indigo-300 transform hover:scale-[1.01]">
                        Proceed to Checkout
                    </button>
                    <p class="text-center text-sm text-gray-500 mt-4">Shipping calculated at checkout.</p>
                </div>
            </div>

        </div>

        <!-- Empty Cart Message (Static, hidden by default) -->
        <div id="empty-cart-message" class="hidden text-center p-12 bg-gray-50 rounded-xl mt-8">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="mt-2 text-lg font-medium text-gray-900">Your cart is empty</h3>
            <p class="mt-1 text-sm text-gray-500">
                Looks like you haven't added anything yet. Start shopping!
            </p>
            <a href="#" class="inline-flex items-center mt-4 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Continue Shopping
            </a>
        </div>
    </div>
</section>
@endsection('content')
@else <div>
<script>
        swal('Please login to view your cart','click ok to continue','info');
        setTimeout(() => {
            document.location.href="/sign-in";
            // console.log("This message appears after 2 seconds.");
        }, 3000);
        // window.location.href = '/sign-in';
    </script>
    </div>
@endif