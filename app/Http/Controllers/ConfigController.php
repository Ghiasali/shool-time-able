<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\PeriodSlot;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConfigsRequest;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $start_time= PeriodSlot::orderBy('start_time','asc')->pluck('start_time')->first();
        // $end_time= PeriodSlot::orderBy('end_time','desc')->pluck('end_time')->first();
        $configs=Config::first();
        return view('pages.configs',compact('configs'));
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
    public function store(StoreConfigsRequest $request)
    {
        $configs=Config::first();
        if($configs){
            $configs->update($request->only((new Config)->getFillable()));
        }else{
            Config::create($request->only((new Config)->getFillable()));
        }

       return redirect('/configs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    function edit_configs(){
        $configs=Config::first();
        return view('pages.edit-configs',compact('configs'));
    }
}
