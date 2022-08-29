<?php

namespace App\Http\Requests;

use App\Models\ExpenseCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExpenseCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('expense_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'min:1',
                'max:86',
                'required',
            ],
            'tax_line' => [
                'string',
                'min:1',
                'max:37',
                'nullable',
            ],
            'balance_total' => [
                'required',
            ],
        ];
    }
}
