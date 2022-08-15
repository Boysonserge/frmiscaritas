<?php

namespace App\Http\Livewire\Frmis;

use App\Models\Milestone;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\Period\Boundaries;
use Spatie\Period\Period;
use Spatie\Period\Precision;

class Impact extends Component
{
    public $totalMen=0,$totalWomen=0,$totalBudget=0,$totalDisabilities=0,$totalYouths=0;
    public $period;
    public function render():View
    {

        $impacts=\App\Models\Impact::with(['indicatorsRelation'=> function($query){
            return $query->select('milestones.planned_men');
        }])->get();

        return view('livewire.frmis.impact',[
            'impacts'=>$impacts
        ]);
    }
}
