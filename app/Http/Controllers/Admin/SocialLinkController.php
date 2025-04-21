<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    private $model = SocialLink::class;

    public function index()
    {
        $socialLinks = $this->model::get();
        return view('admin.social.index', compact('socialLinks'));
    }

    public function store(Request $request)
    {
        try {
            $this->model::create($request->all());
            $this->success('Successfully added the Social Links');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            $sociallink = $this->model::findOrFail($id);
            $sociallink->update($request->all());
            $this->success('Successfully updated  the Social Links');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return back();
    }

    public function destroy($id)
    {
        try {
            $sociallink = $this->model::findOrFail($id);
            $sociallink->delete();
            $this->success('Successfully Deleted  the sociallink');
            return response()->json(['message' => 'sociallink has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
