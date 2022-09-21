<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function districts(){
        return $this->belongsTo(District::class,'district_id');
    }

    public function cell(){
        return $this->hasMany(Cell::class,'sector_id');
    }
}
