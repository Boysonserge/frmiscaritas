<?php

namespace App\Http\Livewire\Frmis;

use App\Models\Cell;
use App\Models\Centrale;
use App\Models\District;
use App\Models\Imiryango;
use App\Models\Milestone;
use App\Models\Parish;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MilestoneCreate extends Component
{
    public $selectedImpact;
    public $selectedIndicator;
    public $indicators;

    public $range;

    public $natureOfSupport;

    public $from,$to;

    public $impacts,$plannedMen,$plannedWomen,$plannedYouths,$plannedDisabilities,$plannedBudget,$achievedMen,$achievedWomen,$achievedYouths,$achievedDisabilities,$achievedBudget;

    protected $listeners = [
        'getIndicatorsByImpactId' => 'getIndicatorsByImpactId',
        'iziToastClosed'=>'iziToastClosed'
    ];

    //return to the milestones page after insertion
    public function iziToastClosed(){
        return redirect()->route('milestone.index');
    }

    public function mount(){
        $this->indicators=[];
        $this->impacts = \App\Models\Impact::where('user_id',Auth::id())
            ->select('id', 'impact_name')
            ->get()->toArray();
    }

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function render()
    {

        return view('livewire.frmis.milestone-create',[
            'impacts'=>\App\Models\Impact::where('user_id',Auth::id())->select('id', 'impact_name')->get()
        ]);
    }


    public function getIndicatorsByImpactId()
    {
        $this->indicators = \App\Models\Indicator::select('id', 'indicator')
            ->where('impact_id',$this->selectedImpact)
            ->get();

    }

    public function save(){


        $a=$this->range;
        $out=str_replace("rwf ","",$this->achievedBudget);
        $this->achievedBudget=str_replace(",","",$out);

        $out=str_replace("rwf ","",$this->plannedBudget);
        $this->plannedBudget=str_replace(",","",$out);



        $exp=explode("to",$a);
        $save=Milestone::create([
            'indicator_id'=>$this->selectedIndicator,
            'from'=>$exp['0'],
            'to'=>$exp[1],
            'nature_of_support'=>$this->natureOfSupport,
            'planned_men'=>$this->plannedMen,
            'planned_women'=>$this->plannedWomen,
            'planned_youths'=>$this->plannedYouths,
            'planned_disabilities'=>$this->plannedDisabilities,
            'planned_budget'=>$this->plannedBudget,
            'achieved_men'=>$this->plannedMen,
            'achieved_women'=>$this->achievedWomen,
            'achieved_youths'=>$this->achievedMen,
            'achieved_disabilities'=>$this->achievedDisabilities,
            'achieved_budget'=>$this->achievedBudget,
        ]);
        if ($save){

            $this->alert(
                'info',
                'Milestone created.',
            );
        }

    }

}
