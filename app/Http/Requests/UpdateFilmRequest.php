<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Cambiato 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
     public function rules(): array
    {
        return [
            'title' => ['required', 'max:150', 'string'], //perche ho scelto max 150caratteri,
            'description'=>['string'],
            'release_year' => ['integer'], //era facoltativo 
            'genre'=>['string'],
            'cover'=>['mimes:jpg,jpeg,bmp,png'],
            'duration' => ['integer'], //era facoltativo 
            
        ];
    }
}
