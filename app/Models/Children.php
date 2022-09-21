<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Children extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }

    public function sector(){
        return $this->belongsTo(Sector::class,'sector_id');
    }

    public function cell(){
        return $this->belongsTo(Cell::class,'cell_id');
    }

    public function parish(){
        return $this->belongsTo(Parish::class,'parish_id');
    }

    public function centrale(){
        return $this->belongsTo(Centrale::class,'centrale_id');
    }
}
