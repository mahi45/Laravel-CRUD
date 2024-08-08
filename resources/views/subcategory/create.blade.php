@extends('master')
@section('title', "Create Subcategory")
@section('content')
    <div class="w-2/5 m-auto shadow-xl card bg-base-100">
        <div class="card-body">
            <h2 class="text-2xl card-title">Create Subcategory</h2>
            <form action="{{ route('subcategory.store') }}" class="space-y-3" method="POST">
                @csrf
            <div>
                <div class="label">
                    <span class="font-semibold label-text">Category Name</span>
                </div>
                <select class="w-full max-w-xs select select-bordered" name="category_id">
                    <option disabled selected>Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
            </div>
            <div>
                <div class="label">
                    <span class="font-semibold label-text">Subcategory Name</span>
                </div>
                <input type="text" placeholder="Subcategory Name" class="w-full max-w-xs input input-bordered" name="subcategory_name" />
            </div>
            <label class="justify-start cursor-pointer label">
                <span class="mr-3 font-semibold label-text">Active/Inactive</span>
                <input type="checkbox" checked="checked" class="checkbox" name="is_active" />
            </label>
            <div class="flex gap-3">
                <button type="submit" class="w-1/2 px-5 py-2 font-semibold bg-teal-500 rounded-md">Submit</button>

                <a href="{{ route('subcategory.index') }}" class="w-1/2 px-5 py-2 font-semibold text-center bg-orange-500 rounded-md">Back</a>
            </div>

            <div class="card-actions"></div>
        </form>
        </div>
    </div>
@endsection
