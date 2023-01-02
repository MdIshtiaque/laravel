@extends('master')
@section('title', 'Category-Index-Page')

@section('content')
    <div class="row">
        <div class="col-10 d-flex justify-content-end my-4">
            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>
        <div class="col-8 m-auto">
            @if (session('status'))
                <div class="bg-success text-white">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Category slug</th>
                        <th scope="col">created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name}}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                class="btn btn-success">Edit</a>

                                <form action="{{ route('category.destroy', ['category'=> $category->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
