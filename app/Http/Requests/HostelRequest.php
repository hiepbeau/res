<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
            'Idhome' => 'required',
            'IdHost' => 'required',
            'Address' => 'required',
            'Image' => 'required',
            'LongTitude' =>'required',
            'LaTitude' => 'required',
        ];
    }

}
