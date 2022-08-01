<?php

namespace App\Http\Livewire\Frmis;

use Illuminate\View\View;
use Livewire\Component;

class Impact extends Component
{
    public function render():View
    {
        $impacts=\App\Models\Impact::query()->get();
        return view('livewire.frmis.impact',[
            'impacts'=>$impacts
        ]);
    }
}
