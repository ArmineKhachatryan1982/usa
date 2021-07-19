@extends('layouts.adminlayout')
@section('content')
<section class="wrapper">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                Update Title
            </header>
                 <!-- '',
        '',
        'training_title_en',
        'training_title_am', -->
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('admin_title_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" id="date"  name="id" value="{{$data->id}}" required>
                <div class="form-group">
                    <label for="home_title_en">Home Tittle EN</label>
                    <textarea rows="5" class="form-control" id="home_title_en"  name="home_title_en"
                    >{{$data->home_title_en}}</textarea required> 
                </div>
                <div class="form-group">
                    <label for="home_title_am">Home Tittle AM</label>
                    <textarea rows="5" class="form-control" id="home_title_am"  name="home_title_am"
                    >{{$data->home_title_am}}</textarea required> 
                </div>
                <div class="form-group">
                    <label for="training_title_en">Training Tittle en</label>
                    <textarea rows="5" class="form-control" id="training_title_en"  name="training_title_en"
                    >{{$data->training_title_en}}</textarea required> 
                </div>
                <div class="form-group">
                    <label for="training_title_am">Training Tittle am</label>
                    <textarea rows="5" class="form-control" id="training_title_am"  name="training_title_am"
                    >{{$data->training_title_am}}</textarea required> 
                </div>
                <button type="submit" class="btn btn-primary"> Update Title</button>
            </form>
        </div>
    </section>
</div>

</section>

@endsection('content')

