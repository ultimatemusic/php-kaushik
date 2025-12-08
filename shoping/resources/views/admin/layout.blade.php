<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}} ">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .category-dropdown {
            position: relative;
        }
        
        .category-dropdown .sub-menu {
            display: none;
            position: relative;
            background: var(--sidebar-color);
            padding-left: 40px;
            margin-top: 4px;
        }
        
        .category-dropdown.active .sub-menu {
            display: block;
        }
        
        .category-dropdown .arrow {
            transition: transform 0.3s ease;
        }
        
        .category-dropdown.active .arrow {
            transform: rotate(180deg);
        }
        
        .sub-menu li a {
            display: block;
            padding: 8px 0;
            color: var(--text-color);
            transition: all 0.3s ease;
        }
        
        .sub-menu li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }
    </style>

    <title>shoping admin :: @yield('title-name')</title>
    
</head>
@if(!Session('useremail'))
    <script>
        window.location.href = "{{url('admin-login')}}";
    </script>
@else
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{asset('assets/admin/images/logo.png')}}" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
            
            
        </div>
            
        
        <div class="menu-items">
            
            <ul class="nav-links">
                <h3 class="text-black mt-4 ml-4">Welcome , {{Session('useremail')}}</h3>
                <li><a href="/admin">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="/admin/Menage-customers">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Menage customers</span>
                </a></li>
                <li><a href="/admin/addproduct">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Add Product</span>
                </a></li>
                <li><a href="/admin/Menage-product">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Menage product</span>
                </a></li>
                <li><a href="/admin/Menage-FeedBack">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Menage FeedBack</span>
                </a></li>

                <li class="category-dropdown">
                    <a href="#" class="dropdown-trigger">
                        <i class="bx bx-collection"></i>
                        <span class="link-name">Category</span>
                        <i class="bx bxs-chevron-down arrow"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="/admin/add-category">Add Category</a></li>
                        <li><a href="/admin/add-subcategory">Add  SubCategory</a></li>
                    </ul>
                </li>

                

                <li><a href="/admin/Menage-contact">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Menage Contact</span>
                </a></li>
                <li><a href="/admin/Manage-orders">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Manage Orders</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="/admin/admin-logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    @yield('content');
    <script src="{{asset('assets/admin/js/script.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryDropdown = document.querySelector('.category-dropdown');
            const dropdownTrigger = categoryDropdown.querySelector('.dropdown-trigger');
            
            dropdownTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                categoryDropdown.classList.toggle('active');
            });
        });
    </script>
</body>
@endif
</html>