<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBike extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'brand_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'bike_model' => 'required',
            'rent_fee' => 'required|numeric',
        ];

    }

    public function messages(): array
    {
        return [
            'brand_id.required' => 'Select The Brand Bike Belongs To',
            'category_id.required' => 'Select The Category Bike Belongs To',
            'bike_model.required' => 'Please Enter The Model Of Bike',
            'brand_id.numeric' => 'Incorrect Format Entered',
            'category_id.numeric' => 'Incorrect Format Entered',
            'rent_fee.required' => 'Please Enter The Rental Fee',
        ];
    }
}
