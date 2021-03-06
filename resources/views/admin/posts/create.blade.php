@extends('layouts.admin')


@section('content')

    <h1>Create Post</h1>

    <div class="row">

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

        <div class="form-group">

            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('category_id','Category:') !!}
            {{--{!! Form::select('category_id',array('1'=>'coding','2'=>'eat','3'=>'traveling'),null, ['class'=>'form-control']) !!}--}}
            {!! Form::select('category_id',[''=>'Choose Options']+$categories,null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">

            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('body','Description:') !!}
            {!! Form::text('body',null, ['class'=>'form-control','row'=>'10']) !!}
        </div>





    <div class="form-group">
            {!! Form::submit('Create Posts', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <div class="row">

    @include('include.form_error')

    </div>

@endsection