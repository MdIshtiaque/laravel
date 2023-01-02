@extends('master')
@section('title', 'SubCategory-Index-Page')

@section('content')
    <div class="row">
        <div class="col-10 d-flex justify-content-end my-4">
            <a href="{{ route('subcategory.create') }}" class="btn btn-success">Create Sub Category</a>
        </div>
        <div class="col-8 m-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Subcategory name</th>
                        <th scope="col">created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <th scope="row">{{ $subcategory->id }}</th>
                            <td>{{ $subcategory->category->name}}</td>
                            <td>{{ $subcategory->name }}</td>
                            <td>{{ $subcategory->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
