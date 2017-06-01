@extends('layouts.admin')


@section('content')

    <h1>Edit Post</h1>


    <div class="row">
    
        {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
        <div class="col-sm-3">
            <img style="width:100%"; src="{{$post->photo?$post->photo->file:'http://placehold.it/400x400'}}" alt="">
        </div>
        
        <div class="col-sm-9">
                <div class="form-group">
        
                    {!! Form::label('title','Title:') !!}
                    {!! Form::text('title',null, ['class'=>'form-control']) !!}
                </div>
        
                <div class="form-group">
        
                    {!! Form::label('category_id','Category:') !!}
                    {{--{!! Form::select('category_id',array('1'=>'coding','2'=>'eat','3'=>'traveling'),null, ['class'=>'form-control']) !!}--}}
                    {!! Form::select('category_id',$categories,null, ['class'=>'form-control']) !!}
                </div>
        
        
                <div class="form-group">
        
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>
        
                <div class="form-group">
        
                    {!! Form::label('body','Description:') !!}
                    {!! Form::text('body',null, ['class'=>'form-control']) !!}
                </div>

        </div>

                <div class="row">
                        <div class="form-group ">
                            {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-2']) !!}
                        </div>



                {!! Form::close() !!}

                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

                        <div class="form-group ">
                            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-2']) !!}
                        </div>
                </div>

                {!! Form::close() !!}
    </div>
    <div class="row">

        @include('include.form_error')

    </div>

@endsection