@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Tittle am</th>
                <th scope="col">Tittle en</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->date }}</td>
                    <td>{{ $items->title_text_am }}</td>
                    <td>{{ $items->title_text_en }}</td>
                    <td><a href="{{ asset('admin/admin_news_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_news_and_events_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection(''content'')