
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 
    

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset ('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/adminpage.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css') }}">
	<script src="{{asset('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{asset('assets/js/toastr.min.js') }}"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    
   
</head>

   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> 
 <!-- Spinner End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>STAFF DASHBOARD</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
         
                  
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</nav>
<!-- Navbar End -->

@yield('section')


@yield('script')


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset ('assets/lib/wow/wow.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
 <script src="{{ asset ('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{ asset ('assets/js/main.js')}}"></script>

   <!-- Template Javascript for date picker-->
   <script src="{{ asset ('assets/js/main.js')}}"></script>


  </body>
  </html>
   