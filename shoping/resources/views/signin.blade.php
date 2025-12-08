@extends('layout')
@section('title-name')
::shopping sign-in
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session('success'))
<script>
swal('success', "You clicked the button!", "success");
</script>
@endif
@if(Session('error'))
<div>
<script>
swal("{{session('error')}} ", "Click Ok To Continue !", "error");
</script>
</div>
@endif 
@section('content')
 <div class="flex items-center justify-center min-h-screen">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full mx-4">
        <!-- Image Section -->
         <div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x600/?fashion,shopping,signup');">
            <!-- You can replace 'https://source.unsplash.com/random/800x600/?fashion,shopping,signup' with your desired login image --><img src="{{asset('assets\images\benner.jpg')}}" alt="Fashion Shopping" class="object-cover w-full h-full">
        </div>
        
        <!-- Registration Form Section --><div class="w-full md:w-1/2 p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Sign In</h2>
            <form method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="input-field" placeholder="example.emial@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="input-field" placeholder="******" required>
                </div>
                <button type="submit" class="btn-primary w-full">Sign in</button>
            </form>
            <p class="text-center text-gray-600 text-sm mt-6">
                Don't have an account? <a href="create-account" class="text-pink-500 hover:underline font-semibold">registration here</a>
            </p>
        </div>
    </div>
    </div>

    @if(Auth::check())
    <script>
        swal("Login successfully as {{ Auth::user()->name }} ", "Click Ok To Continue !", "success");

        document.location.href="/";

        </script>
    @endif
    @endsection('content')