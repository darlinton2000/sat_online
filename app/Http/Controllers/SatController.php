<?php

namespace App\Http\Controllers;

use App\Models\Sat;
use App\Models\User;
use Illuminate\Http\Request;

class SatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sat.sat_list', [
            'sats' => Sat::with('beneficiario')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sat.sat_form', [
            'users' => User::all()
        ]);
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
     * @param  \App\Models\Sat  $sat
     * @return \Illuminate\Http\Response
     */
    public function show(Sat $sat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sat  $sat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sat $sat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sat  $sat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sat $sat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sat  $sat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sat $sat)
    {
        //
    }
}
