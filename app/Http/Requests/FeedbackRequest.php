<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.string' => 'Name must be a valid string.',
            'name.max' => 'Name cannot exceed 255 characters.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Invalid email format.',
            'email.max' => 'Email cannot exceed 255 characters.',

            'message.required' => 'Please enter your feedback.',
            'message.string' => 'Feedback must be a valid text.',
            'message.min' => 'Feedback must be at least 10 characters.',
            'message.max' => 'Feedback cannot exceed 1000 characters.',
        ];
    }
}

