<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Location;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LocationController extends Controller
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
    public function create($customer_id)
    {
        $customer = Customer::find($customer_id);
        $provincelist = Province::pluck('province_nameeng','province_id');
        return view('locations.create',compact('provincelist','customer'));
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
        $input['customer_id'] = $input['customer_id'];
        Location::create($input);
        return redirect("customers/".$input['customer_id']."");
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
    public function edit($location_id)
    {
        $location = Location::find($location_id);
        $provincelist = Province::pluck('province_nameeng','province_id');
        return view('locations.edit',compact('provincelist','location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $location_id)
    {
        $location = Location::findOrFail($location_id);
        $location->update($request->all());
        Session::flash('flash_message','Location Successfully Edit.');
        Session::flash('flash_type','info');
        return redirect("customers/".$request['customer_id']."");
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
