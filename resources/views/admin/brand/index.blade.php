@extends('layouts.admin')
@section('content')

    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Basic Table</div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <a class="btn btn-sm btn-success" href="{{ route('admin.brand.create') }}">Добавить</a>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Last Name</th>
                    <th> </th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td>{{$loop->iteration + (($brands->currentPage()-1)*$brands ->perPage())}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->id}}</td>
                    <td>
                        <a href="{{ route('admin.brand.show', ['brand' => $brand->id]) }}">Показаь</a>
                        <a href="{{ route('admin.brand.edit', ['brand' => $brand->id]) }}">Редактировать</a>
                        <form action="{{ route('admin.brand.destroy', compact('brand')) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" >Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
            {!! $brands->links() !!}
        </div>
    </div>

@endsection
