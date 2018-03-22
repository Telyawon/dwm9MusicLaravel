@extends('layouts.layout')
@section('title', 'Update a product')
@section('content')

<h1>Update a product</h1>

{!! Form::open(array('url' => '/update', 'method' => 'post')) !!}
   {{ Form::hidden('id', $stock->id) }}

   {{Form::label('Name : ')}}
   {{Form::text('name', $stock->name)}}

   {{Form::label('Description : ')}}
   {{Form::textarea('description', $stock->description)}}

   {{Form::label('Price : ')}}
   {{Form::text('price', $stock->price)}}

   {{Form::label('Amount : ')}}
   {{Form::text('amount', $stock->amount)}}

   {{Form::submit('Submit')}}
{!! Form::close() !!}

