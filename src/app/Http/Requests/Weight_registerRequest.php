<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Weight_registerRequest extends FormRequest
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
            'weight' => ['required', 'numeric', 'between:0.1,99.9'],
            'target_weight' => ['required', 'numeric', 'between:0.1,99.9']
        ];
    }

    public function messages()
    {
        return [
            'weight.required' => '数字で入力してください',
            'weight.numeric' => '数字で入力してください',
            'weight.between:0.1,99.9' => '4桁までの数字で入力してください、小数点は1桁で入力してください',
            'target_weight.required' => '数字で入力してください',
            'target_weight.numeric' => '数字で入力してください',
            'target_weight.between:0.1,99.9' => '4桁までの数字で入力してください、小数点は1桁で入力してください'
        ];
    }
}
