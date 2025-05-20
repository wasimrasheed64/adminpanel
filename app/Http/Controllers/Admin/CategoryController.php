<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Exception;

class CategoryController extends Controller
{
    private $model = Category::class;

    public function index()
    {
        $categories = $this->model::get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.category.create',compact('mainCategories'));
    }
    public function store(CategoryRequest $request)
    {
        try {
            $request['is_active'] = $request->has('is_active');
            $request['is_menu'] = $request->has('is_menu');
            $request['is_footer'] = $request->has('is_footer');
               if (request('image')) {
                $request['banner_image'] = request('image')->store($this->model::UPLOAD_DIRECTORY);
            }
            $this->model::create($request->all());
            $this->success('Successfully added the category');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
       return redirect()->route('category');
    }

    public function edit(Category $category)
    {
        $mainCategories = MainCategory::all();
        return view('admin.category.edit',compact('category','mainCategories'));
    }

    public function update($id, Request $request)
    {
        try {
            $request['is_active'] = $request->has('is_active');
            $request['is_menu'] = $request->has('is_menu');
            $request['is_footer'] = $request->has('is_footer');
            if (request('image')) {
                $request['banner_image'] = request('image')->store($this->model::UPLOAD_DIRECTORY);
            }
            $category = $this->model::findOrFail($id);
            $category->update($request->all());
            $this->success('Successfully updated  the category');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('category');
    }

    public function destroy($id)
    {
        try {
            $category = $this->model::findOrFail($id);
            $category->products()->delete();
            $category->delete();
            $this->success('Successfully Deleted  the category');
            return response()->json(['message' => 'Category Successfully deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
