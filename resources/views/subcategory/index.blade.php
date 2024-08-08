@extends('master')
@section('title', 'About Page')
@section('content')
    <div class="border border-gray-200 rounded-md">
        <div class="flex justify-between p-3 mb-4 bg-teal-200">
            <h1 class="mb-4 text-2xl">Subcategories</h1>
            <a href="{{ route('subcategory.create') }}" class="text-white bg-green-500 border-0 hover:bg-green-400 btn">Create subcategory</a>
        </div>
        <div>
            <div class="m-8 overflow-x-auto border border-gray-200 rounded-t-md">
                <table class="table table-md">
                  <thead class="px-0 bg-emerald-300">
                    <tr class="">
                      <th class="text-lg text-black">SL</th>
                      <th class="text-lg text-black">Category Name</th>
                      <th class="text-lg text-black">Subcategory Name</th>
                      <th class="text-lg text-black">Status</th>
                      <th class="text-lg text-black">Created</th>
                      <th class="text-lg text-black">Action</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    @foreach ($subcategories as $subcategory)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subcategory->category->name }}</td>
                        <td>{{ $subcategory->name }}</td>
                        <td>


                            @if ($subcategory->is_active == 1)
                                Active
                            @else ($subcategory->is_active == 0)
                                Inactive
                            @endif
                        </td>
                        <td>{{ $subcategory->created_at }}</td>
                        <td class="flex gap-2">
                            <span>
                                <a href="{{ route('subcategory.edit', ['subcategory' => $subcategory->id]) }}">
                                <button type="submit" class="px-5 py-2 text-white bg-green-500 rounded-md"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                            </span>
                            <span>
                                <a href="{{ route('subcategory.show', ['subcategory' => $subcategory->id]) }}">
                                <button type="submit" class="px-5 py-2 text-white bg-teal-500 rounded-md"><i class="fa-regular fa-eye"></i></button>
                                </a>
                            </span>
                            <span>
                                <form action="{{ route('subcategory.destroy', ['subcategory' => $subcategory->id]) }}" method="POST">
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
                <div class="m-5">
                    {{ $subcategories->links() }}
                </div>
              </div>
        </div>
    </div>
@endsection
