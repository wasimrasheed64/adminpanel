<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Exception;

class MainCategoryController extends Controller
{
    private $model = MainCategory::class;

    public function index()
    {
        $mainCategories = $this->model::get();
        return view('admin.maincategory.index', compact('mainCategories'));
    }

    public function store(Request $request)
    {
        try {
            if (request('categoryImage')) {
                $request['image'] = request('categoryImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $this->model::create($request->all());
            $this->success('Successfully added the maincategory');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            $maincategory = $this->model::findOrFail($id);
            if (request('categoryImage')) {
                $request['image'] = request('categoryImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $maincategory->update($request->all());
            $this->success('Successfully updated  the maincategory');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->route('maincategory');
    }

    public function destroy($id)
    {
        try {
            $maincategory = $this->model::findOrFail($id);
            $maincategory->delete();
            $this->success('Successfully Deleted  the maincategory');
            return response()->json(['message' => 'maincategory has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
