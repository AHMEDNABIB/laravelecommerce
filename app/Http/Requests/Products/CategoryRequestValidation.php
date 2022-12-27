<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequestValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => "required|max:25|regex:/^[0-9A-Za-z.\s,'-]*$/",
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'category name is required',
            'name.max' => 'category name must be 25 character',
            'name.regex'=>'category name should be alphabetic characters'
        ];
    }
}
