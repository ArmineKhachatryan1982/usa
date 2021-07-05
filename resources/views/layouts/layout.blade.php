<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>america</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- font icon -->
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- slide link start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- slide-link end -->


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')

</head>
<body>
<header>
    <div class="header_first">
        <div class="d-flex  container">
            <div class="d-flex justify-content-between align-items-center  search_section">
                <h2 class="text-white">LOGO</h2>
                <div class="d-flex lang">
                    <ul class="d-flex" >
                        <li class="d-inline p-2"><a href="{{ asset('/') }}{{request()->path()}}" class=" text-white">ARM</a></li>
                        <li class="d-inline p-2"><a href="{{ asset('/') }}{{request()->path()}}" class=" text-white">ENG</a></li>
                    </ul>
                    <div class="search_div">
                        <input class="form-control " type="search"  aria-label="Search">
                        <img class="p-1" src="{{ asset('img/img_footer/Vector.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="header_second">
        <div class="container" style="border:1px solid red">
            <div class="d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light  navbar_nav" style="border:1px solid green">
                    <div>
                        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                        <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon text-white"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                               
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset( app()->getLocale().'/aboutus') }}">@lang('main.about_us')</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/partners') }}">Our Partners</a>
                                </li>

                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/training') }}">Training Programs</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/news') }}">News & Media</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/cohorts') }}">Cohorts</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/steering') }}">Steering Committee</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/alumni') }}">Alumni Association</a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/contactus') }}">Contacts Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>
<section id="section_index">
    <!-- enter main section content-->
@yield('content')

<!-- enter main section content finish-->
</section>
<footer>
    <div class="footer_header">
        <div class="w-100  footer_img">
            <div class="text-white container">

                <div class="d-flex  flex-wrap justify-content-center footer_news">
                    <div class="py-5  footer_item">
                        <h2 class="mt-3">LOGO</h2>
                        <div class="d-flex flex-wrap justify-content-center footer_all" >
                            <div class="mt-5  text-justify footer_contact_news ">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque nibh eget ipsum iaculis iaculis.
                            </div>
                            <div class="mx-5 footer_contact_news">
                                <h4>@lang('main.navigation')</h4>
                                <a href="{{ asset(app()->getLocale().'/') }}" class="d-block p-1 text-white">@lang('main.home')</a>
                                <a href="{{ asset( app()->getLocale().'/aboutus') }}" class="d-block p-1 text-white">@lang('main.about_us')</a>
                                <a href="#" class="d-block p-1 text-white">@lang('main.courses')</a>
                                <a href="#" class="d-block p-1 text-white">@lang('main.coorts')</a>
                                <a href="#" class="d-block p-1 text-white">@lang('main.alumni_association')</a>
                                <a href="#" class="d-block p-1 text-white">@lang('main.steering_committee') </a>
                                <a href="#" class="d-block p-1 text-white">@lang('main.contacts') </a>
                            </div>
                            <div class="d-flex flex-column mt-4  footer_contact_news">

                                <a href="#" class="p-1  text-white"><i class="fa fa-phone mr-3"></i>875-856-856</a>
                                <a href="#" class="p-1  text-white"><i class="fa fa-envelope mr-3"></i>example@gmail.com</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=" d-flex justify-content-center text-center p-2 footer_bottom"><p class="mx-1">All rights reserved by </p><span >WebEx Technologies</span></div>

</footer>

</body>
</html>

