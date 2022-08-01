<?php

namespace App\Http\Livewire\Frmis;


use App\Models\Cell;
use App\Models\Centrale;
use App\Models\District;
use App\Models\Imiryango;
use App\Models\Parish;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ImpactCreate extends Component
{
    public $selectedDistrict=[];
    public $selectedSector=[];
    public $sectors=[];

    public $selectedCell=[];
    public $cells=[];

    public $selectedParish=[];
    public $parishes=[];

    public $selectedCentrale=[];
    public $centrales=[];

    public $selectedImiryango=[];
    public $imiryangos=[];

    public $impactTitle, $impactDescription, $men,$women,$youths,$disability,$baseline,$totalBudget,$deadline;
    public $districts=[];

    protected $listeners = [
        'getSectorsByDistrictId' => 'getSectorsByDistrictId',
        'getCellsBySectorId' => 'getCellsBySectorId',
        'getParishesByDistrictId'=>'getParishesByDistrictId',
        'getCentralesByParishId'=>'getCentralesByParishId',
        'getImiryangosByCentraleId'=>'getImiryangosByCentraleId'
    ];

    public function mount(){
        $this->districts = District::select('id', 'district_name')
            ->get()
            ->toArray();
    }

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function render()
    {

        return view('livewire.frmis.impact-create',[
            'districts'=>District::all()
        ]);
    }

    public function getSectorsByDistrictId()
    {
        $this->sectors = Sector::select('id', 'sector_name', 'district_id')
            ->whereIn('district_id',$this->selectedDistrict)
            ->get()
            ->toArray();

//        $this->reset('areas', 'selectedZoneId');
    }


    public function getCellsBySectorId()
    {
        $this->cells = Cell::select('id', 'cell_name', 'sector_id')
            ->whereIn('sector_id',$this->selectedSector)
            ->get()
            ->toArray();
    }

    public function getParishesByDistrictId()
    {
        $this->parishes = Parish::select('id', 'parish_name', 'district_id')
            ->whereIn('district_id',$this->selectedDistrict)
            ->get()
            ->toArray();
    }

    public function getCentralesByParishId()
    {
        $this->centrales = Centrale::select('id', 'centrale_name', 'parish_id')
            ->whereIn('parish_id',$this->selectedParish)
            ->get()
            ->toArray();
    }

    public function getImiryangosByCentraleId()
    {
        $this->imiryangos = Imiryango::select('id', 'name', 'centrale_id')
            ->whereIn('centrale_id',$this->selectedCentrale)
            ->get()
            ->toArray();
    }



    public function shower(){
        \App\Models\Impact::create([
            'impact_name'=>$this->impactTitle,
            'impact_description'=>$this->impactDescription,
            'baseline'=>$this->baseline,
            'men'=>$this->men,
            'women'=>$this->women,
            'youth'=>$this->youths,
            'disabilities'=>$this->disability,
            'total_budget'=>$this->totalBudget,
            'deadline'=>$this->deadline,
            'user_id'=>Auth::id(),
            'department_id'=>1,
            'districts'=>$this->selectedDistrict,
            'sectors'=>$this->selectedSector,
            'cells'=>$this->selectedCell,
            'parishes'=>$this->selectedParish,
            'centrales'=>$this->selectedCentrale,
            'imiryango'=>$this->selectedImiryango,
        ]);
        dd('Tes');
    }


/*    public function updatedSelectedDistrict($district_id){
        $this->sectors=Sector::whereIn('district_id',$district_id)->get();
        $this->parishes=Parish::whereIn('district_id',$district_id)->get();
    }

    public function updatedSelectedParish($parish_id){
        $this->centrales=Centrale::whereIn('parish_id',$parish_id)->get();
    }


    public function updatedSelectedSector($sector_id){
        $this->cells=Cell::whereIn('sector_id',$sector_id)->get();
    }

    public function UpdatedSelectedCentrale($centrale_id){
        $this->imiryangos=Imiryango::whereIn('centrale_id',$centrale_id)->get();
    }*/


}
