<?php

namespace App\Http\Controllers;

use App\Models\Impact;
use App\Models\Milestone;
use Illuminate\Http\Request;

class ImpactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public $impactId;
    public function index()
    {
        return view('frmis.impacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frmis.impacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function show(Impact $impact)
    {
        $this->impactId=$impact->id;

        $milestones=Milestone::query()->whereHas('indicators.impacts', function ($query){
            $query->where('impacts.id',$this->impactId);
        })->get();

       return view('frmis.impacts.show',[
           'impact'=>$impact,
           'milestones'=>$milestones
           ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function edit(Impact $impact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impact $impact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Impact  $impact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impact $impact)
    {
        //
    }
}
