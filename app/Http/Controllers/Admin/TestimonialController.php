<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $model = Testimonial::class;

    public function index()
    {
        $testimonials = $this->model::get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function store(Request $request)
    {
        try {
            $request['image'] = request('testimonialImage')->store($this->model::UPLOAD_DIRECTORY);
            $this->model::create($request->all());
            $this->success('Successfully added the Testimonial');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            if (request('testimonialImage')) {
                $request['image'] = request('testimonialImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $testimonial = $this->model::findOrFail($id);
            $testimonial->update($request->all());
            $this->success('Successfully updated  the Testimonial');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return back();
    }

    public function destroy($id)
    {
        try {
            $testimonial = $this->model::findOrFail($id);
            $testimonial->delete();
            $this->success('Successfully Deleted  the testimonial');
            return response()->json(['message' => 'testimonial has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
