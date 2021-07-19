 @extends('layouts.adminlayout')
@section('content')
 <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                     Create Partners
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_partnore_add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="date">Neam am</label>
                            <input type="text" class="form-control" id="name_am"  name="name_am" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Neam en</label>
                            <input type="text" class="form-control" id="name_en"  name="name_en" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Mini Text Am</label>
                            <textarea type="text" class="form-control" id="min_text_am"  name="min_text_am" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Mini Text En</label>
                             <textarea type="text" class="form-control" id="min_text_en"  name="min_text_en" required></textarea>
                        </div>


                        <div class="form-group">
                            <label for="date">Desc en</label>
                             <textarea type="text" class="form-control" id="des_en"  name="des_en" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Desc am</label>
                             <textarea type="text" class="form-control" id="des_am"  name="des_am" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraf one en</label>
                             <textarea type="text" class="form-control" id="text_one_en"  name="text_one_en" required></textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf one am</label>
                             <textarea type="text" class="form-control" id="text_one_am"  name="text_one_am" required></textarea>
                        </div>


                         <div class="form-group">
                            <label for="date">Paragraf two en</label>
                             <textarea type="text" class="form-control" id="text_two_en"  name="text_two_en" required></textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf two am</label>
                             <textarea type="text" class="form-control" id="text_two_am"  name="text_two_am" required></textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf tree en</label>
                             <textarea type="text" class="form-control" id="text_three_en"  name="text_three_en" required></textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf tree am</label>
                             <textarea type="text" class="form-control" id="text_tree_am"  name="text_tree_am" required></textarea>
                        </div>

                     
                        

                        <div class="form-group">
                            <label for="date">Picers</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" required></textarea> -->
                            <input type="file"  class="form-control" id="img_partner"  name="img_partner">
                        </div>
                        <div class="form-group">
                            <label for="date">Logo</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" required></textarea> -->
                            <input type="file"  class="form-control" id="compni_logo"  name="compni_logo">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Partners</button>
                    </form>
                </div>
            </section>
        </div>

    </section>
   

@endsection('content')