<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class accountRequest extends FormRequest
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
            "accType" => "required",
            "fullName" => "required",
            "mobileNumb" => "required|digits:11|numeric",
            "openingBal" => "required|numeric",
            "address" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "accType" => "Account Type",
            "fullName" => "Name",
            "mobileNumb" => "Mobile No",
            "openingBal" => "Opening Balance",
            "address" => "Address",
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            "fullName" => htmlspecialchars($this->fullName),
            "address" => htmlspecialchars($this->address),
        ]);
    }
}
