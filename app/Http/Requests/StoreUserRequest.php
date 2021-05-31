<?php
namespace App\Http\Requests;

class StoreUserRequest extends BaseFormRequest 
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
            'name' => 'required|string|alpha|max:45',
            'lastname' => 'required|string|alpha|max:45',
            'email' => 'required|email|unique:users,email',
            /*
            The password contains characters from at least three of the following five categories:
                English uppercase characters (A – Z)
                English lowercase characters (a – z)
                Base 10 digits (0 – 9)
                Non-alphanumeric (For example: !, $, #, or %)
                Unicode characters
            */
            'password' => 'required|min:5|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
            'date_of_birth' => 'required|date_format:Y-m-d|before:-18 years',
            'types' => 'required|array',
            'types.*'  => [
                'required',
                'string',   // input must be of type string
                'distinct', // members of the array must be unique
                'exists:types,name'  // check if exists in types table
            ]
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'lastname.required' => 'Lastname is required!',
            'date_of_birth.required' => 'Date of Birth is required!',
            'types.required' => 'Type is required!'
        ];
    }

    public function filters()
    {
        return [
            'name'          => 'trim|capitalize|escape',
            'lastname'      => 'trim|capitalize|escape'
        ];
    }
}
