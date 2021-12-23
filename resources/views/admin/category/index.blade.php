@extends('layouts.admin')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Responsive Tables</div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <a class="btn btn-sm btn-success" href="{{ route('admin.category.create') }}">Добавить</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>Brand Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration + (($categories->currentPage() - 1) * $categories->perPage())}}</td>
                            <td>{{$category->id}}</td>
                            <td>{{ $category->name }}</td>
                            <td></td>
                            <td class="">
                                <a href="{{route('admin.category.show', ['category'=>$category->id])}}">Показать</a>
                                <a href="{{route('admin.category.edit', ['category'=>$category])}}">Редактировать</a>
                                <form action="{{route('admin.category.destroy', compact('category')) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" >Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
