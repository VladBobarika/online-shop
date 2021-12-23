@extends('layouts.admin')
@section('content')

<form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <br>
    <input type="file" name="logo">
    <br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="checkbox" name="status" value="1">
    <br>
    <input type="text" name="creation_year">
    <br>
    <button type="submit" name="send" class="btn-success btn btn-sm">Send</button>
</form>

@endsection()
