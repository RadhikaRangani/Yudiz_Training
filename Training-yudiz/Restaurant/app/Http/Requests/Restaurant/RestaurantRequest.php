<?php

namespace App\Http\Requests\Restaurant;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            'name'          => 'required',
            'description'   => 'required|max:550',
            'address'       => 'required|string',
            'number'        => 'required|digits:10',
            'image'         => 'required|mimes:png,jpg,jpeg',
        ];


    }

}
