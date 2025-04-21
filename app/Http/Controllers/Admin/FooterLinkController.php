<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterLink;
use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
    private $model = FooterLink::class;

    public function index()
    {
        $footerLinks = $this->model::get();
        return view('admin.footer.index', compact('footerLinks'));
    }

    public function store(Request $request)
    {
        try {
            $this->model::create($request->all());
            $this->success('Successfully added the footer Links');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            $footerlink = $this->model::findOrFail($id);
            $footerlink->update($request->all());
            $this->success('Successfully updated  the footer Links');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return back();
    }

    public function destroy($id)
    {
        try {
            $footerlink = $this->model::findOrFail($id);
            $footerlink->delete();
            $this->success('Successfully Deleted  the footerlink');
            return response()->json(['message' => 'footerlink has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
