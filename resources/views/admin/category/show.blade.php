@extends('layouts.admin')

@section('content')
    <tabel>
        <tr>
            <td>ID</td>
            <td>NAme</td>
            <td>Status</td>
        </tr>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
        </tr>
    </tabel>
@endsection
