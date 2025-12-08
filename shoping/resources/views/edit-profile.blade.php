@extends('layout')
@section('title-name')
::shopping registration
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('success'))
<script>
swal("Success", "{{ session('success') }}", "success");
</script>
@endif
@if(session('error'))
<script>
swal("Error", "{{ session('error') }}", "error");
</script>
@endif
@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full mx-4">
        <!-- Image Section --><div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x600/?fashion,shopping,signup');">
            <!-- You can replace 'https://source.unsplash.com/random/800x600/?fashion,shopping,signup' with your desired login image --><img src="{{asset('assets\images\benner - Copy.jpg')}}" alt="Fashion Shopping" class="object-cover w-full h-full">
        </div>

        <!-- Registration Form Section --><div class="w-full md:w-1/2 p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Update Your Profile</h2>
            
            <form action="{{ url('/update-Profile') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                    <input type="text" value="{{ Auth::user()->name }}" id="name" name="name" class="input-field" placeholder="kaushik chauhan" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" value="{{ Auth::user()->email }}" id="email" name="email" class="input-field" placeholder="example.email@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone Number</label>
                    <input type="tel" value="{{ Auth::user()->phone }}" id="phone"  name="phone" class="input-field" placeholder="+91 1234509876" required>
                </div>
                <div class="mb-4">
                    <label for="old_password" class="block text-gray-700 text-sm font-semibold mb-2">Old Password</label>
                    <input type="password"  id="password" name="old_password" class="input-field" placeholder="********" required>
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-gray-700 text-sm font-semibold mb-2">New Password</label>
                    <input type="password"  id="password" name="new_password" class="input-field" placeholder="********" required>
                </div>
                <div class="mb-6">
                    <label for="confirm-password" class="block text-gray-700 text-sm font-semibold mb-2">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="input-field" placeholder="********" required>
                </div>
                <button type="submit" class="btn-primary w-full">Update Profile</button>
            </form>
        </div>
    </div>
    </div>
@endsection('content')