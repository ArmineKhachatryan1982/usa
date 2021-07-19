@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/news1.css') }}">
@endsection
@section('content')

<!-- 'date','title_text_am','title_text_en','index_text_am','index_text_en','text_am','text_en','index_img_name','page_img_name','status' -->
    <!-- enter main section content-->
    <img src="{{ asset('img/img_news1') }}/{{$data->page_img_name}}" class="img-fluid" alt="Responsive image">
    <div class="container">
        @if(app()->getLocale() == "en")
        <h1 class="p-4 ">{{$data->title_text_en}}</h1>
        <div class="text-align-justify section_contact_text">{{$data->text_en}}</div>
        @else
        <h1 class="p-4 ">{{$data->title_text_am}}</h1>
        <div class="text-align-justify section_contact_text">{{$data->text_am}}</div>
        @endif


        </section>
        <section class="section_index">
        <div class="row">
        <div class="col-sm-12 container_style">
            <div class="container">
                <a href="#" class="see_also">
                    <slan>See also ... </span>
                </a>
                <div class="row all_cards">
                   
<!-- 'date','title_text_am','title_text_en','index_text_am','index_text_en','text_am','text_en','index_img_name','page_img_name','status' -->

                     @foreach($employees as $data)
                    <div class="col-sm item_card">
                        <!-- card start-->
                        <div class="container">
                            <div class="row" style="
                                background-color: white;
                                height: 490px;
                                width: 280px;">
                                <div class="col-sm-12" style="
                                    padding-right: 0px;
                                    padding-left: 0px;">
                                    <!-- nkar -->
                                    <div class="calendar_style">
                                        <p class="calendar">{{$data->date}}</p>
                                    </div>
                                    <img class="card-img-top" src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}" alt="Card image cap">
                                </div>
                                <div class="col-sm-12">
                                   @if(app()->getLocale() == "en")
                                        <h5 class="card-title"> {{$data->title_text_en}} </h5>
                                        <p class="card-text">{{$data->index_text_en}}</p>
                                        <a href="{{ asset('en/news') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a>

                                        @else
                                        <h5 class="card-title"> {{$data->title_text_am}} </h5>
                                        <p class="card-text">{{$data->index_text_am}}</p>
                                        <a href="{{ asset('am/news') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a>
                                        @endif
                                    
                                </div>
                            </div>
                        </div>
                        <!-- card end-->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
            <!-- enter main section content finish-->
        </section>
@endsection('content')
