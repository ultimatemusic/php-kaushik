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
@if(!Auth::check())
<div>
    <script>
        swal("pleace Login First ", "Click Ok To Continue !", "info");
        setTimeout(() => {
            document.location.href="/sign-in";
            // console.log("This message appears after 2 seconds.");
        }, 5000); 
    </script>
</div>
@else
@section('content')  
    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="space-y-10">
                
                <section class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-indigo-500">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-8 h-8 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Who We Are
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        We started Laadki Art in 2018 with a simple goal: to create innovative products that make a real difference in people's lives. We've grown from a small team to a leading provider in the industry, but our core commitment to quality and integrity remains unchanged.
                    </p>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 border-b pb-2">Our Guiding Principles</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="font-bold text-indigo-600">Integrity</p>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="font-bold text-indigo-600">Customer Focus</p>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="font-bold text-indigo-600">Innovation</p>
                        </div>
                    </div>
                </section>
                
                <section class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-indigo-500">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        Our Product Focus
                    </h3>
                    <p class="text-gray-600 mb-4">
                        We specialize in offering a diverse range of high-quality items across categories, including:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 ml-4 space-y-1">
                        <li>Home Decor and Dining & Kitchen essentials.</li>
                        <li>Unique Personalized Gifting options.</li>
                        <li>Fashion & Lifestyle products.</li>
                        <li>Spiritual & Festive items, and Stationery.</li>
                    </ul>
                </section>

            </div>

            <div class="space-y-10">

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 text-center">Our Location</h2>
                    <!-- Give the map container an explicit height and make the iframe fill it -->
                    <div class="gmap-container rounded-xl shadow-2xl border-4 border-indigo-100 h-64 md:h-96 overflow-hidden">
                        <iframe
                            class="w-full h-full border-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6800620582617!2d70.7749552!3d22.290106100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1764134998247!5m2!1sen!2sin"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Company Location on Google Maps"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <p class="text-center text-gray-500 mt-4 text-sm">
                        Address: 123 Innovation Drive, City, State 12345
                    </p>
                </section>

                <section>
                    <div class="bg-white p-8 rounded-xl shadow-2xl border-t-4 border-indigo-500">
                        <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">
                            Share Your Feedback
                        </h2>
                        <form  method="POST" class="space-y-5">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" value="{{Auth::user()->name}}" placeholder="name" name="name" id="name" required class="mt-1 block w-full border-gray-300 rounded-md p-2.5">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input id="email" value="{{Auth::user()->email}}" placeholder="Email" name="email" type="email" autocomplete="email" required class="mt-1 block w-full border-gray-300 rounded-md p-2.5">
                                </div>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Your FeedBack</label>
                                <textarea id="message"  placeholder="Your FeedBack" name="message" rows="5" required class="mt-1 block w-full border-gray-300 rounded-md p-2.5 resize-none"></textarea>
                            </div>

                            <div>
                                <button type="submit" class="w-full flex justify-center py-3 px-4 rounded-md text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150">
                                    Send FeedBack
                                </button>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </main>
@endsection('content')
@endif