<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:4|max:50|unique:categories,title',
            'active'=>'required|in:0,1'
            // هاي عشان ما يقدر من خلال الانسبكت يغير الفاليو ويبعتلي قيمه خطأ غير ال ٠ و ١
        ];
    }
}
