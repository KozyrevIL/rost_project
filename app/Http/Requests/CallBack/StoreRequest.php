<?php

namespace App\Http\Requests\CallBack;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'fio' => 'string',
            'email' => 'nullable|string',
            'post_data' => 'string',
            'TextCapcha' => 'confirmed'
        ];
    }
}
