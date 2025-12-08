@extends('admin.layout')
@section('title-name')
::admin home page
@endsection
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class="dashboard">
@if (Session('success'))
        <script>
        swal("{{session('success')}} ", "Click Ok To Continue !", "success");
        </script>        
        @endif 

        @if (Session('error'))
        <script>
        swal("{{session('error')}} ", "Click Ok To Continue !", "error");
        </script>
        @endif 
<div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="{{asset('assets/admin/images/profile.jpg')}}" alt="">
        </div>


            <section>
     @foreach($data as $userId => $items)
  <!-- One User Order Box -->
  <div class="mt-20 mx-auto bg-white shadow-md rounded-xl p-6 mb-8 border border-indigo-300">

      <!-- User Summary -->
      <div class="text-sm text-gray-700 mb-4 grid grid-cols-2 gap-2">
        <p><span class="font-semibold">User:</span> {{ $items[0]->name }}</p>
        <p><span class="font-semibold">Email:</span> {{ $items[0]->email }}</p>
        <p><span class="font-semibold">Order ID:</span> #{{ $items[0]->id }}</p>
        <p><span class="font-semibold">Date:</span> {{ $items[0]->created_at }}</p>
      </div>

      <!-- Product Table -->
      <table class="w-full border-collapse mb-4">
        <thead>
          <tr class="bg-indigo-600 text-white text-left text-sm">
            <th class="p-2 border">Image</th>
            <th class="p-2 border">Product Name</th>
            <th class="p-2 border">Qty</th>
            <th class="p-2 border">Unit Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach($items as $item)
          <tr class="hover:bg-gray-50 text-sm">
            <td class="p-2 border"><img src="{{asset('assets/admin/images/product_img/'.$item->product_image)}}" class="w-20 h-50 rounded" /></td>
            <td class="p-2 border">{{ $item->product_name }}</td>
            <td class="p-2 border">{{ $item->product_QTY }}</td>
            <td class="p-2 border">₹{{ $item->price }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Total + Buttons Row -->
      <div class="flex justify-between items-center mt-6 w-full">
        <div>
          @php $total = collect($items)->sum(fn($x) => $x->price * $x->product_QTY); @endphp
          <p class="text-lg font-semibold">Total Price: <span class="text-green-600">₹{{ $total }}</span></p>
          <p class="text-gray-600 text-sm">* Prices include all taxes.</p>
        </div>
        @if($items[0]->status == 'Pending')
        <div>
            <p class="text-lg font-semibold">Order Status: <span class="text-red-600">{{ $items[0]->status }}</span></p>
        </div>
        <div class="flex gap-4">
            <button class="">
            <a href="/admin/Manage-orders/complete/{{ $items[0]->user_id }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700  m-4  ">
                Complete Order
            </a>
            <a href="/admin/Manage-orders/cancel/{{ $items[0]->user_id }}" class="bg-red-600 text-white hover:bg-red-700 font-medium transition duration-300 rounded-lg py-2 px-4 shadow-md">
                Cancel Order
            </a>
        </div>
        @else
        <div>
            <p class="text-lg font-semibold">Order Status: <span class="text-green-600">{{ $items[0]->status }}</span></p>
        </div>
        @endif
      </div>

  </div>
  @endforeach
</section>

        </div>
    </section>
    @endsection('content')