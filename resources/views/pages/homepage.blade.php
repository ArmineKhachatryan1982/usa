@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="css/homepage.css">
@endsection
@section('content')

    <section class ="p-3 home_first">
        <div class ="container">
            <div class ="w-75 training">
                <h2 class =" p-2 text-white">Armenia Field Epidemilogy<br>
                    Training Program<br>
                    (FETP)
                </h2>
            </div>
        </div>
    </section>
    <section class = "home_second">
        <div class = "d-flex flex-wrap justify-content-center align-items-center py-2 container">
            <div class = "home_border"></div>
            <div class = "m-3 home_pic"></div>
            <div class = "d-flex flex-column  m-3 home_text">
                <h3 class = "text-center" >About US</h3>
                <div class = "d-flex flex-column align-items-center  mt-3 py-4 px-1  bg-white">
                    <p class = "p-2">Lorem ipsum dolor sit amet,  sollicitudin sem.   sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque nibh eget ipsum iaculis iaculis. Donec faucibus pharetra enim nec sollicitudin.
                    </p>
                    <button class = "py-1 px-3 text-white">Read more</button>
                </div>
            </div>
        </div>
    </section>
    <section class = "home_third">
        <div class = "d-flex flex-column align-items-center py-3 container">
            <h2 class = "text-center text-white p-4">News and Events</h2>
            <div class = "d-flex flex-wrap justify-content-center w-75 news_events" id="event_id">

                <div class = "mt-4 event">
                    <div class="news_img">
                        <img src="img\img_home\image 9.png">
                    </div>
                    <div >
                        <h5 class="p-2">Lorem ipsum dolor sit </h5>
                        <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum
                        </p>
                        <ul class="d-flex m-2">
                            <li class="display-inline p-2">
                                <a href="#">READ MORE</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class = "mt-4 event">
                    <div class="news_img">
                        <img src="img\img_home\image 9.png">
                    </div>
                    <div >
                        <h5 class="p-2">Lorem ipsum dolor sit </h5>
                        <p class="px-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum
                        </p>
                        <ul class="d-flex m-2">
                            <li class="display-inline p-2">
                                <a href="#">READ MORE</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class = "mt-4 event">
                    <div class="news_img">
                        <img src="img\img_home\image 9.png">
                    </div>
                    <div >
                        <h5 class="p-2">Lorem ipsum dolor sit </h5>
                        <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum
                        </p>
                        <ul class="d-flex m-2">
                            <li class="display-inline p-2">
                                <a href="#">READ MORE</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class = "mt-4 event">
                    <div class="news_img">
                        <img src="img\img_home\image 9.png">
                    </div>
                    <div >
                        <h5 class="p-2">Lorem ipsum dolor sit </h5>
                        <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum
                        </p>
                        <ul class="d-flex m-2">
                            <li class="display-inline p-2">
                                <a href="#">READ MORE</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class = "mt-4 event">
                    <div class="news_img">
                        <img src="img\img_home\image 9.png">
                    </div>
                    <div >
                        <h5 class="p-2">Lorem ipsum dolor sit </h5>
                        <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum
                        </p>
                        <ul class="d-flex m-2">
                            <li class="display-inline p-2">
                                <a href="#">READ MORE</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class = "mt-4 event">
                    <div class="news_img">
                        <img src="img\img_home\image 9.png">
                    </div>
                    <div >
                        <h5 class="p-2">Lorem ipsum dolor sit </h5>
                        <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum
                        </p>
                        <ul class="d-flex m-2">
                            <li class="display-inline p-2">
                                <a href="#">READ MORE</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <button class = "m-5 py-1 px-3 text-white">Read more</button>
        </div>
    </section>
    <section class = "home_forth">
        <div class="d-flex flex-column align-items-center container">
            <h2 class="m-4">Our Affiliates</h2>
            <div class="w-75">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" >
                        <div class=" d-flex justify-content-center align-items-center carousel-item active">
                            <div class="w-50 m-2 p-2 slide_1">
                                <h2>Logo</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est,
                                </p>
                            </div>

                            <div class="w-50 m-2 p-2 slide_2">
                                <h2>Logo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est,</p>
                            </div>
                            <!-- <img class="d-block w-100" src="images/1.jpg" alt="First slide"> -->
                        </div>
                        <div class=" d-flex justify-content-center align-items-center carousel-item">
                            <div class="w-50 m-2 p-2 slide_1">
                                <h2>Logo</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est,
                                </p>
                            </div>

                            <div class="w-50 m-2 p-2 slide_2">
                                <h2>Logo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est,</p>
                            </div>
                            <!-- <img class="d-block w-100" src="images/1.jpg" alt="First slide"> -->
                        </div>
                        <div class=" d-flex justify-content-center align-items-center carousel-item">
                            <div class="w-50 m-2 p-2 slide_1">
                                <h2>Logo</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est,
                                </p>
                            </div>

                            <div class="w-50 m-2 p-2 slide_2">
                                <h2>Logo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est,</p>
                            </div>
                            <!-- <img class="d-block w-100" src="images/1.jpg" alt="First slide"> -->
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class = "home_fifth">
        <div class="d-flex flex-column  justify-content-center align-items-center container">
            <h2 class="m-3">Our Partners</h2>
            <div class="d-flex flex-wrap justify-content-center   partnerses">
                <div class="d-flex  align-items-center m-1 partners">
                    <div class = "partner_img">
                        <img src="img/img_home/image 20.png">
                    </div>
                    <div class="pl-3 partner_text">
                        <h4>Partner name</h4>
                        <p class="py-2">Lorem ipsum dolor sit amet, consectetur S. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros</p>
                        <button class="text-white">Read More</button>
                    </div>
                </div>
                <div class="d-flex  align-items-center m-1   partners">
                    <div class = "partner_img">
                        <img src="img/img_home/image 26.png">
                    </div>
                    <div class="pl-3 partner_text">
                        <h4>Partner name</h4>
                        <p class="py-2">Lorem ipsum dolor sit amet, consectetur S. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros</p>
                        <button class="text-white">Read More</button>
                    </div>
                </div>
                <div class="d-flex  align-items-center m-1   partners">
                    <div class = "partner_img">
                        <img src="img/img_home/image 30.png">
                    </div>
                    <div class="pl-3 partner_text">
                        <h4>Partner name</h4>
                        <p class="py-2">Lorem ipsum dolor sit amet, consectetur S. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros</p>
                        <button class="text-white">Read More</button>
                    </div>
                </div>
                <div class="d-flex  align-items-center m-1   partners">
                    <div class = "partner_img">
                        <img src="img/img_home/image 31.png">
                    </div>
                    <div class="pl-3 partner_text">
                        <h4>Partner name</h4>
                        <p class="py-2">Lorem ipsum dolor sit amet, consectetur S. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros</p>
                        <button class="text-white">Read More</button>
                    </div>
                </div>
            </div>

            <button class = "py-1 px-3 text-white m-5">Read more</button>
        </div>
    </section>
@endsection('content')

