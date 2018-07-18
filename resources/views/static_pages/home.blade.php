@extends('layouts.default')
@section('content')
   <div class="jumbotron">
       <h1>Hello,Laravel</h1>
       <p class="lead">
           你现在所看到的是<a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel 入门教程主页</a>示例项目主页
       </p>
       <p>
           一切，将从现在开始
       </p>
       <p>
           <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
       </p>
   </div>
@stop
@section('title','主页')