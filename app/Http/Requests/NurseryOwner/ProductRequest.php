<?php

namespace App\Http\Requests\NurseryOwner;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'required'
            ];
            if ($this->getMethod() == 'POST') {
            $rules += ['image' => 'required |image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100'];
            }
            else{
            
            $rules += ['image' => 'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100'];
            }
            return $rules;

    }
}
