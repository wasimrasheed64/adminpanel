<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $model = Service::class;

    public function index()
    {
        $services = $this->model::get();
        return view('admin.services.index', compact('services'));
    }

    public function store(Request $request)
    {
        try {
            if (request('serviceImage')) {
                $request['image'] = request('serviceImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $this->model::create($request->all());
            $this->success('Successfully added the service');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            if (request('serviceImage')) {
                $request['image'] = request('serviceImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $service = $this->model::findOrFail($id);
            $service->update($request->all());
            $this->success('Successfully updated  the service');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return back();
    }

    public function destroy($id)
    {
        try {
            $service = $this->model::findOrFail($id);
            $service->delete();
            $this->success('Successfully Deleted  the service');
            return response()->json(['message' => 'service has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
