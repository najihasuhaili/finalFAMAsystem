<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BorangPermohonan;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => BorangPermohonan::class,
            'date_field' => 'dari',
            'field'      => 'nama_bilik_id',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.borang-permohonans.show',
        ],
    ];
    public function index()
{
    $events = [];
    foreach ($this->sources as $source) {
        foreach ($source['model']::with('nama_bilik')->get() as $model) {
            $crudFieldValue = $model->getAttributes()[$source['date_field']];

            if (!$crudFieldValue) {
                continue;
            }

            $status = $model->status;

            // Skip if the status is "TEMPAHAN TIDAK BERJAYA"
            if ($status == 'TEMPAHAN TIDAK BERJAYA') {
                continue;
            }

            // Default color is blue
            $color = 'blue';

            // Change color to green if status is "TEMPAHAN BERJAYA"
            if ($status == 'TEMPAHAN BERJAYA') {
                $color = 'green';
            }

            $bilikName = $model->nama_bilik->nama_bilik;
            $events[] = [
                'title' => trim($source['prefix'] . ' ' . $bilikName . ' ' . $source['suffix']),
                'start' => $crudFieldValue,
                'url'   => route($source['route'], $model->id),
                'color' => $color,
                'nama_pemohon' => $model->nama_pemohon, 
                'nama_bilik' => $bilikName, 
            ];
        }
    }

    return view('admin.calendar.calendar', compact('events'));
}
}
