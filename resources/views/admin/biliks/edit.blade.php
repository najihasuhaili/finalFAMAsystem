@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.bilik.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.biliks.update", [$bilik->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="kapasiti">{{ trans('cruds.bilik.fields.kapasiti') }}</label>
                <input class="form-control {{ $errors->has('kapasiti') ? 'is-invalid' : '' }}" type="text" name="kapasiti" id="kapasiti" value="{{ old('kapasiti', $bilik->kapasiti) }}" required>
                @if($errors->has('kapasiti'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kapasiti') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bilik.fields.kapasiti_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lokasi">{{ trans('cruds.bilik.fields.lokasi') }}</label>
                <input class="form-control {{ $errors->has('lokasi') ? 'is-invalid' : '' }}" type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $bilik->lokasi) }}" required>
                @if($errors->has('lokasi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lokasi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bilik.fields.lokasi_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_bilik">{{ trans('cruds.bilik.fields.nama_bilik') }}</label>
                <input class="form-control {{ $errors->has('nama_bilik') ? 'is-invalid' : '' }}" type="text" name="nama_bilik" id="nama_bilik" value="{{ old('nama_bilik', $bilik->nama_bilik) }}" required>
                @if($errors->has('nama_bilik'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_bilik') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bilik.fields.nama_bilik_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection