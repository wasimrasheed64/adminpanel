<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class CategoryRequest extends FormRequest
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
            'main_category_id'=>'required|gt:0',
            'seo_title' => 'required',
            'seo_description' => 'required',
            'name' => 'required',
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
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
          'main_category_id.gt' => 'Please select a main category'
        ];
    }
}
