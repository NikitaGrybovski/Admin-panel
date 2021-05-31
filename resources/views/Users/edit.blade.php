@extends('layouts.app')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title">Изменение пользователя</h3>

    </div>

    <div class="box-dody">
        <div class="add">
            <a href="/users" class="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Назад
            </a>
        </div>
        <div class="container">
            @include('common.errors')
            <form action="{{url('edituser/'.$user->id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">


                    <div class="col-sm-6">
                        <input type="text" name="name"  class="form-control" value="{{$user->name}}">
                        <input type="text" name="email"  class="form-control" value="{{$user->email}}" disabled>
                        <input type="password" name="password" class="form-control" placeholder="пароль">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="пароль">

                        <select name="role" class="form-control"
                            @if(Auth::user()->role!='admin')
                                disabled
                            @endif
                        >
                            <?php
                            $roles = array('admin','manager','user');
                            ?>
                            @foreach($roles as $role)
                                <option value="{{$role}}">
                                    @if($role==$user->role) Текущая роль: @endif
                               {{$role}}</option>
                                @endforeach
                        </select>

                    </div>


                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Изменить пользователя
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
