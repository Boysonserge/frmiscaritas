<?php

namespace App\Http\Livewire\Frmis;

use Livewire\Component;
use Livewire\WithPagination;

class Indicator extends Component
{
    use WithPagination;
    public $searchQuery="Test";
    public $perPage=10;

    public function updatingSearchQuery()
    {
        $this->resetPage();
    }


    public function mount(){
        $this->searchQuery='';
    }
    public function render()
    {

        $indicators=\App\Models\Indicator::with('impacts')
            ->orderBy('id','DESC')
            ->search('indicator',$this->searchQuery)
            ->paginate($this->perPage);
        return view('livewire.frmis.indicator',['myIndicators'=>$indicators]);
    }
}
