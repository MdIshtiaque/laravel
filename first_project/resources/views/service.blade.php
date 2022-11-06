@extends('master')

@section('content')
    <h1>{{ $page_name }}</h1>

    @for ($i = 0; $i < count($services); $i++)
        {{ $services[$i] }}
        <br>
    @endfor
    {{-- @switch($product)
        @case(1)

            @break
        @case(2)

            @break
        @default

    @endswitch --}}

    {{-- @if ($product_count <= 10)
        <h1>Product is reducing.... Please Refill</h1>
    @else
        <h1>Product available : {{ $product_count }}</h1>
    @endif --}}



    @forelse ($product as $key => $product)
        @include('partial.partial')
    @empty
        <p>NO DATA FOUND</p>
    @endforelse
@endsection
