@extends('layouts.layout')
@section('content')

<h1>Products list</h1>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    @foreach($stocks as $stock)
    <tr>
        <td>{{ $stock->name }}</td>
        <td>{{ $stock->description }}</td>
        <td>{{ $stock->price }}</td>
        <td>{{ $stock->amount }}</td>
        <td>
        {!! Form::open(array('url' => '/edit', 'method' => 'post')) !!}
            {{ Form::hidden('id', $stock->id) }}
            {!! Form::submit('U') !!}
        {!! Form::close() !!}
        </td>
        <td>
        {!! Form::open(['url' => '/delete']) !!}
            {{ Form::hidden('id', $stock->id) }}
            {!! Form::submit('X') !!}
        {!! Form::close() !!}
        </td>
    </tr>
    @endforeach

</table>

@endsection