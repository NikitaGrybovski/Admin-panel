@extends('layouts.app')
@section('content')

<div class="box-header with-border">
    <h3 class="box-title"><strong>Products manage</strong></h3>
    <div class="add">
        <a href="adduser" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-plus"></i>Добавить пользователя
        </a>
    </div>

    <div class="pull-right">

        <form action="{{url('userRole')}}" method="POST" class="form-inline">
            @csrf
        <div class="form-group">
            <label for="">Категории:</label>
            <select class="form-control input-sm" name="role" onChange=submit();>
                <option>Выбрать</option>
                <option value="0">Все</option>
                <option value="admin">admin</option>
                <option value="manager">manager</option>
                <option value="user">user</option>

            </select>
        </div>
        </form>
    </div>
</div>

<div class="box-body">
    @if(count($users ?? '')>0)
        <table class="table table-bordered">
            <thead>
                <th width="20%">Email</th>
                <th>role</th>
                <th>name</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Tools</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><a href="{{url('edituser/'. $user->id)}}" class="btn btn-succes btn-sm edit btn-flat">
                            <i class="fa fa-edit"></i>Edit
                        </a>
                        <a href="{{url('deleteuser/'.$user->id)}}" class="btn btn-danger btn-sm delete btn-flat">
                            <i class="fa fa-trash"></i>Delete
                        </a>
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
