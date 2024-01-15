<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGame extends FormRequest
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
            'gameweek' => 'required',
            'date' => ['required', 'before_or_equal:today'],
            'local_team_id' => ['required', 'exists:teams,id', 'different:visitor_team_id'],
            'local_score' => 'required',
            'visitor_team_id' => ['required', 'exists:teams,id', 'different:local_team_id'],
            'visitor_score' => 'required'
        ];
    }

    public function messages(): array //Con este método puedo personalizar los mensajes de error
    {
        return [
            'gameweek.required' => 'La jornada es obligatoria',
            'date.required' => 'La fecha es obligatoria',
            'date.before_or_equal' => 'No puede ser fecha futura',
            'local_team_id.required' => 'El equipo local es obligatorio',
            'local_team_id.exists' => 'Ese equipo no existe',
            'local_team_id.different' => 'Debe ser diferente al visitante',
            'local_score.required' => 'La anotación es obligatoria',
            'visitor_team_id.required' => 'El equipo visitante es obligatorio',
            'visitor_team_id.exists' => 'Ese equipo no existe',
            'visitor_team_id.different' => 'Debe ser diferente al local',
            'visitor_score.required' => 'La anotación es obligatoria'   
        ];
    }

    public function attributes(): array //Con este método puedo personalizar los atributos
    {
        return [ // elementos comentados porque con el método messages ya tengo suficiente
            //'gameweek' => 'número de jornada',
            //'date' => 'fecha del partido'
        ];
    }


}
