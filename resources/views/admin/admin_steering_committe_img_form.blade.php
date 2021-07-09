@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Upload image
                </header>
                <div class="panel-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('admin_steering_committe_img_upload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text"  name='steering_committees_id' value="{{ $tableuploadform }}">
                        <div class="form-group">
                            <label for="img_name">Image name</label>
                            <input type="file" class="form-control" id="img_name"  name="img_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')


