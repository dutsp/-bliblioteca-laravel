<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLivroRequest extends FormRequest
{
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
            'titulo' => 'required|min:3',
            'isbn' => 'required|unique:livros,isbn,' . $this->route('livro')->id,
            'quantidade' => 'required|integer|min:0',
            'autor_id' => 'required|exists:autors,id',
        ];
    }
}