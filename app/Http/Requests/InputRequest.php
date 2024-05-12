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
            'battery_power' => 'required|numeric|min:500|max:2000',
            'blue' => 'required|boolean',
            'clock_speed' => 'required|numeric|min:0.5|max:3',
            'dual_sim' => 'required|boolean',
            'four_g' => 'required|boolean',
            'int_memory' => 'required|integer|min:2|max:65',
            'mobile_wt' => 'required|numeric|min:80|max:200',
            'n_cores' => 'required|integer|min:1|max:8',
            'pc' => 'required|integer|min:0|max:20',
            'px_height' => 'required|integer|min:0|max:1960',
            'px_width' => 'required|integer|min:500|max:2000',
            'ram' => 'required|integer|min:256|max:4000',
            'sc_h' => 'required|integer|min:5|max:20',
            'sc_w' => 'required|integer|min:0|max:19',
            'three_g' => 'required|boolean',
            'touch_screen' => 'required|boolean',
            'wifi' => 'required|boolean',
        ];
    }
}
