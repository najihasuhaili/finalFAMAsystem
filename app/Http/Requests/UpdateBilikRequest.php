<?php

namespace App\Http\Requests;

use App\Models\Bilik;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBilikRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bilik_edit');
    }

    public function rules()
    {
        return [
            'kapasiti' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'lokasi' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'nama_bilik' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
        ];
    }
}
