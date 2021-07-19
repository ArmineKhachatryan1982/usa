<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fetp Armenia</title>
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
        {{--    header first start--}}
        <div class="header_first">
            <div class="container">
                <div class="d-flex  justify-content-between align-items-center  search_section">
                    <div  id="logo" onclick="window.location.href = '/{{app()->getLocale()}}';"></div>
                    <div class="d-flex lang">
                        <ul class="d-flex" >
                           <?php $pathe =explode("/", request()->path());

                               if(app()->getLocale() == "am"){
                                $patham = str_replace("en","am",request()->path());
                                $pathen = str_replace("am","en",request()->path());
                               }
                               if(app()->getLocale() == "en"){
                                $patham = str_replace("en","am",request()->path());
                                $pathen = str_replace("am","en",request()->path());
                               }
                                ?>
                           <li class="d-inline p-2"><a href="{{ asset('/') }}<?php echo $patham;?>
                           "class=" text-white">ARM</a></li>
                           <li class="d-inline p-2"><a href="{{ asset('/') }}<?php echo $pathen;?>" class=" text-white">ENG</a></li>
                       </ul>
                       <div class="position-relative search_div ">
                        <input class="form-control " type="search"  aria-label="Search">
                        <img class="p-1" src="{{ asset('img/img_footer/Vector.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--    header first start--}}

<!-- menu start -->
<div class="header_second p-2">
    <div class="container" >
        <div class="aaa">
            <nav class="navbar navbar-expand-lg navbar-light  navbar_nav">
                <div>
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex  justify-content-around" id="mynav">

                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset( app()->getLocale().'/about') }}">@lang('main.about_us')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/our_partners') }}">@lang('main.our_partners')</a>
                            </li>

                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/training_programs') }}">@lang('main.training_programs')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/news') }}">@lang('main.news_media')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/cohorts') }}">@lang('main.cohorts')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/steeringcommittee') }}">@lang('main.steering_committee')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/aluminiassciation') }}">@lang('main.alumni_association')</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/contactus') }}">@lang('main.contacts_us')</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
</div>
<!-- menu end -->
</header>
<section id="section_index">
    <!-- main section content  start-->
    @yield('content')
    <!--  main section content finish-->
</section>
{{--footer start--}}
<footer>
    <div class="footer_header">
        <div class="w-100  footer_img">
            <div class="d-flex flex-wrap pt-5 container">

                <div class="w-50 px-5 footer_contact_news">
                    <div  id="logo"></div>
                    <p class="text-white   text-justify">@lang('main.footer_contact_news')</p>
                </div>
                <div class="d-flex flex-column    px-3 footer_contact_news">
                    <h3 class="text-white">Navigation</h3>
                    <a class=" text-white mt-4" href="{{ asset( app()->getLocale().'/about') }}">@lang('main.about_us')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/our_partners') }}">@lang('main.our_partners')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/training_program') }}">@lang('main.training_programs')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/news&media') }}">@lang('main.news_media')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/cohorts') }}">@lang('main.cohorts')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/steeringcommittee') }}">@lang('main.steering_committee')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/aluminiassciation') }}">@lang('main.alumni_association')</a>

                    <a class=" text-white" href="{{ asset(app()->getLocale().'/contactus') }}">@lang('main.contacts_us')</a>
                </div>
                <div class=" d-flex flex-column  w-25 pt-5  footer_contact_news">
                    <a href="#" class="p-  mt-4  text-white"><i class="fa fa-phone mr-3"></i>875-856-856</a>
                    <a href="#" class="p-1  text-white"><i class="fa fa-envelope mr-3"></i>@lang('main.footer_mail')</a>
                </div>
            </div>
        </div>
    </div>
    <div class=" d-flex justify-content-center text-center p-2 footer_bottom"><p class="mx-1">All rights reserved by </p><span >WebEx Technologies</span></div>

</footer>
{{--footer start--}}

</body>
</html>

