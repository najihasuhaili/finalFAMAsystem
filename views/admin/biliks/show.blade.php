@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.bilik.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.biliks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.bilik.fields.id') }}
                        </th>
                        <td>
                            {{ $bilik->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bilik.fields.kapasiti') }}
                        </th>
                        <td>
                            {{ $bilik->kapasiti }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bilik.fields.lokasi') }}
                        </th>
                        <td>
                            {{ $bilik->lokasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bilik.fields.nama_bilik') }}
                        </th>
                        <td>
                            {{ $bilik->nama_bilik }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.biliks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection