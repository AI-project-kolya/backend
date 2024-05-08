<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputRequest extends FormRequest
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
            'battery_power' => 'required|numeric',
            'blue' => 'required|boolean',
            'clock_speed' => 'required|numeric',
            'dual_sim' => 'required|boolean',
            'four_g' => 'required|numeric',
            'int_memory' => 'required|integer',
            'mobile_wt' => 'required|numeric',
            'n_cores' => 'required|integer',
            'pc' => 'required|integer',
            'px_height' => 'required|integer',
            'px_width' => 'required|integer',
            'ram' => 'required|integer',
            'sc_h' => 'required|integer',
            'sc_w' => 'required|integer',
            'three_g' => 'required|boolean',
            'touch_screen' => 'required|boolean',
            'wifi' => 'required|boolean',
        ];
    }
}
