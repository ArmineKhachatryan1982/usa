@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/open_partner.css') }}">
@endsection
@section('content')
    <section class="pt-3">
        <p class="label1 d-flex justify-content-center container ">@lang('main.partners')</p>
    </section>
    <section class="container" style="border: 1px solid #ADADAD;">
        <div class="  first d-flex justify-content-center container bordering_top">
               @if(app()->getLocale() == "en")
               <img class="imgOne " src="{{ asset('img/img_partners') }}/{{$data->img_partner}}" alt="">
            <div class="partnerName ">
                <p class="name_label d-flex ">{{$data->name_en}}</p>
                <p>{{$data->des_en}}</p>
            </div>
            <img class=" imageTwo" src="{{ asset('img/img_partners') }}/{{$data->compni_logo}}" alt="">
        </div>
        <p class="about_partner container "> {{$data->text_one_en}}<br><br>
           {{$data->text_two_en}}<br><br>
           {{$data->text_tree_en}}
        </p>

               @else
            <img class="imgOne " src="{{ asset('img/img_partners') }}/{{$data->img_partner}}" alt="">
            <div class="partnerName ">
                <p class="name_label d-flex ">{{$data->name_am}}</p>
                <p>{{$data->des_am}}</p>
            </div>
            <img class=" imageTwo" src="{{ asset('img/img_partners') }}/{{$data->compni_logo}}" alt="">
        </div>
        <p class="about_partner container "> {{$data->text_one_am}}<br><br>
           {{$data->text_two_am}}<br><br>
           {{$data->text_tree_am}}
        </p>
        @endif



    </section>
    <!-- more partner  info start-->

      



          <div class="container"> 
                    <div class="my-4 see_also ">
                        <a href="#" class="see_more">
                            <span>See also ... </span>
                        </a>
                    </div>
            </div>


            <div class="d-flex flex-wrap justify-content-center w-75  partnerses">
        @foreach($employees as $data)
            <div class="d-flex  align-items-center m-3 partners order-1">
                <div class="partner_img">
                    <img src="{{ asset('img/img_partners') }}/{{$data->img_partner}}">
                    <br>
                </div>
                 @if(app()->getLocale() == "en")
                <div class="pl-3 partner_text">
                    <h4 class="partner_name">{{$data->name_en}}</h4>
                    <p class="partner_description">{{$data->min_text_en}}</p>
                     <button class=" p-2 read_more"><a href="{{ asset('en/partner') }}/{{$data->id}}" class="text-white read_more"><span>@lang('main.reade_more')</span> </a></button>
                </div>
                @else
                <div class="pl-3 partner_text">
                    <h4 class="partner_name">{{$data->name_am}}</h4>
                    <p class="partner_description">{{$data->min_text_am}}</p>
                     <button class=" p-2 read_more"><a  href="{{ asset('am/partner') }}/{{$data->id}}" class="read_more text-white"><span>@lang('main.reade_more')</span> </a></button>
                </div>
                @endif

            </div>

            @endforeach
    <!-- more partner  info end-->
@endsection('content')
