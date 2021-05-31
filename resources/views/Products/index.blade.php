@extends('layouts.app')
@section('content')

<div class="box-header with-border">
    <h3 class="box-title"><strong>Products manage</strong></h3>
    <div class="add">
        <a href="addproduct" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-plus"></i>Создать продукт
        </a>
    </div>

    <div class="pull-right">

        <form action="{{url('productBycategory')}}" method="POST" class="form-inline">
            @csrf
        <div class="form-group">
            <label for="">Категории:</label>
            <select class="form-control input-sm" name="category id" onChange=submit();>
                <option>Выбрать</option>
                <option value="0">Все</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        </form>
    </div>
</div>

<div class="box-body">
    @if(count($products ?? '')>0)
        <table class="table table-bordered">
            <thead>
                <th width="20%">Name</th>
                <th>Photo</th>
                <th>Category</th>
                <th>Price</th>
                <th>Tools</th>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td><img src="{{asset('images/'.$product->photo)}}" height="30px" width="30px" alt=""></td>

                    <td>{{$product->category->name}}</td>
                    <td>&euro; {{$product->price}}</td>
                    <td><a href="{{url('editproduct/'. $product->id)}}" class="btn btn-succes btn-sm edit btn-flat">
                            <i class="fa fa-edit"></i>Edit
                        </a>
                        <a href="{{url('deleteproduct/'.$product->id)}}" class="btn btn-danger btn-sm delete btn-flat">
                            <i class="fa fa-trash"></i>Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td colspan=4>
                        {{$product->description}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <p>Data not found</p>
    @endif
</div>
@endsection
