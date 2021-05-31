@extends('layouts.app')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title">Создание продукта</h3>

    </div>

    <div class="box-dody">
        <div class="add">
            <a href="/productlist" class="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Назад
            </a>
        </div>
        <div class="container">
            @include('common.errors')
            <form action="{{url('addproduct/')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="task-name" class="col-sm-3">Продукты</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="category-name" class="form-control" value="Модель">
                        <input type="number" name="price" id="category-name" class="form-control" placeholder="Цена">
                        <textarea name="description" id="" cols="30" rows="5" placeholder="Описание"></textarea>
                    </div>


                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">

                                    >{{$category->name}}
                                </option>
                            @endforeach
                        </select>

                        <input type="file" name="image" id="image">
                    </div>
                </div>






                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Создать продукт
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
