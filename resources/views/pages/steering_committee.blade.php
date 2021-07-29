@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/steeringCommittee.css') }}">
@endsection
@section('content')


        <section class="steering_committee pt-3">
            <div class="container">
                <h1 class="  mt-5 steering_label d-flex justify-content-center">Steering Committee</h1>
                <div class="steering_text pt-3">
                    
                    <div class="my-3 text-justify" id="paragraph_one">
                       @if(app()->getLocale() == "en")
                        {!!$data->paragraph_two_en!!}
                        @else
                        {!!$data->paragraph_two_am!!}
                        @endif
                    </div>
                    <div class="my-3 text-justify" id="paragraph_two">
                       @if(app()->getLocale() == "en")
                        {!!$data->paragraph_two_en!!}
                        @else
                        {!!$data->paragraph_two_am!!}
                        @endif
                       
                    </div>
                </div>

        </div>
        </section>
        <section class="steering_image ">
            <div class="container">
                <div class="row image_row justify-content-center ">
{{--uploaded images from steering_imgs table start --}}
                    @foreach($steerings_img  as $key )
                        <div class=" col-lg-4 col-md-6 col-ms-12 image_col">
                            <img src="{{ asset('img/img_steering/'.$key->img_name) }}"  alt="">
                        </div>
                    @endforeach
 {{--uploaded images from steering_imgs table end --}}
                </div>
            </div>
        </section>
    


@endsection('content')

