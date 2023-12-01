<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDepositRequest extends FormRequest {
   
    public function authorize(): bool {
        return auth()->user()->id == $this->route('id');
    }

    public function rules(): array {
        return [
         'value' => ['required', 'numeric', 'gte:0.01']
        ];
    }

    public function messages():array {

        return [
            'value.required' => 'Value is required!',
            'value.numeric' => 'Value must be a number',
            'value.gte' => 'Value must be greater than or equal to 0.01'
          
        ];
    }
}
