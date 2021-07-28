@extends('layouts.layout')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection
@section('content')
<!-- 'about','News','Affiliates','Partners' -->
<section class ="p-3 home_first">
    <div class ="container">
        <div class ="w-75 training">
            <h2 class =" p-2 text-white"><!-- Armenia Field Epidemilogy<br>
                Training Program<br>
                (FETP) -->
                @if(app()->getLocale() == "en")
                {!! $Title->home_title_en !!}
                @else
                {!! $Title->home_title_am !!}
                @endif
            </h2>
        </div>
    </div>
</section>

<section class = "home_second">
  
    <div class = "d-flex flex-wrap justify-content-center align-items-center py-2 container">
        <div class = "home_border"></div>
        <div class = "m-3 home_pic"><img src="{{ asset('img/about') }}/{{$about->imgpath}}"></div>
        <div class = "d-flex flex-column  m-3 home_text">
            <h3 class = "text-center" >@lang('main.about_us')</h3>
            <div class = "d-flex flex-column align-items-center  mt-3 py-4 px-1  bg-white">
               @if(app()->getLocale() == "en")
               <p class = "p-2">{!! $about->text_en !!}</p>
               <button class = "py-1 px-3 text-white"><a href="{{ asset('en/about') }}" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
               @else
               <p class = "p-2">{!!$about->text_am!!}</p>
               <button class = "py-1 px-3 text-white"><a href="{{ asset('am/about') }}" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
               @endif

           </div>
       </div>
   
 </div>
</section>
<section class = "home_third">
    <div class = "d-flex flex-column align-items-center pt-3 pb-5 container">
        <h2 class = "text-center text-white p-4">@lang('main.news')</h2>
        <div class = "d-flex flex-wrap justify-content-center w-75 news_events" id="event_id">
           @foreach($News as $data)
           <div class = "mt-4 event">
            <div class="news_img">
                <p class="position-absolute py-2 px-4">{{$data->date}}</p>
                <img src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}">
            </div>
            <div >
                @if(app()->getLocale() == "en")
               <h5 class="p-2">{!!$data->title_text_en!!}</h5>
                <div class="px-2"> {!! $data->index_text_en !!} </div>
                <ul class="d-flex m-2">
                    <li class="display-inline p-2">
                        <a href="{{ asset('en/news') }}/{{$data->id}}">@lang('main.reade_more')</a>
                    </li>
                </ul>
                @else
                <h5 class="p-2">{!! $data->title_text_am !!} </h5>
                <div class="px-2"> {!! $data->index_text_am !!}</div>
                <ul class="d-flex m-2">
                    <li class="display-inline p-2">
                        <a href="{{ asset('am/news') }}/{{$data->id}}">@lang('main.reade_more')</a>
                    </li>
                </ul>
                @endif

            </div>
        </div>
        @endforeach
</section>
<section class = "home_fifth">
    <div class="d-flex flex-column  justify-content-center align-items-center container">
        <h2 class="m-3">@lang('main.our_partners')</h2>
        <div class="d-flex flex-wrap justify-content-center   partnerses">
              @foreach($Partners as $data)
            <div class="d-flex  align-items-center  partners">
                <div class = "partner_img px-2">
                    <img src="{{ asset('img/img_home') }}/{{$data->img_partner}}">
                </div>
                <div class="pl-3 partner_text">
                     @if(app()->getLocale() == "en")
                      <h4>{!! $data->name_en !!}</h4>
                    <div class="py-2">{!! $data->min_text_en !!}</div>
                    <button class="text-white mt-2 p-1"><a href="{{ asset('en/partner') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
                     @else
                       <h4>{{$data->name_am}}</h4>
                    <div class="py-2">{!!$data->min_text_am !!}</div>

                    <button class="text-white mt-2 p-1"><a href="{{ asset('am/partner') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
                    @endif
                   
                </div>
            </div>
            @endforeach
            
    </div>

        <button class = "py-1 px-3 text-white m-5"><a href="{{ asset('/') }}{{app()->getLocale()}}/our_partners" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
</section>
@endsection('content')

