<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impact extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function indicators(){
        return $this->hasMany(Indicator::class,'impact_id');
    }


    protected $casts=[
        'districts'=>'array',
        'sectors'=>'array',
        'cells'=>'array',
        'parishes'=>'array',
        'centrales'=>'array',
        'imiryango'=>'array',
        'indicators'=>'array'
    ];


}
