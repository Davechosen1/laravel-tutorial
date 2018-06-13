<?php

namespace App\Http\Controllers;

use App\LoanApplication;
use App\LoanProducts;
use App\Customer;
use Illuminate\Http\Request;

class LoanApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$loanapplication = LoanApplication::all();
        $loan_application = LoanApplication::with('customer')
            ->with('loan_products')
            ->get();
        return view('loans.loanapplicationslist',compact('loan_application'));
        //return LoanApplication::allLoanApplications();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $loanproducts = LoanProducts::all();
        $customers    = Customer::all();
        return view('loans.loanapplication',compact(['loanproducts','customers']));
        allLoanApplications();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(request(),[
            'loan_product_id' => 'required',
            'amount'          => 'required',
            'period'          => 'required',
            'date'            => 'required', 
            'customer_id'     => 'nullable',
            'loan_product_id' => 'nullable',
        ]);

        $loan_application = new LoanApplication;
        $loan_application->customer_id     = $request->customer_id;
        $loan_application->loan_product_id = $request->loan_product_id;
        $loan_application->amount          = $request->amount;
        $loan_application->period          = $request->period;
        $loan_application->date            = $request->date;

        if(!$loan_application->save()){
            session()->flash('message','Loan Application NOT Registered');
            return redirect('/loan-application/register');
        }
            session()->flash('message','Loan Application Succcessful');
            return redirect('/loan-application/register');
            //return view('loanproducts.loanproductsform');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function show(loan_application $loan_application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function edit(loan_application $loan_application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loan_application $loan_application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loan_application  $loan_application
     * @return \Illuminate\Http\Response
     */
    public function destroy(loan_application $loan_application)
    {
        return LoanApplication::destroy($loan_application);
    }
}
