@extends('layout')
@section('title',"First Title !")
<style>
    .blog{
        margin-top:20px;
        margin:auto;
        border: #0b2e13 solid 1px;
        border-radius: 8px;
        max-width: 1080px;
        min-width: 640px;
        text-align: center;
        padding-top:15px;
    }
</style>
@section('content')
    <div class="blog">
        {!! Form::open(['action' => 'UserController@home']) !!}
            <span> Login : {!! Form::text('username','',['id' => 'username']) !!}</span>
            <span> Password : {!! Form::password('password') !!}</span>
            {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </div>
@endsection