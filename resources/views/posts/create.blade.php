@extends('main')
@section('title', 'new post')
@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2"  >
                <h1>Create New Post</h1>
                {!! Form::open(['route'=>'posts.store', 'data-parsley-validate' => '']) !!}
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => 255)) }}

                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, ['class' => 'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255']) }}

                    {{ Form::label('body', 'Body:') }}
                    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
                    {{ Form::submit('Create', array('class' => 'btn btn-success btn-block btn-lg', 'style' => 'margin-top: 30px; margin-bottom: 30px;')) }}
                {!! Form::close() !!}
            </div>
        </div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
