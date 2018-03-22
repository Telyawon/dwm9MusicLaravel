@extends('layouts.layout')
@section('title', 'Insert a product')
@section('content')

<h1>Insert a product</h1>

{!! Form::open(array('url' => '/stock')) !!}
    {{ Form::label('Name : ') }}
    {{ Form::text('name', '', array('required' => 'required')) }}

    {{ Form::label('Description : ') }}
    {{ Form::text('description', '', array('required' => 'required')) }}

    {{ Form::label('Price : ') }}
    {{ Form::number('price', '', array('required' => 'required')) }}

    {{ Form::label('Amount : ') }}
    {{ Form::number('amount', '', array('required' => 'required'))}}
 
    {{ Form::submit('Submit') }}
 
{!! Form::close() !!}
 
@endsection