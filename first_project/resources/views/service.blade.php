@extends('master')

@section('content')
    <h1>{{ $page_name }}</h1>

    @for ($i = 0; $i < 4; $i++)
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

    @if ($product_count <= 10)
        <h1>Product is reducing.... Please Refill</h1>
    @else
        <h1>Product available : {{ $product_count }}</h1>
    @endif

    @empty($product)
        <p>NO DATA FOUND</p>
    @endempty
@endsection
