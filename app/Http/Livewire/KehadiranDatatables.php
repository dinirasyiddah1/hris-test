<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kehadiran;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class KehadiranDatatables extends LivewireDatatable
{
    public $model = Kehadiran::class;
    public function columns()
    {
        return [
            NumberColumn::name('id')->label('No.')->sortBy('id'),
            Column::name('in')->label('Tanggal Masuk'),
            Column::name('out')->label('Tanggal Pulang'),
            Column::name('hour')->label('Lama Kerja (Jam)'),
            Column::name('location')->label('Lokasi'),
            Column::name('deviceid')->label('Device'),
            Column::callback(['id'], function ($id) {
                return view('livewire.kehadiran-datatables', ['id' => $id]);
            })->label('Manage')
        ];
        
    }
}
