<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|max:150',
            'email' => 'required|email|unique:users,email,'.$this->id,
            'phone' => 'required|max:30,'.$this->id,
            'role_id' => 'required|integer',
            'photo' => 'nullable|image|max:5000'
        ];
    }
}
