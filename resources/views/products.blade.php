@extends('layouts.app')


@section('content')
    <h1>Products</h1>
    <ul>
        @foreach ($dresses as $dress_value)
            <h1>Row of dresses table</h1>
            <li>
                <p>{{$dress_value->type}}</p>
                <p>{{$dress_value->gender}}</p>
                <p>{{$dress_value->size}}</p>
                <p>{{$dress_value->color}}</p>
            </li>
        @endforeach
    </ul>
@endsection
