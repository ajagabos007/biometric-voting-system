<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConstituencyRequest;
use App\Http\Requests\UpdateConstituencyRequest;
use App\Models\Constituency;

class ConstituencyController extends Controller
{
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
     * @param  \App\Http\Requests\StoreConstituencyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConstituencyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Constituency  $constituency
     * @return \Illuminate\Http\Response
     */
    public function show(Constituency $constituency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Constituency  $constituency
     * @return \Illuminate\Http\Response
     */
    public function edit(Constituency $constituency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConstituencyRequest  $request
     * @param  \App\Models\Constituency  $constituency
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConstituencyRequest $request, Constituency $constituency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constituency  $constituency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constituency $constituency)
    {
        //
    }
}
