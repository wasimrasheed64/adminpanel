<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteSettingRequest;
use App\Models\HomePage;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    private $model = HomePage::class;

    public function index()
    {
        $homePage = $this->model::first();
        return view('admin.homePage.index',compact('homePage'));
    }

    public function update(Request $request)
    {
        try {
            $homePage = $this->model::first();
            $homePage->update($request->all());
            $this->success('Successfully updated the home page data ');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }
}
