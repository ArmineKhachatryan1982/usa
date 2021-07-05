@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row info_map">
            <div class="col-md-6  info_side">
                <h1>@lang('main.contacts')</h1>

                 <div class="mb-3">
                    <input type="text"  name='name' class="form-control invalid" id="exampleFormControlInput1"
                        placeholder="@lang('main.name_surname')">
                </div>



                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@lang('main.email')">
                </div>



                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="@lang('main.message')"></textarea>
                </div>
                <input class="btn btn_send" type="submit" value="Send">


            </div>
            
            <div class="col-6 map-side">
                <?php echo $data->map_url; ?>
            </div>
           
        </div>
    </div>
@endsection('content')
