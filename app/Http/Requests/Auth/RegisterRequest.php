<?php

namespace App\Http\Requests\Auth;

use App\Traits\ResponsesTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    use ResponsesTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    protected $stopOnFirstFailure = true;


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'device_id' => 'sometimes|nullable',
            // 'country_id' => 'required',
            // 'gender' => 'required',
            // 'social_status' => 'required',
            // 'birth_date' => 'required'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->failed(null,$validator->errors()->first()));    }

    public function messages(): array {
        return [
            'email.unique'  => 'The email Is found.',
            'phone.unique'  => 'The phone Is found.',
        ];
    }
}
