<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    private $model = Blog::class;

    public function index()
    {
        $blogs = $this->model::get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(BlogRequest $request)
    {
        try {
            $request['is_active'] = $request->has('is_active');
            $request['slug'] = $this->slug($request->get('title'));
            $request['image'] = request('blogImage')->store($this->model::UPLOAD_DIRECTORY);
            Auth::user()->blog()->create($request->all());
            $this->success('Successfully added the blog');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('blog');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    public function update($id, Request $request)
    {
        try {
            $request['is_active'] = $request->has('is_active');
            if (request('blogImage')) {
                $request['image'] = request('blogImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $request['slug'] = $this->slug($request->get('title'));
            $blog = $this->model::findOrFail($id);
            $blog->update($request->all());
            $this->success('Successfully updated  the blog');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('blog');
    }

    public function destroy($id)
    {
        try {
            $blog = $this->model::findOrFail($id);
            $blog->delete();
            $this->success('Successfully Deleted  the blog');
            return response()->json(['message' => 'Blog Successfully deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }

    public function slug($value)
    {
        $slug = str_replace('(',' ',$value);
        $slug = str_replace(')',' ',$slug);
        $slug = str_replace('?',' ',$slug);
        $slug = rtrim($slug);
        $slug = ltrim($slug);
        return  str_replace(' ','-',strtolower($slug));
    }
}
