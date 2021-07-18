@extends('layouts.layout')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/AlumniAssociation.css') }}">
@endsection

@section('content')

<!-- 'title_en',
        'title_am',
        'text_one_en',
        'text_one_am',
        'text_two_en',
        'text_two_am', -->

        <section id="section_index">
            <section class="alumni_association ">
                @if(app()->getLocale() == "en")
                <h1 class="alumni_label d-flex justify-content-center">{{$data->title_en}}</h1>
                @else
                <h1 class="alumni_label d-flex justify-content-center">{{$data->title_am}}</h1>
                @endif
                <div class="alumni_text">
                    @if(app()->getLocale() == "en")
                    {{$data->text_one_en}}
                    @else
                    {{$data->text_one_am}}
                    @endif
                    <br>
                    <br>
                    @if(app()->getLocale() == "en")
                    {{$data->text_two_en}}
                    @else
                    {{$data->text_two_am}}
                    @endif
                </div>
            </section>
            <section class="alumni_image ">
                <div class="all_img">
                    <div class="row image_row justify-content-center ">
                       @foreach($image  as $key )
                       <div class=" col-lg-4 col-md-6 col-ms-12 image_col">
                        <img src="{{ asset('img/img_alumini/'.$key->img_url) }}" alt="">
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
    </section>

    @endsection('content')
