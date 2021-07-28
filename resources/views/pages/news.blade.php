@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
    <!-- title section start -->
        <div class="label_news text-center ">
           
                 <h1 >@lang('main.news')</h1>
          
        </div>
        <!-- title section start -->
        <!-- news section start -->
       <div class="container mt-5">
            <div class="d-flex flex-wrap  justify-content-center myrow"> 
                @foreach($employees as $data)
                <div class="news_item m-2">
                    <div class="position-relative news_img">
                        <img  class="position-absolute responsive w-100 h-100" src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}">
                     <div class="position-absolute py-2 px-4 news_date">{{$data->date}}</div>   
                    </div>
                    @if(app()->getLocale() == "en")
                    <div class="px-3 pt-3"><h5>{!! $data->title_text_en !!}</h5> </div>
                    <div class="p-3 news_text">
                        {!! $data->index_text_en !!}
                    </div>
                    <div class="mx-3 py-1 d-inline read_more">
                        <a  href="{{ asset('en/news') }}/{{$data->id}}"><span>@lang('main.reade_more')</span> </a>
                    </div>
                    
                    
                    @else
                    <div class="px-3 pt-3"><h5>{!! $data->title_text_am !!}</h5> </div>
                    <div class="p-3 news_text">
                        {!! $data->index_text_am !!}
                    </div>
                     <div class="mx-3 py-1 d-inline read_more">
                        <a  href="{{ asset('am/news') }}/{{$data->id}}"><span>@lang('main.reade_more')</span> </a>
                    </div>
                    @endif

                </div>
                 @endforeach
            </div>
        </div>
         <!-- news section start -->
        {{-- Pagination --}}
        <div class="d-flex justify-content-center m-3">
            {!! $employees->links() !!}
        </div>
   



  
@endsection('content')
