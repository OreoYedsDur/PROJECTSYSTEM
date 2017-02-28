<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Location;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\EventDispatcher\Tests\Service;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcustomers = Customer::all();
        return view('customers.index',compact('allcustomers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salelist = Sale::pluck('sale_name','sale_id');
        return view('customers.create',compact('salelist'));
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
        Customer::create($input);
        Session::flash('flash_message','Customer Successfully Added.');
        Session::flash('flash_type','success');
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($customer_id)
    {
//        $services = \App\Service::where('customer_id','=',$customer_id)->get();
//        $locations = Location::where('customer_id','=',$customer_id)->get();
        $customer = Customer::find($customer_id);
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($customer_id)
    {
        $customer = Customer::find($customer_id);
        $salelist = Sale::pluck('sale_name','sale_id');
        return view('customers.edit',compact('customer','salelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customer_id)
    {
        $customer = Customer::findOrFail($customer_id);
        $customer->update($request->all());
        return redirect('customers');
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
