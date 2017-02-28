<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Location;
use App\Package;
use App\Project;
use App\Service;
use App\Servicetypes;
use App\Speed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(15);
        return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($customer_id)
    {
        $servicetypelist = Servicetypes::pluck('servicetype_name','servicetype_id');
        $projectlist = Project::pluck('project_name','project_id');
        $packagelist = Package::pluck('package_name','package_id');
        $customer = Customer::find($customer_id);
        $speedlist = Speed::pluck('speed_name','speed_id');
        $locationlist = Location::where('customer_id',$customer_id)->pluck('location_des','location_id');
        return view('services.create',compact('servicetypelist','projectlist','packagelist','customer','speedlist','locationlist'));
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
        Service::create($input);
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
    public function edit($service_id)
    {
        $service = Service::find($service_id);
        $servicetypelist = Servicetypes::pluck('servicetype_name','servicetype_id');
        $projectlist = Project::pluck('project_name','project_id');
        $packagelist = Package::pluck('package_name','package_id');
        $speedlist = Speed::pluck('speed_name','speed_id');
        $locationlist = Location::where('customer_id',$service->customer->customer_id)->pluck('location_des','location_id');
        return view('services.edit',compact('service','servicetypelist','projectlist','packagelist','speedlist','locationlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id)
    {
        $service = Service::findOrFail($service_id);
        $service->update($request->all());
        Session::flash('flash_message','Service Successfully Edit.');
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
