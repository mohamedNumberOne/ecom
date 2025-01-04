<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return   true;
    }





    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom_category' => ['required', 'unique:categories', 'max:255'],
            'petite_description' => ['required', 'max:255'],
            'grande_description' => ['required'],
            'photo_1' => ['required', 'image', 'max:2048'],
            'photo_2' => ['required', 'image', 'max:2048'] 
        ];
    }


    public function messages(): array
    {
        return [
            'nom_category.unique' => "ce nom existe déja!" ,

            'photo_1.max' =>  "max 2Mb" ,
            'photo_2.max' => "max 2Mb" ,
        ];
    }

}
