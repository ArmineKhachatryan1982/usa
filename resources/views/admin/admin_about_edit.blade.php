@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                     About Page
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_about_update') }}" enctype="multipart/form-data">
                        @csrf
                         <input type="hidden" class="form-control" id="date"  name="id" value="{{$data->id}}" required>
                        <div class="form-group">
                            <label for="date">Paragraph One Am</label>
                           
                            <textarea type="text" class="form-control" id="paragraph_one_am"  name="paragraph_one_am" required>{{$data->paragraph_one_am}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraph One En</label>
                             <textarea type="text" class="form-control" id="paragraph_one_en"  name="paragraph_one_en" required>{{$data->paragraph_one_en}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraph Two En</label>
                        <textarea type="text" class="form-control" id="paragraph_two_en"  name="paragraph_two_en" required>{{$data->paragraph_two_en}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraph Two Am</label>
                            <textarea type="text" class="form-control" id="paragraph_two_am"  name="paragraph_two_am" required>{{$data->paragraph_two_am}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraph Three Am</label>
                           <textarea type="text" class="form-control" id="paragraph_tree_am"  name="paragraph_tree_am" required>{{$data->paragraph_tree_am}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraph Three En</label>
                           <textarea type="text" class="form-control" id="paragraph_tree_en"  name="paragraph_tree_en" required>{{$data->paragraph_tree_en}}</textarea>
                        </div>

                       
                        <div class="form-group">
                            <label for="img_one">Title am</label>
                            <input type="file" class="form-control" id="img_one"  name="img_one"  >
                            <img src="{{ asset('img/about') }}/{{$data->img_one}}">
                        </div>
                        <div class="form-group">
                            <label for="img_two">Title am</label>
                            <input type="file" class="form-control" id="img_two"  name="img_two"  >
                            <img src="{{ asset('img/about') }}/{{$data->img_two}}">
                        </div>
                        <div class="form-group">
                            <label for="img_tree">Title am</label>
                            <input type="file" class="form-control" id="img_tree"  name="img_tree"  >
                            <img src="{{ asset('img/about') }}/{{$data->img_tree}}">
                        </div>
                          <div class="form-group">
                            <label for="img_tree">Title am</label>
                            <input type="file" class="form-control" id="img_fore"  name="img_fore"  >
                            <img src="{{ asset('img/about') }}/{{$data->img_fore}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update About</button>
                    </form>
                </div>
                
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
             <script>    
          
                 CKEDITOR.replace('paragraph_one_am')
                 CKEDITOR.replace('paragraph_one_en')
                 CKEDITOR.replace('paragraph_two_en')
                 CKEDITOR.replace('paragraph_two_am')
                 CKEDITOR.replace('paragraph_tree_am')
                 CKEDITOR.replace('paragraph_tree_en')
             </script>
        </div>

    </section>

@endsection('content')


       <!-- 
        
        'img_one',
        'img_two',
        'img_tree',
        'img_fore', -->