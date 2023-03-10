<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PostCodeRule;

class IndexRequest extends FormRequest
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
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'postcode' => ['required', new PostCodeRule()],
            'address' => 'required',
            'opinion' => 'required|string|max:120'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'a')]);
    }
}
