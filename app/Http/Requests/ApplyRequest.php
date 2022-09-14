<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Helpers\ResponseFormatter;

class ApplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'job_id' => 'required',
            'name' => 'required',
            'email' => 'email|unique:candidates|required',
            'phone' => 'numeric|unique:candidates|required',
            'year' => 'numeric|min:4|required',
            'skill_sets' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $error = ResponseFormatter::error([
            'message' => 'Data yang dimasukan belum valid',
            'error' => $validator->errors(),
        ],'Test', 400);

        throw new HttpResponseException(
            response()->json($error)
        );

    }
}
