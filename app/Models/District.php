<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function centrales(){
        return $this->hasMany(Centrale::class,'district_id');
    }

    public function sector(){
        return $this->hasMany(Sector::class,'district_id');
    }

    public function parish(){
        return $this->hasMany(Parish::class,'district_id');
    }
}
