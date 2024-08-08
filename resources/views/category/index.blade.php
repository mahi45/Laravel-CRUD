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
                <tr class="">
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
                    <td class="flex gap-2">
                        <span>
                            <a href="{{ route('category.edit', ['category' => $category->id]) }}">
                            <button type="submit" class="px-5 py-2 text-white bg-green-500 rounded-md"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>
                        </span>
                        <span>
                            <a href="{{ route('category.show', ['category' => $category->id]) }}">
                            <button type="submit" class="px-5 py-2 text-white bg-teal-500 rounded-md"><i class="fa-regular fa-eye"></i></button>
                            </a>
                        </span>
                        <span>
                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="px-5 py-2 text-white bg-red-500 rounded-md"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </span>

                    </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
@endsection
