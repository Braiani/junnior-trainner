<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientAddRequest extends FormRequest
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
            'name' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'email'
            ],
            'birthday' => [
                'nullable'
            ],
            'gender' => [
                'required', 'string', 'size:1'
            ],
            'client_id' => [
                'nullable'
            ],
            'number' => [
                'nullable'
            ],
            'whatsapp' => [
                'nullable'
            ],
            'instagram' => [
                'nullable'
            ],
        ];
    }
}
