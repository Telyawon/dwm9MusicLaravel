@extends('layouts.layout')
@section('title', 'Our products')
@section('content')

<h1>Products list</h1>
<div class="tableContainer">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price ($)</th>
            <th>Amount</th>
            <th>Update</th>
            <th>Delete Row</th>
            <th>Sell one</th>
            <th>Buy one</th>
        </tr>

        @foreach($stocks as $stock)
        <tr>
            <td>{{ $stock->name }}</td>
            <td>{{ $stock->description }}</td>
            <td>{{ $stock->price }}</td>
            <td>{{ $stock->amount }}</td>

            {{--  Update button  --}}
            <td>
            {!! Form::open(array('url' => '/edit', 'method' => 'post')) !!}
                {{ Form::hidden('id', $stock->id) }}
                {!! Form::submit('U') !!}
            {!! Form::close() !!}
            </td>

            {{--  Delete button  --}}
            <td>
            {!! Form::open(['url' => '/delete']) !!}
                {{ Form::hidden('id', $stock->id) }}
                {!! Form::submit('X') !!}
            {!! Form::close() !!}
            </td>

            {{--  Sell One button  --}}
            <td>
            {!! Form::open(['url' => '/increment']) !!}
                {{ Form::hidden('id', $stock->id) }}
                {!! Form::submit('+') !!}
            {!! Form::close() !!}
            </td>

            {{--  Buy One button  --}}
            <td>
            {!! Form::open(['url' => '/decrement']) !!}
                {{ Form::hidden('id', $stock->id) }}
                {!! Form::submit('-') !!}
            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection