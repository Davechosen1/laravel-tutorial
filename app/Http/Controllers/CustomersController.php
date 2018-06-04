<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=customer::all();

        return view('customers.customerslist',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.customerform');
    }


    public function newlayout()
    {
        return view('customers.layout');
    }

   
    public function store(Request $request)
    {
        $this->validate(request(),[
            'first_name'    => 'required|max:100',
            'middle_name'   => 'nullable|max:100',
            'last_name'     => 'required|max:100',
            'address'       => 'required',
            'city'          => 'required',
            'state'         => 'nullable',
            'zip'           => 'nullable',
            'title'         => 'required|max:4',
            'phone_number'  => 'nullable',
            'email_address' => 'nullable',
            'website'       => 'nullable',   
        ]);

        $customer = new customer;
        $customer->first_name     = $request->first_name;
        $customer->middle_name    = $request->middle_name;
        $customer->last_name      = $request->last_name;
        $customer->address        = $request->address;
        $customer->city           = $request->city;
        $customer->state          = $request->state;
        $customer->zip            = $request->zip;
        $customer->title          = $request->title;
        $customer->phone_number   = $request->phone_number;
        $customer->email_address  = $request->email_address;
        $customer->website        = $request->website;
                
        if($customer->save())
        return redirect('/customers/register');
            //return view('customers.customerform');
       
    }

    
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
}
