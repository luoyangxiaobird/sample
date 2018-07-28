@extends('layouts.default')
@section('title','注册')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>注册开始</h1>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form method="post" action="{{route('users.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}">
                    </div>

                    <div class="form-group">
                        <label>确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{old('password-confirmation')}}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
    <!--//全局辅助函数old来帮助我们在blade中显示旧输入数据。-->


@stop