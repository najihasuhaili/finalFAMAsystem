<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBilikRequest;
use App\Http\Requests\StoreBilikRequest;
use App\Http\Requests\UpdateBilikRequest;
use App\Models\Bilik;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BilikController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bilik_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $biliks = Bilik::all();

        return view('admin.biliks.index', compact('biliks'));
    }

    public function create()
    {
        abort_if(Gate::denies('bilik_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.biliks.create');
    }

    public function store(StoreBilikRequest $request)
    {
        $bilik = Bilik::create($request->all());

        return redirect()->route('admin.biliks.index');
    }

    public function edit(Bilik $bilik)
    {
        abort_if(Gate::denies('bilik_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.biliks.edit', compact('bilik'));
    }

    public function update(UpdateBilikRequest $request, Bilik $bilik)
    {
        $bilik->update($request->all());

        return redirect()->route('admin.biliks.index');
    }

    public function show(Bilik $bilik)
    {
        abort_if(Gate::denies('bilik_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.biliks.show', compact('bilik'));
    }

    public function destroy(Bilik $bilik)
    {
        abort_if(Gate::denies('bilik_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bilik->delete();

        return back();
    }

    public function massDestroy(MassDestroyBilikRequest $request)
    {
        $biliks = Bilik::find(request('ids'));

        foreach ($biliks as $bilik) {
            $bilik->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
