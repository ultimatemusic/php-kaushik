@extends('layout')
@section('title-name')
::shopping contact us
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session('success'))
<div>
<script>
swal('success', "You clicked the button!", "success");
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
        <!-- Image Section -->
         <!-- <div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x600/?fashion,shopping,signup');"> -->
            <!-- You can replace 'https://source.unsplash.com/random/800x600/?fashion,shopping,signup' with your desired login image -->
             <!-- <img src="{{asset('assets\images\benner - Copy.jpg')}}" alt="Fashion Shopping" class="object-cover w-full h-full"> -->
        <!-- </div> -->
        @if(!Auth::check())
        <script>
            swal("pleace Login First ", "Click Ok To Continue !", "info");
            setTimeout(() => {
                document.location.href="/sign-in";
                // console.log("This message appears after 2 seconds.");
            }, 5000); 
            

            </script>
        @else
        
        <!-- Registration Form Section -->
         <div class="w-full  p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Contact Us</h2>
            
            <form  method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">User Name</label>
                    <input type="text" id="name" value="{{ Auth::user()->name }}" name="name" class="input-field" placeholder="kaushik chauhan" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" id="email" value="{{ Auth::user()->email }}" name="email" class="input-field" placeholder="example.email@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-gray-700 text-sm font-semibold mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="input-field" placeholder="example. direct purchase" required>
                </div>
                <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    placeholder="A brief but comprehensive description of the conversation."
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                ></textarea>
                </div>
                <br>
                <button type="submit" class="btn-primary w-full">Contact Us</button>
            </form>
            
        </div>
        @endif
    </div>
    </div>
@endsection('content')