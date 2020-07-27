<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TodoRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 인증이 되었다고 치고
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
             'title' => 'required|min:6|max:12',
//            'title' => 'required',
            'content' => 'required'
        ];
    }
}
