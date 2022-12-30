@extends('master')
@section('title', 'Category-Create-Page')

@section('content')
    <div class="row">
        <div class="col-8 m-auto">


            @if (session('status'))
                <div class="bg-success text-white">
                    {{ session('status') }}
                </div>
            @endif


            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="category-name">Category name</label>
                    <input type="text"
                        class="form-control @error('category_name')
                is-invalid
                @enderror "
                        id="category-name" name="category_name" placeholder="Please Provide Category Name"
                         value="{{ old('category_name') }}">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="is_active">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active/Inactive
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
@endsection
