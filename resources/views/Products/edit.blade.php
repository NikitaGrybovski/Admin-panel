@extends('layouts.app')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title">Изменение продукта</h3>

    </div>

    <div class="box-dody">
        <div class="add">
            <a href="/productlist" class="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Назад
            </a>
        </div>
        <div class="container">
            @include('common.errors')
            <form action="{{url('editproduct/'.$product->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="task-name" class="col-sm-3">Продукты</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="category-name" class="form-control" value="{{$product->name}}">
                        <input type="number" name="price" id="category-name" class="form-control" value="{{$product->price}}">
                        <textarea name="description" id="" cols="30" rows="5" >{{$product->description}}</textarea>
                    </div>


                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    @if($category->id==$product->category_id)
                                        selected
                                        @endif
                                    >{{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        <label for="">Старая картинка</label>
                        <img src="{{asset('images/'.$product->photo)}}" alt="" width="30px" height="30px">
                        <input type="file" name="image" id="image">
                    </div>
                </div>






                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Изменить продукт
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
