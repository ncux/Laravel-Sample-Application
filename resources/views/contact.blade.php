@extends('layouts/app')


@section('content')

    <h1>Contact page</h1>

    {!! Form::open(['action'=>'MessagesController@submit', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'Email address')}}
            {{Form::text('email', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class'=>'form-control'])}}

        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}

    {!! Form::close() !!}
@endsection
