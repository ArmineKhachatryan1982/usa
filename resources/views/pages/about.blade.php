@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@section('content')
    <section class="aboutus_first">
        <div class = "d-flex flex-wrap py-5 container aboutus">

            <div class = "ml-4 aboutus_pic"></div>
            <div class = "my-4 aboutus_border"></div>
            <div class = "d-flex flex-column aboutus_text">
                <h3 class = "text-center" >About US</h3>
                <div class = "d-flex flex-column align-items-center  mt-3 py-4 px-2  bg-white">
                    <p class = "p-2">Lorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolorLorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolor sitLorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolor sit LoremLorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet,Lorem ipsum dolor sit Lorem ipsum dolor sit amet, sollicitudin sem.   sollicitudin sem. sit amet, sollicitudin sem.   sollicitudin sem. sit amet, sollicitudin sem.   sollicitudin sem.  sollicitudin sem.   sollicitudin sem.  sollicitudin sem.  sollicitudin sem.   sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque nibh eget ipsum iaculis iaculis. Donec faucibus pharetra enim nec sollicitudin.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus_second">
        <div class="container">
            {{--            <div class="row">--}}
            {{--                <div class="col-sm-12">--}}
            {{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque nibh eget ipsum iaculis iaculis. Donec faucibus pharetra enim nec sollicitudin.--}}
            {{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque.</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <p class="aboutus_second_text px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque nibh eget ipsum iaculis iaculis. Donec faucibus pharetra enim nec sollicitudin.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque.</p>
            <p class="aboutus_second_text px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque nibh eget ipsum iaculis iaculis. Donec faucibus pharetra enim nec sollicitudin.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis fermentum lectus. Curabitur vehicula tellus in enim tempor, at congue dui tempor. Proin efficitur eros ultricies ex venenatis varius. Etiam erat ante, consequat ut malesuada quis, condimentum id turpis. Pellentesque in sollicitudin sem. Nunc et mattis est, nec fringilla lacus. Vivamus sodales nunc nec nunc mollis volutpat. Fusce finibus tortor id lectus ultrices, ac fringilla risus dictum. Donec scelerisque.</p>
        </div>
    </section>
    <section class="aboutus_third">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between my-4 aboutus_news_pic" >

                <div class='aboutus_item'></div>
                <div class='aboutus_item'></div>
                <div class='aboutus_item'></div>
            </div>
        </div>
    </section>
@endsection('content')

