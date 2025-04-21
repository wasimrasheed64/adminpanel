<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $model = Promotion::class;

    public function index()
    {
        $promotions = $this->model::get();
        return view('admin.promotion.index', compact('promotions'));
    }

    public function store(Request $request)
    {
        try {
            $request['image'] = request('promotionImage')->store($this->model::UPLOAD_DIRECTORY);
            $this->model::create($request->all());
            $this->success('Successfully added the promotion');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        try {
            if (request('promotionImage')) {
                $request['image'] = request('promotionImage')->store($this->model::UPLOAD_DIRECTORY);
            }
            $promotion = $this->model::findOrFail($id);
            $promotion->update($request->all());
            $this->success('Successfully updated  the promotion');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return back();
    }

    public function destroy($id)
    {
        try {
            $promotion = $this->model::findOrFail($id);
            $promotion->delete();
            $this->success('Successfully Deleted  the promotion');
            return response()->json(['message' => 'promotion has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}

