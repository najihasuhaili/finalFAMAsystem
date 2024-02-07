<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBorangPermohonanRequest;
use App\Http\Requests\StoreBorangPermohonanRequest;
use App\Http\Requests\UpdateBorangPermohonanRequest;
use App\Models\Bilik;
use App\Models\BorangPermohonan;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BorangPermohonanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('borang_permohonan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $borangPermohonans = BorangPermohonan::with(['nama_bilik'])->get();

        return view('admin.borangPermohonans.index', compact('borangPermohonans'));
    }

    public function create()
    {
        abort_if(Gate::denies('borang_permohonan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nama_biliks = Bilik::pluck('nama_bilik', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.borangPermohonans.create', compact('nama_biliks'));
    }

    public function store(StoreBorangPermohonanRequest $request)
    {
        $borangPermohonan = BorangPermohonan::create($request->all());

        return redirect()->back()->with('success', 'Permohonan telah dihantar dan masih dalam proses.');

    }

    public function edit(BorangPermohonan $borangPermohonan)
    {
        abort_if(Gate::denies('borang_permohonan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nama_biliks = Bilik::pluck('nama_bilik', 'id')->prepend(trans('global.pleaseSelect'), '');

        $borangPermohonan->load('nama_bilik');

        return view('admin.borangPermohonans.edit', compact('borangPermohonan', 'nama_biliks'));
    }

    public function update(UpdateBorangPermohonanRequest $request, BorangPermohonan $borangPermohonan)
    {
        $borangPermohonan->update($request->all());

        return redirect()->route('admin.borang-permohonans.index');
    }

    public function show(BorangPermohonan $borangPermohonan)
    {
        abort_if(Gate::denies('borang_permohonan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $borangPermohonan->load('nama_bilik');

        return view('admin.borangPermohonans.show', compact('borangPermohonan'));
    }

    public function destroy(BorangPermohonan $borangPermohonan)
    {
        abort_if(Gate::denies('borang_permohonan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $borangPermohonan->delete();

        return back();
    }

    public function massDestroy(MassDestroyBorangPermohonanRequest $request)
    {
        $borangPermohonans = BorangPermohonan::find(request('ids'));

        foreach ($borangPermohonans as $borangPermohonan) {
            $borangPermohonan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
    
}
