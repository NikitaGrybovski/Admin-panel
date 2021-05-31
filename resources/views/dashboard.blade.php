@extends('layouts.app')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title"><strong>Панель администратора</strong></h3>
    </div>
        <div class="box-body" style="min-height:450px">
            Добро пожаловать в панель администратора!
            <div><br>
                @can('isAdmin')
                    <div class="btn btn-warning btn-lg">
                        Вы вошли как админ
                    </div>
                @elsecan('isManager')
                     <div class="btn btn-success btn-lg">
                         Вы вошли как менеджер
                     </div>
                @elsecan('isUser')
                    <div class="btn btn-primary btn-lg">
                        Вы вошли как пользователь
                    </div>
                @else
                    <div class="btn btn-danger btn-lg">
                        Вы не авторизированы
                    </div>
                @endcan

            </div>
        </div>

@endsection
