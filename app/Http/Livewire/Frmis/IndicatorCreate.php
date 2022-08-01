<?php

namespace App\Http\Livewire\Frmis;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndicatorCreate extends Component
{
    public $impacts=[];
    public $selectedImpacts=[];
    public Collection $indicators;
    public Collection $inputs;
    public $counter=1;

    protected $rules = [
        'inputs.*.indicator' => 'required',

    ];

    protected $messages = [
        'inputs.*.indicator.required' => 'Indicator field is required.',
    ];


    public function addInputs(){
        $this->inputs->push(['indicator'=>'']);
    }

    public function removeInput($key){
        $this->inputs->pull($key);
    }


    public function mount(){
        $this->fill(['inputs' => collect([['indicator'=>'']])]);
        $this->impacts=\App\Models\Impact::where('user_id',Auth::id())->get();
    }

    public function save(){
        $this->validate();
        foreach ($this->inputs as $input => $value){

            \App\Models\Indicator::create([
                'impact_id'=>$this->selectedImpacts,
                'indicator'=>$value['indicator']
            ]);
        }
        return redirect()->route('indicator.index');
    }
    public function render()
    {
        return view('livewire.frmis.indicator-create');
    }
}
