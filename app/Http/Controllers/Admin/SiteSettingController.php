<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteSettingRequest;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Exception;

class SiteSettingController extends Controller
{
    private $model = SiteSetting::class;

    public function index()
    {
        $siteSetting = $this->model::first();
        return view('admin.sitesetting.index',compact('siteSetting'));
    }

    public function update(SiteSettingRequest $request)
    {
        try {
            if (request('footerLogo')) {
                $request['footer_logo'] = request('footerLogo')->store($this->model::UPLOAD_DIRECTORY);
            }
            if (request('Logo')) {
                $request['logo'] = request('Logo')->store($this->model::UPLOAD_DIRECTORY);
            }
            if (request('favIcon')) {
                $request['favicon'] = request('favIcon')->store($this->model::UPLOAD_DIRECTORY);
            }
            $siteSetting = $this->model::first();
            $siteSetting->update($request->all());
            $this->success('Successfully updated the site setting');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
        return redirect()->back();
    }
}
