@extends('master')
@section('title')
    {{ $page_name }}
@endsection
@section('content')
    <h1>{{ $page_name }}</h1>
    <p>{{ $name }}</p>

    @include('partial.db_table')

@endsection
