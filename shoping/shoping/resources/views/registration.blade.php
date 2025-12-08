@extends('layout')
@section('title-name')
::shopping registration
@endsection
@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full mx-4">
        <!-- Image Section --><div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x600/?fashion,shopping,signup');">
            <!-- You can replace 'https://source.unsplash.com/random/800x600/?fashion,shopping,signup' with your desired login image --><img src="{{asset('assets\images\benner - Copy.jpg')}}" alt="Fashion Shopping" class="object-cover w-full h-full">
        </div>

        <!-- Registration Form Section --><div class="w-full md:w-1/2 p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Create Your Account</h2>
            
            <form  method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="input-field" placeholder="kaushik chauhan" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="input-field" placeholder="example.email@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="input-field" placeholder="+91 1234509876" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="input-field" placeholder="******" required>
                </div>
                <div class="mb-6">
                    <label for="confirm-password" class="block text-gray-700 text-sm font-semibold mb-2">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="input-field" placeholder="******" required>
                </div>
                <button type="submit" class="btn-primary w-full">Register</button>
            </form>
            <p class="text-center text-gray-600 text-sm mt-6">
                Already have an account? <a href="/sign-in" class="text-pink-500 hover:underline font-semibold">Login here</a>
            </p>
        </div>
    </div>
    </div>
@endsection('content')