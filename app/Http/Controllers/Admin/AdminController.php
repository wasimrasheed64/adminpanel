<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class AdminController extends Controller
{
    use UploadImageTrait;

    private $model = Admin::class;

    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function updateProfile(Request $request)
    {
        try {
            $user = Auth::user();
            if (request('avatar')) {
                $request['image'] = request('avatar')->store($this->model::UPLOAD_DIRECTORY);
            }
            $user->update($request->all());
            $this->success('Successfully added the category');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }


}
