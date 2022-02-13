<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TripRequest extends FormRequest
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
            'name' => 'required|max:255',
            'city_id' => 'required|exists:cities,id',
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return Request::routeIs('trips.store');
                })
            ],
            'details' => 'nullable',
            'notes' => 'nullable',
            'economical_price' => 'required|numeric',
            'business_price' => 'required|numeric',
            'economical_content' => 'nullable',
            'economical_exception' => 'nullable',
            'business_content' => 'nullable',
            'business_exception' => 'nullable',
            'days_id' => 'nullable',
            'days_content' => 'nullable',
            'images' => 'array|nullable',
        ];
    }
}
