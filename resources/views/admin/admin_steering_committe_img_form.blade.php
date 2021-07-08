@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Updated record
                </header>
                <div class="panel-body">
                    {{--                                        <h1>{{ $steerings }}</h1>--}}
                    @foreach($steerings as $key => $value)

                        {{--                                                {{ $value->id }}--}}
                    @endforeach
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  name='id' value="{{ $value->id }}">
                        <div class="form-group">
                            <label for="id">id</label>
                            <input type="text" class="form-control"  id="id" name="id"  value="{{ $value->id}}">
                        </div>
                        <div class="form-group">
                            <label for="title_am">steering_committees_id </label>
                            <input type="text" class="form-control"  id="steering_committees_id " name="steering_committees_id "  value="{{ $value->steering_committees_id  }}">
                        </div>
                        <div class="form-group">
                            <label for="Image name">Image name</label>
                            <input type="file" class="form-control" id="Image name" name="image_name_file"  value="{{ old('img_name') }}">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')


