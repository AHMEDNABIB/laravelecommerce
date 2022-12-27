<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
              'name' => "required|max:25|regex:/^[0-9A-Za-z.\s,'-]*$/",
              'brand' => "required|max:25|regex:/^[0-9A-Za-z.\s,'-]*$/",
              'description' => "required|regex:/^[0-9A-Za-z.\s,'-]*$/",
              'qty' =>'required|numeric',
              'code' => "required|regex:/^[0-9A-Za-z.\s,'-]*$/",
              'price' =>'required|numeric',
        ];
    }
}
