<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //per non avere errore 403
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

      public function messages()
    {
        return [
            'title.required' => ' manca il dato.',
            'title.max' => 'Troppi caratteri',
            'release_year.integer' => 'non accetto lettere',
        ];
    }
}
