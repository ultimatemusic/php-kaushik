<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping :: @yield('title-name')</title>
    <!-- Load Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Use Inter font family -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f7f7;
        }
        .btn-primary {
            background-color: #ec4899; /* Pink from your header */
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 600;
            transition: background-color 0.2s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #db2777; /* Darker pink on hover */
        }
        .input-field {
            border: 1px solid #d2d6dc; /* Light gray border */
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            width: 100%;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .input-field:focus {
            outline: none;
            border-color: #ec4899;
            box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.2);
        }
    </style>
    <!-- Tailwind Configuration for custom colors and rounding -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#0A2540',
                        'accent-pink': '#E91E63',
                        'secondary-gray': '#4B5563',
                    },
                    borderRadius: {
                        'xl': '1.0rem',
                    }
                }
            }
        }

    </script>
</head>
<body>

    <!-- Navigation Bar (Three-Part Layout) -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                
                <!-- Part 1: Logo (Left Side) -->
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-2xl font-extrabold text-primary-blue tracking-wider hover:text-accent-pink transition duration-300">
                        Laadki Art
                    </a>
                </div>

                <!-- Part 2: Main Links (Center - Hidden on mobile, visible on desktop) -->
                <div class="hidden lg:ml-6 lg:flex lg:space-x-10 lg:items-center">
                    <a href="/category-page/12" class="text-secondary-gray hover:text-accent-pink font-medium transition duration-300 rounded-md py-2 px-3">Store</a>
                    <a href="/contact-us" class="text-secondary-gray hover:text-accent-pink font-medium transition duration-300 rounded-md py-2 px-3">Contact Us</a>
                    <a href="/feedback" class="text-secondary-gray hover:text-accent-pink font-medium transition duration-300 rounded-md py-2 px-3">About Us</a>
                </div>
                <!-- Part 3: User Actions (Right Side - Visible on desktop) -->
                
                @if(Auth::check())
                
                <div class="hidden lg:ml-4 lg:flex lg:items-center space-x-4">
                    <a href="/profile" class="text-secondary-gray hover:text-primary-blue font-medium transition duration-300 rounded-lg py-2 px-3">welcome, {{ Auth::user()->name }}</a>
                    
                    
                    <a href="/logout" class="bg-primary-blue text-white hover:bg-accent-pink font-medium transition duration-300 rounded-lg py-2 px-4 shadow-md">Logout</a>
                    <!-- Cart Icon with Placeholder Item Count -->
                    <a href="/cart/{{Auth::user()->id}}" class="bg-primary-blue text-white hover:bg-accent-pink font-medium transition duration-300 rounded-lg py-2 px-4 shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                     </a>
                </div>
                @else
                            <!-- Part 3: User Actions (Right Side - Visible on desktop) -->
                <div class="hidden lg:ml-4 lg:flex lg:items-center space-x-4">
                    <a href="/sign-in" class="text-secondary-gray hover:text-primary-blue font-medium transition duration-300 rounded-lg py-2 px-3">Sign In</a>
                    <a href="/create-account" class="bg-primary-blue text-white hover:bg-accent-pink font-medium transition duration-300 rounded-lg py-2 px-4 shadow-md">Create Account</a>
                    
                    <!-- Cart Icon with Placeholder Item Count -->
                     <a href="/cart" class="bg-primary-blue text-white hover:bg-accent-pink font-medium transition duration-300 rounded-lg py-2 px-4 shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                     </a>
                    <!-- <button  class="relative p-2 text-secondary-gray hover:text-accent-pink rounded-full transition duration-300">
                        
                    </button> -->
                </div>
                @endif
        


                <!-- Mobile Menu Button (Visible on mobile) -->
                <div class="-mr-2 flex items-center lg:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-secondary-gray hover:text-accent-pink hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-blue transition duration-150" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg id="menu-icon-closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg id="menu-icon-open" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu, show/hide based on menu state. -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-100">
                <!-- Part 2 Links -->
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-gray hover:bg-gray-100 hover:text-primary-blue">Men</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-gray hover:bg-gray-100 hover:text-primary-blue">Women</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-gray hover:bg-gray-100 hover:text-primary-blue">Stores</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center justify-between px-5">
                    <!-- Part 3 Actions -->
                     @if(Auth::check())
                    <a href="/sign-in" class="block py-2 text-base font-medium text-secondary-gray hover:text-accent-pink">welcome, {{ Auth::user()->name }}</a>
                    <a href="/logout" class="bg-accent-pink text-white hover:bg-primary-blue font-medium transition duration-300 rounded-lg py-2 px-4 text-sm shadow-md">Logout</a>
                    @else
                    <a href="/sign-in" class="block py-2 text-base font-medium text-secondary-gray hover:text-accent-pink">Sign in</a>
                    <a href="/create-account" class="bg-accent-pink text-white hover:bg-primary-blue font-medium transition duration-300 rounded-lg py-2 px-4 text-sm shadow-md">create account</a>
                    @endif
                    <button class="relative p-2 text-secondary-gray hover:text-accent-pink rounded-full transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">3</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content Area -->
    @yield('content');

    <!-- Footer -->
    <footer class="bg-primary-blue text-white mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm">
            <p>&copy; 2024 Stellar Threads. All rights reserved. | <a href="#" class="hover:text-accent-pink transition duration-300">Privacy Policy</a></p>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const menuIconClosed = document.getElementById('menu-icon-closed');
            const menuIconOpen = document.getElementById('menu-icon-open');

            if (menu.classList.contains('hidden')) {
                // Show menu
                menu.classList.remove('hidden');
                menuIconClosed.classList.add('hidden');
                menuIconOpen.classList.remove('hidden');
            } else {
                // Hide menu
                menu.classList.add('hidden');
                menuIconClosed.classList.remove('hidden');
                menuIconOpen.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
