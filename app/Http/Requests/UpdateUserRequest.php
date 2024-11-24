<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('update', $this->user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:250', 'string'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user->id)],
            // 'profile' => ['nullable', File::types(['png', 'jpg', 'jpeg', 'webp', 'svg'])->max(12 * 1024),],
            'profile' => ['nullable', File::types(['png', 'jpg', 'jpeg', 'webp', 'svg'])->image()->min('1kb')->max('10mb'),],
            'about' => ['nullable', 'min:100',  'string'],
        ];
    }
}
