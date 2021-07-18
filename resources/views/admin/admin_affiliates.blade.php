@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                     Create Affiliates
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_affiliates_add') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="date">Text Am</label>
                            <textarea type="text" class="form-control" id="text_am"  name="text_am" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Text En</label>
                             <textarea type="text" class="form-control" id="text_en"  name="text_en" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Logo</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" required></textarea> -->
                            <input type="file"  class="form-control" id="img"  name="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Affiliates</button>
                    </form>
                </div>
            </section>
        </div>

    </section>
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Text Am</th>
                <th scope="col">Text En</th>
                <th scope="col">Actione</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->text_am }}</td>
                    <td>{{ $items->text_en }}</td>
                    
                    <td><a href="{{ asset('admin/admin_affiliates_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_affiliates_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection('content')

       <!-- 
        
        'img_one',
        'img_two',
        'img_tree',
        'img_fore', -->