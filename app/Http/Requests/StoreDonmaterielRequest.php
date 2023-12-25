<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonmaterielRequest extends FormRequest
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
            'nom_complet'=>['string', 'required'],
            'email'=>['email', 'required'],
            'adresse' => ['string', 'required'],
            'telephone' => ['string', 'required'],
            'description' => ['string', 'required'],
            'image' => ['image', 'mimes:gif,png,jpg,jpeg','max:2048'],
        ];
    }
}
