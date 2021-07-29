@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/courses4.css') }}">
@endsection

@section('content')

    <section id="section_index">
        <section id="course_first">

            

            <div class=" container">
                <div class="gradient_area ">
                    <div class="gradient_text p-2">
                     @if(app()->getLocale() == "en")
                    {!! $Title->training_title_en !!}
                    @else
                    {!!$Title->training_title_am!!}
                    @endif
                    </div>
                </div>


            </div>



        </section>
        <section id="course_second">
            <!-- part 1 start -->
             @foreach($employees as $key=>$data)
            @if($key % 2)
            <section class="about_courses with_image">
                <div class="d-flex flex-wrap container all_cours">
                    <div class=" d-flex nkar_text " >
                        <div class=" order-2">
                            <img class=" image_size" src="{{ asset('img/img_treyning')}}/{{$data->imagepath}}" alt="">
                             @if(app()->getLocale() == "en")
                            <div class="text_image">
                              {!! $data->img_text_en !!} 
                            </div>
                             @else
                             <div class="text_image">
                               {!! $data->img_text_am !!}
                            </div>
                            @endif
                        </div>
                        <div class="order-1 about_courseOneText">
                         
                             @if(app()->getLocale() == "en")
                            <h1>{!! $data->title_en !!}</h1>
                            <div> {!! $data->text_one_en !!}</div>
                            <div class="mt-2">{!! $data->text_two_en !!}</div>
                            @else
                            <h1>{!! $data->title_am !!}</h1>
                            <div>{!! $data->text_one_am !!}</div>
                            <div class="mt-2">{!! $data->text_two_am !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
           
            @else
            <section class="about_courses">
                 <div class="d-flex flex-wrap container all_cours">
                    <div class=" d-flex about_courseOne">
                        <div class="order-1 course_image">
                            <img class="image_size" src="{{ asset('img/img_treyning')}}/{{$data->imagepath}}" alt="">
                            @if(app()->getLocale() == "en")
                            <div class="text_image">
                               {!! $data->img_text_en !!} 
                            </div>
                            @else
                            <div class="text_image">
                               {!! $data->img_text_am !!}
                            </div>
                            @endif

                        </div>
                        <div class=" order-2 about_courseOneText">
                            @if(app()->getLocale() == "en")
                            <h1>{!! $data->title_en !!}</h1>
                            <div>{!! $data->text_one_en !!}</div>
                            <div class="mt-2">{!! $data->text_two_en !!}</div>
                            @else
                            <h1>{!! $data->title_am !!}</h1>
                            <div>{!! $data->text_one_am !!}</div>
                            <div class="mt-2">{!! $data->text_two_am !!}</div>
                            @endif

                        </div>
                    </div>
                </div>
            </section>
            @endif 
              
             @endforeach
           


        </section>





    </section>
    <br>
 {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $employees->links() !!}
        </div>


@endsection('content')
