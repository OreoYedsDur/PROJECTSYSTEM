<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groupsale;
use Illuminate\Support\Facades\Session;
class GroupsaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allgroupsales = Groupsale::all();
        return view('groupsales.index',compact('allgroupsales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupsales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Groupsale::create($input);
        Session::flash('flash_message','Groupsale Successfully Added.');
        Session::flash('flash_type','success');
        return redirect('groupsales');
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
    public function edit($groupsale_id)
    {
        $groupsale = Groupsale::find($groupsale_id);
        return view('groupsales.edit',compact('groupsale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $groupsale_id)
    {
        $groupsale = Groupsale::findOrFail($groupsale_id);
        $groupsale->update($request->all());
        return redirect('groupsales');
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
}
