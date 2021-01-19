@extends('layouts.app')


@section('content')
    <h1>Products</h1>
    {{-- collection version --}}
    <h3>Collection version</h3>
    <ul>
        @foreach ($dresses_collection as $dress_key => $dress_value)
            <h3>Row of dresses table</h3>
            <li>
                <p>{{$dress_value->size}}</p>
                <p>{{$dress_value->color}}</p>
                <p>{{$dress_value->gender}}</p>
                <p>{{$dress_value->type}}</p>
            </li>
        @endforeach
    </ul>

    {{-- array version --}}
    <h2>Array version</h2>
    <ul>
        @foreach ($dresses_array as $dress_array)
            <h3>Row of dresses table</h3>
            <li>
            @foreach ($dress_array as $key => $value)
                    <p>{{$key.': '.$value}}</p>
            @endforeach
        </li>
        @endforeach
    </ul>

@endsection
