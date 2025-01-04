<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return 1 ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom_category' => [  'max:255'],
            'petite_description' => ["required" , 'max:255'],
            'grande_description' => ['required'],
            'photo_1' => [ 'image', 'max:2048'],
            'photo_2' => [  'image', 'max:2048'] 
        ];
    }
}
