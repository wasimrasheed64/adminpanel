<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    private $model = Faq::class;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = $this->model::get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function store(Request $request)
    {
//        return $request->all();
        try {
            DB::table('faqs')->delete();
            $faqs = $request->get('faqs');
            foreach ($faqs as $faq) {
                $this->model::create($faq);
            }
            $this->success('Successfully added the faqs');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }

}
