@extends('layout')
@section('title-name')
::shopping registration
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
<div class="flex items-center justify-center min-h-screen">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full mx-4">
         <div class="hidden md:block w-1/2 bg-cover bg-center" >
             <img src="{{asset('assets\images\benner.jpg')}}" alt="Fashion Shopping" class="object-cover w-full h-full">
        </div>

        
         <div class="w-full md:w-1/2 p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Create Your Account</h2>
            <form  action="{{ url('/otp-verification') }}" method="POST">
                @csrf
                <div class="mb-4 " >
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <div class="flex h-12">
                    <input type="email" id="email" name="email" class="input-field" placeholder="example.email@example.com" required>
                    <button type="submit" class="btn-primary ml-2">OTP</button>
                </div>
            </form>
            <form  method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="input-field" placeholder="kaushik chauhan" >
                </div>
                @if(Session('data'))
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" 
                        value="{{Session('data')}}" 
                        id="email" 
                        name="email" 
                        class="input-field" 
                        readonly 
                        placeholder="example.email@example.com" >
                </div>
                @endif
               
                <div class="mb-4">
                    <label for="otp" class="block text-gray-700 text-sm font-semibold mb-2">Enter OTP</label>
                    <input type="number" id="otp" name="otp" class="input-field" placeholder="017 238" >
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="input-field" placeholder="+91 1234509876" >
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="input-field" placeholder="******" >
                </div>
                <div class="mb-6">
                    <label for="confirm-password" class="block text-gray-700 text-sm font-semibold mb-2">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="input-field" placeholder="******" >
                </div>
                <button type="submit" class="btn-primary w-full">Register</button>
            </form>
            <p class="text-center text-gray-600 text-sm mt-6">
                Already have an account? <a href="/sign-in" class="text-pink-500 hover:underline font-semibold">Login here</a>
            </p>
            </div>
        </div>
    </div>
</div>
@endsection('content')