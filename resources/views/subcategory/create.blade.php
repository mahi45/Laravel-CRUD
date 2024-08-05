@extends('master')
@section('title', "Create Subcategory")
@section('content')
    <div class="card bg-base-100 w-2/5 shadow-xl m-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl">Create Subcategory</h2>
            <form action="" class="space-y-3" method="POST">
            <div>
                <div class="label">
                    <span class="label-text font-semibold">Category Name</span>
                </div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Select Category</option>
                    <option>Han Solo</option>
                    <option>Greedo</option>
                    </select>
            </div>
            <div>
                <div class="label">
                    <span class="label-text font-semibold">Subcategory Name</span>
                </div>
                <input type="text" placeholder="Category Name" class="input input-bordered w-full max-w-xs" />
            </div>
            <label class="label cursor-pointer justify-start">
                <span class="label-text mr-3 font-semibold">Active/Inactive</span>
                <input type="checkbox" checked="checked" class="checkbox" />
            </label>
            <button type="submit" class="bg-teal-500 px-5 py-2 rounded-md font-semibold w-full">Submit</button>
            <div class="card-actions"></div>
        </form>
        </div>
    </div>
@endsection
