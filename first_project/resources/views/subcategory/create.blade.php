@extends('master')
@section('title', 'SubCategory-Create-Page')

@section('content')
    <div class="row">
        <div class="col-8 m-auto">


            @if (session('status'))
                <div class="bg-success text-white">
                    {{ session('status') }}
                </div>
            @endif




            <form action="{{ route('subcategory.store') }}" method="POST">
                @csrf
                <div class="select">
                    <select class="form-select lg mt-4 mb-4 p-2" name="category_id">
                        <option selected>Select Category Type</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sub-category-name">Item name</label>
                    <input type="text"
                        class="form-control @error('subcategory_name')
                is-invalid
                @enderror "
                        id="subcategory-name" name="subcategory_name" placeholder="Please Provide a Name"
                        value="{{ old('subcategory_name') }}">
                    @error('subcategory_name')
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
