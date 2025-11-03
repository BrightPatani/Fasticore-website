<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternshipRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'track' => ['required', 'string', 'in:frontend,backend,fullstack,uiux,mobile'],
            'background' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Please enter your full name',
            'full_name.min' => 'Name must be at least 2 characters',
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'track.required' => 'Please select a preferred track',
            'track.in' => 'Invalid track selected',
            'background.max' => 'Background description cannot exceed 500 characters',
        ];
    }
}
