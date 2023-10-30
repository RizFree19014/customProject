<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'fname' => 'required|string|max:50',
             'lname' => 'required|string|max:50',
             'username' => 'required|string|max:10',
             'city' => 'required|string|max:15',
             'state' => 'required|string|max:20',
             'zip' => 'required|numeric|max:5',
        ];
    }

    public function messages()
    {
        return [

            'fname.required' => 'first_name is required!',
            'last_name.required' => 'last_name is required!',
            'username.required' => 'username is required!',
            'city.required' => 'city is required!',
            'state.required' => 'state is required!',
            'zip.required' => 'zip is required!',

        ];
    }
}
