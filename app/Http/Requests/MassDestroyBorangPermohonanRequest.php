<?php

namespace App\Http\Requests;

use App\Models\BorangPermohonan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBorangPermohonanRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('borang_permohonan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:borang_permohonans,id',
        ];
    }
}
