<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptRequest extends FormRequest
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
            'issuer_name' => 'required|min:3|max:200'
            , 'issuer_type' => 'required|max:1|in:F,J'
            , 'issuer_document' => 'required|min:11|max:14'
            , 'payer_name' => 'required|min:3|max:200'
            , 'payer_type' => 'required|max:1|in:F,J'
            , 'payer_document' => 'required|min:11|max:14'
        ];
    }
}
