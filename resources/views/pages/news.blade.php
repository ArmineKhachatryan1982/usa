@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
            <section class="section_index">
        <div class="label_news d-flex justify-content-center "><h1>@lang('main.news')</h1></div>
        <div class="row">
            <div class="col-sm-12 container_style">
                <div class="container">

                    
                    <div class="row all_cards">

                         @foreach($employees as $data)
                        <div class="col-sm col-md-4 item_card" >
                            <!-- card start-->
                            <div class="">
                                <div class="row" style="
                                background-color: white;
                                height: 490px;
                                ">
                                    <div class="col-sm-12 " style="
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
         {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $employees->links() !!}
        </div>

        <!-- enter main section content finish-->

        <!-- enter main section content finish-->

    
        <!-- enter main section content finish-->
    </section>
   



  
@endsection('content')
