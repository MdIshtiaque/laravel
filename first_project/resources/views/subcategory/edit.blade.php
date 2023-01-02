@extends('master')
@section('title', 'SubCategory-Edit-Page')

@section('content')
    <div class="row">

        <div class="col-10 d-flex justify-content-start my-4">
            <a href="{{ route('subcategory.index') }}" class="btn btn-success">Goto Sub Category lists</a>
        </div>
        <div class="col-8 m-auto">


            @if (session('status'))
                <div class="bg-success text-white">
                    {{ session('status') }}
                </div>
            @endif




            <form action="{{ route('subcategory.update', ['subcategory' => $subcategory->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="select">
                    <select class="form-select lg mt-4 mb-4 p-2" name="category_id">
                        <option>Select Category Type</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @if ($category->id == $subcategory->category_id)
                                 selected
                                @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sub-category-name">Item name</label>
                    <input type="text"
                        class="form-control @error('subcategory_name')
                is-invalid
                @enderror "
                        value="{{ $subcategory->name }}" id="subcategory-name" name="subcategory_name"
                        placeholder="Please Provide a Name">
                    @error('subcategory_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input"
                    @if ($subcategory->is_active)
                        checked
                    @endif
                     type="checkbox" id="flexCheckDefault" name="is_active">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active/Inactive
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
@endsection
