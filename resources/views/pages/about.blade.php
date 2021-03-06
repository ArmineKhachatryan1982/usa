@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@section('content')
    <section class="aboutus_first">
        <div class = "d-flex flex-wrap py-5 container aboutus">

            <div class = "ml-4 aboutus_pic"><img style="width:300px;height:400px;" src="{{ asset('img/about') }}/{{$data->img_one}}"></div>
            <div class = "my-4 aboutus_border"></div>
            <div class = "d-flex flex-column aboutus_text">
                <h3 class = "text-center" >@lang('main.about_us')</h3>
                <div class = "d-flex flex-column align-items-center  mt-3 py-4 px-2  bg-white">
                    @if(app()->getLocale() == "en")
                    <p class = "p-2">{{$data->paragraph_one_en}}</p>
                    @else
                    <p class = "p-2">{{$data->paragraph_one_am}}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus_second">
        <div class="container">
             @if(app()->getLocale() == "en")
            <p class="aboutus_second_text px-2">{{$data->paragraph_two_en}}</p>
            <p class="aboutus_second_text px-2">{{$data->paragraph_tree_en}}</p> 
            @else
            <p class="aboutus_second_text px-2">{{$data->paragraph_two_am}}</p>
            <p class="aboutus_second_text px-2">{{$data->paragraph_tree_am}}</p>
            @endif
        </div>
    </section>
    <section class="aboutus_third">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between my-4 aboutus_news_pic" >
                <div class='aboutus_item'><img style="width:100%;height:230px" src="{{ asset('img/about') }}/{{$data->img_two}}"></div>
                <div class='aboutus_item'><img style="width:100%;height:230px" src="{{ asset('img/about') }}/{{$data->img_tree}}"></div>
                <div class='aboutus_item'><img style="width:100%;height:230px" src="{{ asset('img/about') }}/{{$data->img_fore}}"></div>
            </div>
        </div>
    </section>
@endsection('content')

