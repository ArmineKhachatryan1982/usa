@extends('layouts.adminlayout')
@section('content')
 <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name en</th>
                <th scope="col">Desc en</th>
                <th scope="col">Actione</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->name_en }}</td>
                    <td>{{ $items->des_en }}</td>
                    
                    <td><a href="{{ asset('admin/admin_partnore_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_partnore_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
   @endsection('content')

     