<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SubCategoryStoreRequest;
use App\Http\Requests\SubCategoryUpdateRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::paginate(2);
        return view('subcategory.index', compact( 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryStoreRequest $request)
    {
        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active'=> $request->filled('is_active'),
        ]);

        Session::flash ('status', 'Subcategory created successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('subcategory.show', compact('subcategory', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subcategory = SubCategory::find($id);
        $categories = Category::get(['id', 'name']);
        return view('subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryUpdateRequest $request, string $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active'=> $request->filled('is_active'),
        ]);

        Session::flash ('status', 'Subcategory updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();

        Session::flash('status', 'Subcategory deleted successfully');
        return back();
    }
}
