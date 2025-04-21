<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'seo_title' => 'required',
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ];
        if (Request::method() == "PATCH") {
            return $rules;
        }
        return array_merge($rules, $this->getExtendedRules());
    }

    public function getExtendedRules()
    {
        return [
            'blogImage' => 'required|image'
        ];
    }
}
