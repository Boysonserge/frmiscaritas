<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parish extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function districts(){
        return $this->belongsTo(District::class,'district_id');
    }

    public function centrales(){
        return $this->hasMany(Centrale::class,'parish_id');
    }
}
