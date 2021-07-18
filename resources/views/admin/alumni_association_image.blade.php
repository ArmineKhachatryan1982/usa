@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                   Insert Image
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_Alumni_Association_image_insert') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="image">Select_Img</label>
                            <input type="file" class="form-control"  id="image" name="image"  value="" required>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Updated record
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_Alumni_Association_image_insert') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="image">Select_Img</label>
                            <input type="file" class="form-control"  id="image" name="image"  value="">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')
