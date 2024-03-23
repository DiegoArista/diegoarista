<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class PostStoreRequest extends FormRequest
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
            'user_id'       => 'required|integer',
            'category_id'   => 'required|integer',
            'name'          => 'required',
            'slug'          => 'required|unique:posts,slug',
            'body'          => 'required',
            'excerpt'       => 'required',
            'tags'          => 'required|array',
            'status'        => 'required',

        ];
        if($this->get('file'))
            $rules = array_merge($rules, ['file'=> 'mimes:jpg, jpeg, png']);
        return $rules;

        if($this->get('file'))
        $rules = array_merge($rules, ['file'=> 'mimes:mp4, avi']);
    return false;
    }
}
