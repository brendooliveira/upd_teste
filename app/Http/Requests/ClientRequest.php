<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required',
            'document' => 'required',
            'date_birth' => 'required',
            'genre' => 'required',
            'address' => 'required',
            'states' => 'required',
            'city' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Insira o nome por favor',
            'document.required' => 'Insira o documento por favor',
            'date_birth.required' => 'Insira a data de nascimento por favor',
            'genre.required' => 'Insira o sexo por favor',
            'address.required' => 'Insira o endereço por favor',
            'states.required' => 'Insira o estado por favor',
            'city.required' => 'Insira a cidade por favor'
        ];
    }
}
