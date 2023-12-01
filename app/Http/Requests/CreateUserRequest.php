<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest {
   
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'email' => ['required', 'email'],
            'name' => ['required'], 
            'cpf' => ['required'],
            'password' => ['required', 'min:7', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
        ];
    }

    public function messages():array {

        return [
            'name.required' => 'Name is required!',
            'cpf.required' => 'Cpf is required!',
            'password.required' => 'Password is required!',
            'password.min' => 'Minimum characters is seven!',
            'email.required' => 'Email is required!',
            'email.email' => 'Email must be a valid address!',
        ];

    }
}
