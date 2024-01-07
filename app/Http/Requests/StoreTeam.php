<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
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
            'name'=>['required', 'min:3', 'unique:teams'],
            'city'=>'required',
        ];
    }

    public function messages(): array //Con este método puedo personalizar los mensajes de error
   {
        return [
            'name.required' => 'El nombre del equipo es obligatorio',
            'name.min' => 'El nombre del equipo debe contener al menos 3 caracteres',
            'name.unique' => 'El nombre de ese equipo ya existe en la base de datos',
            'city.required' => 'La ciudad del equipo es obligatoria',
        ];
   }

   public function attributes(): array //Con este método puedo personalizar los atributos
   {
        return [ // elementos comentados porque con el método messages ya tengo suficiente
            //'name' => 'nombre del equipo',
            //'city' => 'ciudad del equipo',
        ];
   }
}
