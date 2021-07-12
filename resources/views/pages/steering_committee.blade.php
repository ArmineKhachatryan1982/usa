@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/steeringCommittee.css') }}">
@endsection
@section('content')

    <section id="section_index">
        <section class="steering_committee ">

            <h1 class="  mt-5 steering_label d-flex justify-content-center">Steering Committee</h1>
            <div class="steering_text">
                {{ $lng='paragraph_one_'.app()->getLocale() }}
                <div class="my-3 text-justify" id="paragraph_one">
                    {{ $steerings[0]->$lng }}
                </div>
                <div class="my-3 text-justify" id="paragraph_two">
                    {{ $steerings[0]->paragraph_two_en}}
                </div>
            </div>


        </section>
        <section class="steering_image ">
            <div class="all_img">
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
    </section>


@endsection('content')

