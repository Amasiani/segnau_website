<?php

namespace App\Http\Controllers;

use App\Models\Joinus;
use Illuminate\Http\Request;

class JoinusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show the joinus registration form
        return view('auth.register');
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
     * @param  \App\Models\Joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function show(Joinus $joinus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function edit(Joinus $joinus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joinus $joinus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joinus  $joinus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joinus $joinus)
    {
        //
    }
}
