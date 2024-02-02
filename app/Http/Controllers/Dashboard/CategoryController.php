<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Category::all();
        return view ('admin.cats.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat = Category::findOrFail($id);
        // return $cat;
        return view('admin.cats.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cat = Category::findOrFail($id);
        // return $cat;
        $cat->update($request->all());
        return redirect()->route('cats.index');
    }


    public function archive(){
        $cats = Category::onlyTrashed()->get();
        return view('admin.cats.archived',compact('cats'));
    }

    public function restore($id){
        $cat = Category::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('cats.index');

    }
    public function forceDelete($id){
        $cat = Category::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('cats.archived');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('cats.index');
    }
}
