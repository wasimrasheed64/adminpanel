<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success($message)
    {
        session()->flash('heading', 'Success');
        session()->flash('message', $message);
        session()->flash('class', 'success');
    }

    public function error($message)
    {
        session()->flash('heading', 'Error');
        session()->flash('message', $message);
        session()->flash('class', 'danger');
    }
}
