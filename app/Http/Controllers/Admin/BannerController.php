<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Exception;

class BannerController extends Controller
{
    private $model = Banner::class;

    public function index()
    {
        $banners = $this->model::get();
        return view('admin.banners.index', compact('banners'));
    }

    public function store(Request $request)
    {
        try {
            $request['image'] = request('bannerImage')->store($this->model::UPLOAD_DIRECTORY);
            $this->model::create($request->all());
            $this->success('Successfully added the banner');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            if (request('bannerImage')) {
                $request['image'] = request('bannerImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $banner = $this->model::findOrFail($id);
            $banner->update($request->all());
            $this->success('Successfully updated  the banner');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return back();
    }

    public function destroy($id)
    {
        try {
            $banner = $this->model::findOrFail($id);
            $banner->delete();
            $this->success('Successfully Deleted  the banner');
            return response()->json(['message' => 'banner has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
