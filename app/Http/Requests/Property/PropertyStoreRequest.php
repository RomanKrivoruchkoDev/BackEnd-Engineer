<?php

namespace App\Http\Requests\Property;

use Illuminate\Foundation\Http\FormRequest;

class PropertyStoreRequest extends FormRequest
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
            'suburb' => ['required', 'string', 'min:1', 'max:255'],
            'state' => ['required', 'string', 'min:1', 'max:255'],
            'country' => ['required', 'string', 'min:1', 'max:255'],
        ];
    }
}
