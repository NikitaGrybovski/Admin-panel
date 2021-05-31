@extends('layouts.app')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title">Создание пользователя</h3>

    </div>

    <div class="box-dody">
        <div class="add">
            <a href="/users" class="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Назад
            </a>
        </div>
        <div class="container">
            @include('common.errors')
            <form action="{{url('addusers/')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="task-name" class="col-sm-3">Продукты</label>

                    <div class="col-sm-6">
                        <input type="text" name="name"  class="form-control" placeholder="Имя">
                        <input type="text" name="email"  class="form-control" placeholder="Э-майл">
                        <input type="password" name="password" class="form-control" placeholder="Пароль">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Повторный пароль">
                        <select name="role" class="form-control">
                            <?php
                            $roles = array('admin','manager','user');
                            ?>
                            @foreach($roles as $role)
                                <option value="{{$role}}">
                                    @if($role=='user')@endif
                                {{$role}}</option>
                                @endforeach
                        </select>

                    </div>


                </div>







                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Создать пользователя
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
