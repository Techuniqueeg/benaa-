<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdRequest extends FormRequest
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
            'url' => 'required|url|max:255',
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return Request::routeIs('ads.store');
                })
            ],
        ];
    }
}
