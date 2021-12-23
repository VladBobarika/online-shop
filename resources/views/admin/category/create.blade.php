@extends('layouts.admin')
@section('content')

<form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <br>
    <input type="checkbox" name="status" value="1">
    <br>
    <button type="submit" name="send" class="btn-success btn btn-sm">Send</button>
</form>


@endsection()
