<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGame extends FormRequest
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
            'gameweek.required' => 'El número de jornada es obligatorio',
            'date.required' => 'La fecha del partido es obligatoria',
            'date.before_or_equal' => 'No puedes dar de alta un resultado futuro',
            'local_team_id.required' => 'Debes indicar el nombre del equipo local',
            'local_team_id.exists' => 'Ese equipo no está dado de alta en la base de datos',
            'local_team_id.different' => 'El equipo local no puede ser el mismo que el equipo visitante',
            'local_score.required' => 'Debes indicar la anotación del equipo local',
            'visitor_team_id.required' => 'Debes indicar el nombre del equipo local',
            'visitor_team_id.exists' => 'Ese equipo no está dado de alta en la base de datos',
            'visitor_team_id.different' => 'El equipo visitante no puede ser el mismo que el equipo local',
            'visitor_score.required' => 'Debes indicar la anotación del equipo visitante'   
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
