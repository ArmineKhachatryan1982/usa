@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Ctreate Training
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_training_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="id"  name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="date">Img</label>
                            <input type="file" class="form-control" id="imagepath"  name="imagepath">
                            <img src="{{ asset('img/img_treyning') }}/{{$data->imagepath}} ">
                        </div>
                       
                        <div class="form-group">
                            <label for="img_text_am">Img text am</label>
                            <input type="img_text_am" class="form-control" id="img_text_am"  name="img_text_am" value="{{$data->img_text_am}}" required>
                        </div>

                        <div class="form-group">
                            <label for="img_text_en">Img text en</label>
                            <input type="img_text_en" class="form-control" id="img_text_en"  name="img_text_en"  value="{{$data->img_text_en}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="title_en">Title en</label>
                            <textarea rows="5" class="form-control" id="title_en"  name="title_en" required>{{$data->title_en}}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="title_am">Title am</label>
                            <textarea rows="5" class="form-control" id="title_am"  name="title_am" required>{{$data->title_en}}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_one_am">Paragraph one am</label>
                            <textarea rows="5" class="form-control" id="text_one_am"  name="text_one_am" required>{{$data->text_one_am}}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_one_en">Paragraph one en</label>
                            <textarea rows="5" class="form-control" id="text_one_en"  name="text_one_en" required>{{$data->text_one_en}}</textarea> 
                        </div>

                         <div class="form-group">
                            <label for="text_two_am">Paragraph two am</label>
                            <textarea rows="5" class="form-control" id="text_two_am"  name="text_two_am" required>{{$data->text_two_am}}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_two_en">Paragraph two en</label>
                            <textarea rows="5" class="form-control" id="text_two_en"  name="text_two_en" required>{{$data->text_two_en}}</textarea> 
                        </div>

                        <button type="submit" class="btn btn-primary">Update Training</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')
