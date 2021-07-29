<footer>
    <div class="footer_header">
        <div class="w-100  footer_img">
            <div class="d-flex flex-wrap pt-5 container">
<!-- 'logo_name','','','','text_en','status' -->
                <div class="w-50 px-5 footer_contact_news">
                    <div id="logo"><img id="logo" src="{{ asset('img/img_header') }}/{{$Footer->logo_name}}"></div> 
                      @if(app()->getLocale() == "en")
                      <div class="text-white">{!!$Footer->text_en!!}</div>
                      @else
                      <div class="text-white">{!!$Footer->text_am!!}</div>
                      @endif
                       
                </div>
                <div class="d-flex flex-column    px-3 footer_contact_news">
                    <h3 class="text-white">@lang('main.navigation')</h3>
                    <a class=" text-white mt-4" href="{{ asset( app()->getLocale().'/about') }}">@lang('main.about_us')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/our_partners') }}">@lang('main.our_partners')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/training_program') }}">@lang('main.training_programs')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/news&media') }}">@lang('main.news_media')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/cohorts') }}">@lang('main.cohorts')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/steeringcommittee') }}">@lang('main.steering_committee')</a>
                    <a class=" text-white" href="{{ asset(app()->getLocale().'/aluminiassciation') }}">@lang('main.alumni_association')</a>

                    <a class=" text-white" href="{{ asset(app()->getLocale().'/contactus') }}">@lang('main.phone')</a>
                </div>
                <div class=" d-flex flex-column  w-25 pt-5 text-white  footer_contact_news">
                    <a href="tel:{!!$Footer->phone!!}"  class="d-flex  mt-4  text-white"><i class="fa fa-phone mr-3"></i>{!!$Footer->phone!!}</a>
                    <a href="#" class="p-1  text-white"><i class="fa fa-envelope mr-3"></i>{!!$Footer->email!!}</a>
                </div>
            </div>
        </div>
    </div>
    <div class=" d-flex justify-content-center text-center p-2 footer_bottom"><p class="mx-1">All rights reserved by </p><span ><a href="https://web-ex.tech/">WebEx Technologies</a></span></div>

</footer>