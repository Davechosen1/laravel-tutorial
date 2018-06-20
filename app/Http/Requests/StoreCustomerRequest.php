<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'first_name'    => 'required|max:100',
            'middle_name'   => 'nullable|max:100',
            'last_name'     => 'required|max:100',
            'address'       => 'required',
            'city'          => 'required',
            'state'         => 'nullable',
            'zip'           => 'nullable',
            'title'         => 'required|max:4',
            'phone_number'  => 'nullable',
            'email_address' => 'nullable',
            'website'       => 'nullable',   
        ];
    }
}
