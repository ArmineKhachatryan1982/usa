@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Updated record
                </header>
                <div class="panel-body">
{{--                    <h1>{{ $alumnis }}</h1>--}}
                    @foreach($alumnis as $key => $value)

{{--                        {{ $value->id }}--}}
                    @endforeach
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('admin_Alumni_Association_updated') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  name='id' value="{{ $value->id }}">
                        <div class="form-group">
                            <label for="title_en">title_en</label>
                            <input type="text" class="form-control"  id=title_en" name="title_en"  value=" {{ $value->title_en }}">

                        </div>
                        <div class="form-group">
                            <label for="title_am">title_am</label>
                            <input type="text" class="form-control"  id=title_am" name="title_am"  value="{{ $value->title_am }}">

                        </div>
                        <div class="form-group">
                            <label for="text_one_en">text_one_en</label>
                            <textarea  rows="10" class="form-control" id="text_one_en"  name="text_one_en" >{{ $value->text_one_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_one_am">text_one_am</label>
                            <textarea rows="10" class="form-control" id="text_one_am"  name="text_one_am"> {{ $value->text_one_am }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_two_en">text_two_en</label>
                            <textarea rows="10" class="form-control" id="text_two_en"  name="text_two_en"> {{ $value->text_two_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_two_am">text_two_am</label>
                            <textarea rows="10" class="form-control" id="text_two_am"  name="text_two_am">{{ $value->text_two_am }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>









        </div>

    </section>

@endsection('content')
