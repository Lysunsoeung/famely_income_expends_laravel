<?php

namespace App\Http\Requests;

use App\Http\Requests\StoreExpense;
use Illuminate\Foundation\Http\FormRequest;

class StoreExpense extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'entry_date' => 'nullable|date',
            'amount' => 'required|string',
            'description' => 'required|string',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ];
    }
}
