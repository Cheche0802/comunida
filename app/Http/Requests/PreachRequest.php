<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PreachRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->user_id == auth()->user()->id) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $preach = $this->route()->parameter('preach');

        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'iframe' => 'required',
            'status' => ['required', Rule::in([1, 2])],
            //'file' => 'image'
        ];

        if($preach)
        {
            //$rules['slug'] =  'required,slug,'.$preach->id;
        }

        if ($this->status == 2) {
            $rules = array_merge(
                $rules,
                [
                    //'category_id' => 'required',
                    //'tags' => 'required',
                    //'extract' => 'required',
                    //'body' => 'required'
                ]
            );
        }

        return $rules;
    }
}
