@extends('layouts.admin');

@section('content')

    <h1>Create Post</h1>

    <div class="row">

        {!! Form::open(['method'=>'post', 'action'=>'AdminPostsController@store','file'=>true]) !!}
            {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('title','Title') !!}
            {!! form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! form::label('category_id','Category') !!}
                {!! form::select('category_id', array(1=>'PHP', 0=>'Javascript'), null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! form::label('photo_id','File') !!}
                {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! form::label('body','Description') !!}
                {!! form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
            </div>

            <div class ="form-group">
            {!! form::submit() !!}
            {!! form::close('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>
    </div>

    <div class="row">

        @include('includes.form_errors')


    </div>

@stop
