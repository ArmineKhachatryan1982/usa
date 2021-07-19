@extends('layouts.adminlayout')
@section('content') 
 <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                     Update Partners
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_partnore_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="date">Neam am</label>
                            <input  type="text" class="form-control" id="name_am"  name="name_am" value="{{$data->name_am}}" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Neam en</label>
                            <input type="text" class="form-control" id="name_en"  name="name_en" value="{{$data->name_en}}" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Mini Text Am</label>
                            <textarea type="text" class="form-control" id="min_text_am"  name="min_text_am" required>{{$data->min_text_am}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Mini Text En</label>
                             <textarea type="text" class="form-control" id="min_text_en"  name="min_text_en" required>{{$data->min_text_en}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="date">Desc en</label>
                             <textarea type="text" class="form-control" id="des_en"  name="des_en" required>{{$data->des_en}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Desc am</label>
                             <textarea type="text" class="form-control" id="des_am"  name="des_am" required>{{$data->des_am}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraf one en</label>
                             <textarea type="text" class="form-control" id="text_one_en"  name="text_one_en" required>{{$data->text_one_en}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf one am</label>
                             <textarea type="text" class="form-control" id="text_one_am"  name="text_one_am" required>{{$data->text_one_am}}</textarea>
                        </div>


                         <div class="form-group">
                            <label for="date">Paragraf two en</label>
                             <textarea type="text" class="form-control" id="text_two_en"  name="text_two_en" required>{{$data->text_two_en}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf two am</label>
                             <textarea type="text" class="form-control" id="text_two_am"  name="text_two_am" required>{{$data->text_two_am}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf tree en</label>
                             <textarea type="text" class="form-control" id="text_three_en"  name="text_three_en" required>{{$data->text_three_en}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf tree am</label>
                             <textarea type="text" class="form-control" id="text_tree_am"  name="text_tree_am" required>{{$data->text_tree_am}}</textarea>
                        </div>

                     
                        

                        <div class="form-group">
                            <label for="date">Picers</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" required></textarea> -->
                            <input type="file"  class="form-control" id="img_partner"  name="img_partner">
                            <img style="width:150px;height:200px" src="{{ asset('img/img_partners') }}/{{$data->img_partner}}">
                        </div>
                        <div class="form-group">
                            <label for="date">Logo</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" required></textarea> -->
                            <input type="file"  class="form-control" id="compni_logo"  name="compni_logo">
                            <img style="width:150px;height:200px" src="{{ asset('img/img_partners') }}/{{$data->compni_logo}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Partners</button>
                    </form>
                </div>
            </section>
        </div>

    </section>
   

@endsection('content')