<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomPageRequest;
use App\Models\CustomPage;
use Illuminate\Support\Facades\DB;
use Exception;

class CustomPageController extends Controller
{
    private $model = CustomPage::class;

    //
    public function index()
    {
        $custompages = $this->model::all();
        return view('admin.custompage.index', compact('custompages'));
    }

    public function create(){
        return view('admin.custompage.create');
    }

    public function store(CustomPageRequest $request)
    {
        try {
            $request['is_header'] = $request->has('is_header');
            $request['is_footer'] = $request->has('is_footer');
            DB::transaction(function () use ($request){
                $this->model::create($request->all());
            });
            $this->success('successfully created custompage');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('custompage');
    }

    public function edit($id){
        $page = $this->model::find($id);
        return view('admin.custompage.edit',compact('page'));
    }

    public function update($id, CustomPageRequest $request)
    {
        try {
            $request['is_header'] = $request->has('is_header');
            $request['is_footer'] = $request->has('is_footer');
            DB::transaction(function () use ($request,$id){
                $custompage = $this->model::find($id);
                $custompage->update($request->all());
            });
            $this->success('successfully created custompage');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('custompage');
    }

    public function destroy($id)
    {
        try {
            $customPage = $this->model::findorFail($id);
            $customPage->delete();
            $this->success('Successfully Deleted  the custompage');
            return response()->json(['message' => 'Successfully custompage has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
