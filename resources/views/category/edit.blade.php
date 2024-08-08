@extends('master')
@section('title', "Edit Category")
@section('content')
    <div class="w-2/5 m-auto shadow-xl card bg-base-100">
        <div class="card-body">
            <div class="flex justify-between">
                <h2 class="text-2xl card-title">Create Category</h2>
                <a href="{{ route('category.index') }}" class="px-3 py-2 rounded-md bg-amber-300">Lists</a>
            </div>
            <form action="{{ route('category.update', $category->id) }}" method="POST" class="space-y-3" >
                @csrf
                @method('PUT')
            <div>
                <div class="label">
                    <span class="font-semibold label-text">Category Name</span>
                </div>
                <input type="text" placeholder="Category Name" class="w-full max-w-xs input input-bordered @error('category_name')
                    is-invalid
                @enderror" name="category_name" value={{ $category->name }} />
                @error('category_name')
                    <span class="text-red-500 invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <label class="justify-start cursor-pointer label">
                <span class="mr-3 font-semibold label-text">Active/Inactive</span>
                <input type="checkbox" class="checkbox" name="is_active" @if($category->is_active == 1) checked @endif />
            </label>
            <div class="flex gap-3">
                <button type="submit" class="w-1/2 px-5 py-2 font-semibold bg-teal-500 rounded-md">Update Category</button>
                <a href="{{ route('category.index') }}" class="w-1/2 px-5 py-2 font-semibold text-center bg-orange-500 rounded-md">Back</a>
            </div>
            <div class="card-actions"></div>
        </form>
        </div>
    </div>
@endsection
