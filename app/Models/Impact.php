<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impact extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function indicatorsRelation(){
        return $this->hasManyThrough(Milestone::class,Indicator::class);
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
