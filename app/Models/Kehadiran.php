<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kehadiran extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function detailKehadiran($id)
    {
        return DB::table('kehadirans')->where('id',$id)->first();
    }
}
