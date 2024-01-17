<?php

namespace App\Http\Requests\MenuItem;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'title' => 'required | string | max:255',
      'description' => 'required | string',
      'price' => 'required | numeric',
      'count' => 'required | numeric',
      'img_path' => 'required | string | max:255',
      'category_id' => 'required | numeric',
    ];
  }

  public function messages(): array
  {
    return [
      'required' => 'Поле :attribute обязательно к заполнению',
      'max' => 'Поле :attribute не может быть больше :max',
      'numeric' => 'Поле :attribute должно содержать только цифры',
    ];
  }
}
