<?php

namespace App\Http\Controllers;

use App\Groupsale;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allsales = Sale::all();
        return view('sales.index',compact('allsales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupsalelist = Groupsale::pluck('groupsale_name','groupsale_id');
        return view('sales.create',compact('groupsalelist'));
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
        Sale::create($input);
        Session::flash('flash_message','Sale Successfully Added.');
        Session::flash('flash_type','success');
        return redirect('sales');
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
    public function edit($sale_id)
    {
        $sale = Sale::find($sale_id);
        $groupsalelist = Groupsale::pluck('groupsale_name','groupsale_id');
        return view('sales.edit',compact('sale','groupsalelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sale_id)
    {
        $sale = Sale::findOrFail($sale_id);
        $sale->update($request->all());
        return redirect('sales');
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
