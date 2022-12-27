@extends('master')
@section('title')
    {{ $page_name }}
@endsection
@section('content')
<h1>{{ $page_name }}</h1>
<p>contact us: {{ $mobile }}</p>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Active</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    <tbody>

        @foreach ($category as $categories)
        <tr>
            <th scope="row">{{ $categories->id }}</th>
            <td>{{ $categories->name }}</td>
            <td>{{ $categories->slug }}</td>
            <td>{{ $categories->is_active }}</td>
            <td>{{ $categories->created_at }}</td>
          </tr>
        @endforeach


    </tbody>
  </table>
@endsection


