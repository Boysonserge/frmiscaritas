<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Centrale extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function parishes(){
        return $this->belongsTo(Parish::class,'parish_id');
    }

    public function imiryangos(){
        return $this->hasMany(Imiryango::class,'centrale_id');
    }

    public function children(){
        return $this->hasMany(Children::class,'centrale_id');
    }

    public function imiryango(){
        return $this->hasMany(Imiryango::class,'centrale_id');
    }
}
