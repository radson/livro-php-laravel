<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
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
            'nome' => 'required|string|min:5|max:64',
            'descricao' => 'required|string|min:10|max:256',
            'valor' => 'required|numeric|min:0.01',
            'quantidade' => 'required|integer|min:1',
        ];
    }

    public function messages(): array
    {
        return [ 'nome.required' => 'The :attribute field  can not be empty.'];
    }
}
