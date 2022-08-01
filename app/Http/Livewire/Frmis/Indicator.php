<?php

namespace App\Http\Livewire\Frmis;

use Livewire\Component;

class Indicator extends Component
{
    public $searchQuery;
    public function mount(){
        $this->searchQuery='';
    }
    public function render()
    {
        return view('livewire.frmis.indicator',['myIndicators'=>\App\Models\Indicator::with('impacts')
            ->where('indicator','like',"%$this->searchQuery%")
            ->get()]);
    }
}
