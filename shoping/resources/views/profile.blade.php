@extends('layout')
@section('title-name')
::shopping sign-in
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('success'))
<div>
<script>
swal("{{session('success')}}", "You clicked the button!", "success");
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

<section class="min-h-screen flex items-start justify-center p-4 sm:p-6">

    <!-- Main Profile Card Container (Wider max-w-4xl for two-column layout) -->
 <div class="w-full max-w-4xl bg-white shadow-2xl overflow-hidden mt-8 md:mt-12">

        <header class="p-6 border-b border-gray-100 bg-gray-50">
            <h1 class="text-3xl font-extrabold text-gray-900">Manage Account </h1>
            <p class="mt-1 text-gray-500">Manage your profile information settings.</p>
        </header>

        <!-- Profile Content: Two-Column Layout on larger screens -->
        <!-- Added pt-0/pb-0 to inner sections to let the GIF container dictate height cleanly -->
        <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-4 md:divide-x divide-gray-200 gap-8">
            
            <!-- LEFT COLUMN: Static Avatar/GIF (md:col-span-1) -->
            <!-- Added min-h-[500px] to make this column taller and stretch the row -->
            <div class="md:col-span-1 flex flex-col items-center justify-center border-b md:border-b-0 border-gray-100 flex-grow ">
                
                <!-- Avatar GIF Image (Minimal container, no specific shape constraints) -->
                <div class=" p-2 sm:p-4" > 
                    <img id="user-avatar" 
                         src="https://giffiles.alphacoders.com/956/9562.gif" 
                         alt="Profile Visual"
                         class="w-full h-auto object-contain transition duration-300"
                         zoomed-in
                    >
                </div>
            </div>

            <!-- RIGHT COLUMN: Form and Security (md:col-span-3) -->
            <div class="md:col-span-3 md:pl-8 space-y-8">

                <!-- Profile Information Form -->
                <form action="{{ url('/update-Profile') }}" method="POST" id="profile-form"  class="space-y-3">
                    @csrf
                    <h2 class="text-2xl font-bold text-gray-800 border-b pb-3 mb-4">Edit Details</h2>
                    
                    <!-- Name Field --><div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 transition duration-150"
                               placeholder="Enter your full name">
                    </div>

                    <!-- Email Field --><div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 transition duration-150"
                               placeholder="Enter your email address">
                    </div>

                    <!-- Phone Number Field --><div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="{{ Auth::user()->phone }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 transition duration-150"
                               placeholder="Enter your phone number">
                    </div>

                    <!-- Update Button --><div class="pt-4 border-t border-gray-100">
                        <button type="submit"
                                class="w-full sm:w-auto px-6 py-2.5 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-150 ease-in-out transform hover:scale-[1.01]">
                            Update Profile
                        </button>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
</section>

@endsection('content')