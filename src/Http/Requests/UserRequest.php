<?php

namespace Newnet\Acl\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        $id = $this->route('user');

        return [
            'name'     => 'required',
            'email'    => ['required', 'email', Rule::unique('admins', 'email')->ignore($id)],
            'password' => $id ? '' : 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name'     => __('acl::user.name'),
            'email'    => __('acl::user.email'),
            'password' => __('acl::user.password'),
        ];
    }
}
