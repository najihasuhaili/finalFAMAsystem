@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.borangPermohonan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.borang-permohonans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nama_pemohon">{{ trans('cruds.borangPermohonan.fields.nama_pemohon') }}</label>
                <input class="form-control {{ $errors->has('nama_pemohon') ? 'is-invalid' : '' }}" type="text" name="nama_pemohon" id="nama_pemohon" value="{{ old('nama_pemohon', '') }}" required>
                @if($errors->has('nama_pemohon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_pemohon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.nama_pemohon_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.borangPermohonan.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="no_sambungan">{{ trans('cruds.borangPermohonan.fields.no_sambungan') }}</label>
                <input class="form-control {{ $errors->has('no_sambungan') ? 'is-invalid' : '' }}" type="text" name="no_sambungan" id="no_sambungan" value="{{ old('no_sambungan', '') }}" required>
                @if($errors->has('no_sambungan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_sambungan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.no_sambungan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="jawatan">{{ trans('cruds.borangPermohonan.fields.jawatan') }}</label>
                <input class="form-control {{ $errors->has('jawatan') ? 'is-invalid' : '' }}" type="text" name="jawatan" id="jawatan" value="{{ old('jawatan', '') }}" required>
                @if($errors->has('jawatan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jawatan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.jawatan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="unit_bahagian">{{ trans('cruds.borangPermohonan.fields.unit_bahagian') }}</label>
                <input class="form-control {{ $errors->has('unit_bahagian') ? 'is-invalid' : '' }}" type="text" name="unit_bahagian" id="unit_bahagian" value="{{ old('unit_bahagian', '') }}" required>
                @if($errors->has('unit_bahagian'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_bahagian') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.unit_bahagian_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_mesyuaarat">Nama Mesyuarat</label>
                <input class="form-control {{ $errors->has('nama_mesyuaarat') ? 'is-invalid' : '' }}" type="text" name="nama_mesyuaarat" id="nama_mesyuaarat" value="{{ old('nama_mesyuaarat', '') }}" required>
                @if($errors->has('nama_mesyuaarat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_mesyuaarat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.nama_mesyuaarat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_bilik_id">{{ trans('cruds.borangPermohonan.fields.nama_bilik') }}</label>
                <select class="form-control select2 {{ $errors->has('nama_bilik') ? 'is-invalid' : '' }}" name="nama_bilik_id" id="nama_bilik_id" required>
                    @foreach($nama_biliks as $id => $entry)
                        <option value="{{ $id }}" {{ old('nama_bilik_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('nama_bilik'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_bilik') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.nama_bilik_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="pengerusi">{{ trans('cruds.borangPermohonan.fields.pengerusi') }}</label>
                <input class="form-control {{ $errors->has('pengerusi') ? 'is-invalid' : '' }}" type="text" name="pengerusi" id="pengerusi" value="{{ old('pengerusi', '') }}" required>
                @if($errors->has('pengerusi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pengerusi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.pengerusi_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dari">{{ trans('cruds.borangPermohonan.fields.dari') }}</label>
                <input class="form-control datetime {{ $errors->has('dari') ? 'is-invalid' : '' }}" type="text" name="dari" id="dari" value="{{ old('dari') }}" required>
                @if($errors->has('dari'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dari') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.dari_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="hingga">{{ trans('cruds.borangPermohonan.fields.hingga') }}</label>
                <input class="form-control datetime {{ $errors->has('hingga') ? 'is-invalid' : '' }}" type="text" name="hingga" id="hingga" value="{{ old('hingga') }}" required>
                @if($errors->has('hingga'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hingga') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.hingga_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bil_ahli">{{ trans('cruds.borangPermohonan.fields.bil_ahli') }}</label>
                <input class="form-control {{ $errors->has('bil_ahli') ? 'is-invalid' : '' }}" type="number" name="bil_ahli" id="bil_ahli" value="{{ old('bil_ahli', '') }}" step="1">
                @if($errors->has('bil_ahli'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bil_ahli') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.borangPermohonan.fields.bil_ahli_helper') }}</span>
            </div>
            <div class="form-group">
    <label class="required" for="status">{{ trans('cruds.borangPermohonan.fields.status') }}</label>
    <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="DALAM PROSES" readonly>
    @if($errors->has('status'))
        <div class="invalid-feedback">
            {{ $errors->first('status') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.borangPermohonan.fields.status_helper') }}</span>
</div>

<div class="form-group">
    <button class="btn btn-danger" type="submit">
        SIMPAN DAN HANTAR
    </button>
</div>
</form>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            alert("{{ session('success') }}");
        @endif
    });
</script>


@endsection