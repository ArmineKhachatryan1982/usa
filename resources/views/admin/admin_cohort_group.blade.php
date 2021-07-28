@extends('layouts.adminlayout')
@section('content')
 <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">cohort_group_en</th>
                <th scope="col">cohort_img_name</th>
                <th scope="col">cohort_img_text_en</th>
                <th scope="col">cohort_img_text_am</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{!! $items->cohort_group_en !!}</td>
                    <td>{!! $items->cohort_img_name !!}</td>
                    <td>{!! $items->cohort_img_text_en!!}</td>
                    <td>{!! $items->cohort_img_text_am !!}</td>
                    
                    <td><a href="{{ asset('admin/admin_cohort_group_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_cohort_group_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
   @endsection('content')

     