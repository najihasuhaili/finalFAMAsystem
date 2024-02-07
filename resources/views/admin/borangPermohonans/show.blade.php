@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.borangPermohonan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.borang-permohonans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.id') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.nama_pemohon') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->nama_pemohon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.email') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.no_sambungan') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->no_sambungan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.jawatan') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->jawatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.unit_bahagian') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->unit_bahagian }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.nama_mesyuaarat') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->nama_mesyuaarat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.nama_bilik') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->nama_bilik->nama_bilik ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.pengerusi') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->pengerusi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.dari') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->dari }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.hingga') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->hingga }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.bil_ahli') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->bil_ahli }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.status') }}
                        </th>
                        <td>
                            {{ $borangPermohonan->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.borang-permohonans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection