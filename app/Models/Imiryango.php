<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imiryango extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function centrales(){
        return $this->belongsTo(Centrale::class,'centrale_id');
    }
}
