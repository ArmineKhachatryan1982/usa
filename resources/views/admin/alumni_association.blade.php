@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title_en</th>
                <th scope="col">title_am</th>
                <th scope="col">text_one_en</th>
                <th scope="col">text_one_am</th>
                <th scope="col">text_two_en</th>
                <th scope="col">text_two_am</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnis as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->title_en }}</td>
                    <td>{{ $items->title_am }}</td>
                    <td>{{ $items->text_one_en }}</td>
                    <td>{{ $items->text_one_am }}</td>
                    <td>{{ $items->text_two_en }}</td>
                    <td>{{ $items->text_two_am }}</td>
                    <td><a href="{{ route('admin_Alumni_Association_edit',['alumni_Id'=>$items->id]) }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a></td>
                </tr>
      @endforeach
            </tbody>
        </table>
    </section>



@endsection(''content'')
