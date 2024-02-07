<?php

namespace App\Http\Requests;

use App\Models\BorangPermohonan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBorangPermohonanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('borang_permohonan_edit');
    }

    public function rules()
    {
        return [
            'nama_pemohon' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'email' => [
                'required',
            ],
            'no_sambungan' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'jawatan' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'unit_bahagian' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'nama_mesyuaarat' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'nama_bilik_id' => [
                'required',
                'integer',
            ],
            'pengerusi' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
            'dari' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'hingga' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'bil_ahli' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'status' => [
                'string',
                'min:1',
                'max:255',
                'required',
            ],
        ];
    }
}
