@extends('layouts.app')


@section('content')
    <h1>Products</h1>
    <ul>
        @foreach ($dresses as $dress_key => $dress_value)
            <li>{{$dress_key.': '.$dress_value}}</li>
        @endforeach
    </ul>
@endsection
