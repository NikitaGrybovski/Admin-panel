@extends('layouts.app')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title"><strong> Менеджер категорий </strong></h3>

    </div>

    <div class="box-body">
        <div class="add">
            <a href="addcategory" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Добавить</a>

        </div>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <th>Название категории</th>
                <th>Инструменты</th>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>

                        <td>
                            <form action="{{url('deletecategory/'.$category->id)}}" method="post">
                            @csrf
                            <a href="{{url('editcategory/'.$category->id)}}" title="edit" type="button"
                               class="btn btn-success btn-sm edit btn-flat"><i class="fa fa-edit"></i>Изменить
                            </a>
                            <button class="btn btn-danger btn-sm delete btn-flat" type="submit">
                                <i class="fa fa-trash"></i>Удалить
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
