<?php

namespace App\Http\Controllers;

use App\Models\PostoGrad;
use App\Models\User;
use Illuminate\Http\Request;

class PostoGradController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'abrev_posto_grad',
        'posto_grad',
        'soldo',
        'cota_parte',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'posto_grad_id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PostoGrad  $postoGrad
     * @return \Illuminate\Http\Response
     */
    public function show(PostoGrad $postoGrad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostoGrad  $postoGrad
     * @return \Illuminate\Http\Response
     */
    public function edit(PostoGrad $postoGrad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostoGrad  $postoGrad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostoGrad $postoGrad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostoGrad  $postoGrad
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostoGrad $postoGrad)
    {
        //
    }
}
