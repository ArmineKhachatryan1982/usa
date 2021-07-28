@extends('layouts.layout')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/AlumniAssociation.css') }}">
@endsection

@section('content')
            <section class="alumni_association pt-5">
                <div class="container mt-3">
                @if(app()->getLocale() == "en")
                <h1 class="alumni_label d-flex justify-content-center">{{$data->title_en}}</h1>
                @else
                <h1 class="alumni_label d-flex justify-content-center">{{$data->title_am}}</h1>
                @endif
                <div class="alumni_text text-justify mt-5">
                    @if(app()->getLocale() == "en")
                    {!!$data->text_one_en !!}
                    @else
                    {!! $data->text_one_am !!}
                    @endif
                </div>
                <div class="alumni_text text-justify">  
                    @if(app()->getLocale() == "en")
                    {!! $data->text_two_en !!}
                    @else
                    {!! $data->text_two_am !!}
                    @endif
                </div>
            </div>
            </section>
            <section class="alumni_image ">
                <div class="container">
              
                    <div class="row image_row justify-content-center ">
                       @foreach($image  as $key )
                       <div class=" col-lg-4 col-md-6 col-ms-12 image_col">
                        <img src="{{ asset('img/img_alumini/'.$key->img_url) }}" alt="">
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
    <!-- </section> -->

    @endsection('content')
