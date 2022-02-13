<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeConentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'head_title' => 'required|max:255',
            'head_content' => 'required',
            'dream_details' => 'required',
            'culture_details' => 'required',
            'head_image' => [
                'nullable',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function() {
                    return Request::routeIs('contents.store');
                })
            ]

        ];
    }
}
