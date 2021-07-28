@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
@endsection
@section('content')
     <div class="d-flex flex-wrap justify-content-center w-70  partnerses">
    
        <div class="label">
            <h2>@lang('main.partners')</h2>
        </div>
       <!--  <div class="d-flex p-2">Partners</div>  -->
        @foreach($employees as $data)
        <div class="d-flex  align-items-center m-3 partners">
            <div class="partner_img">
                <img src="{{ asset('img/img_partners') }}/{{$data->img_partner}}">
            </div>
            <div class="pl-3 partner_text">
                 @if(app()->getLocale() == "en")
                 <h4 class="partner_name">{{$data->name_en}}</h4>
                <div class="partner_description">{!! $data->min_text_en !!}</div>
                 <button class="read_more p-2"><a href="{{ asset('en/partner') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
                @else
                  <h4 class="partner_name">{{$data->name_am}}</h4>
                <div class="partner_description">{!! $data->min_text_am !!}</div>
                 <button class="read_more p-2 mt-1"><a href="{{ asset('am/partner') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a></button>
                @endif

               
            </div>
        </div>
        @endforeach
    </div> 
    <!-- partner section end -->
     {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $employees->links() !!}
        </div>
@endsection('content')
