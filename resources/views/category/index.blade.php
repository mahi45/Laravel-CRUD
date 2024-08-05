@extends('master')
@section('title', 'About Page')
@section('content')
    <div class="flex justify-between mb-4">
        <h1 class="mb-4 text-2xl">Categories</h1>
        <a href="{{ route('category.create') }}" class="bg-teal-300 btn">Create Category</a>
    </div>
    <div>
        <div class="overflow-x-auto">
            <table class="table table-md">
              <thead>
                <tr>
                  <th class="text-lg text-black">SL</th>
                  <th class="text-lg text-black">Category Name</th>
                  <th class="text-lg text-black">Status</th>
                  <th class="text-lg text-black">Created</th>
                  <th class="text-lg text-black">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>


                        @if ($category->is_active == 1)
                            Active
                        @else ($category->is_active == 0)
                            Inactive
                        @endif
                    </td>
                    <td>{{ $category->created_at }}</td>
                    <td class="flex gap-5"><span><a href="{{ route('category.edit', ['category' => $category->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a></span><span>
                        <i class="fa-regular fa-trash-can"></i></span></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
@endsection
