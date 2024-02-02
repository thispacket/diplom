<?php

namespace App\Http\Requests\MenuItem;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'title' => 'nullable | string | max:255',
          'description' => 'nullable | string',
          'price' => 'nullable | numeric',
          'count' => 'nullable | numeric',
          'img_path' => 'nullable | string | max:255',
          'category_id' => 'nullable | numeric',
        ];
    }
}
