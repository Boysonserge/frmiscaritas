<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\City;
use App\Models\District;
use App\Models\Sector;
use App\Models\Zone;
use Livewire\Component;

class ImpactTest extends Component
{
    public $cities = [], $zones = [], $areas = [];

    public $selectedCityId=[], $selectedZoneId, $selectedAreaId;

    protected $listeners = [
        'getZonesByCityId' => 'getZonesByCityId',
        'getAreasByZoneId' => 'getAreasByZoneId',
    ];

    public function mount()
    {
        $this->cities = District::select('id', 'district_name')
            ->get()
            ->toArray();
    }

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function render()
    {
        return view('livewire.impact-test', [
            'cities' => $this->cities,
        ]);
    }

    public function getZonesByCityId()
    {
        $this->zones = Sector::select('id', 'sector_name', 'district_id')
            ->whereIn('district_id',$this->selectedCityId)
            ->get()
            ->toArray();

        $this->reset('areas', 'selectedZoneId');
    }


    public function getAreasByZoneId()
    {
        $this->areas = Area::select('id', 'name', 'zone_id')
            ->whereZoneId($this->selectedZoneId)
            ->get()
            ->toArray();
    }

}
