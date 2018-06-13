<?php

namespace App\Http\Controllers;

use App\LoanProducts;
use App\Http\Requests\LoanProductRequest;

class LoanProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanproducts = LoanProducts::all();
        return view('loanproducts.loanproductslist',compact('loanproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loanproducts.loanproductsform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoanProductRequest $request)
    {
        
        $product = new LoanProducts;
        $product->product_name    = $request->product_name;
        $product->interest_method = $request->interest_method;
        $product->interest_rate   = $request->interest_rate;
        $product->penalty_rate    = $request->penalty_rate;
                    

                   // dd($product);
        if(!$product->save()){
            session()->flash('message','Loan Product NOT Registered');
            return redirect('/loan-products/register');
        }
            session()->flash('message','Customer Registered Succcessfully');
            return redirect('/loan-products/register');
            //return view('loanproducts.loanproductsform');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function show(loan_products $loan_products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function edit(loan_products $loan_products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loan_products $loan_products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loan_products  $loan_products
     * @return \Illuminate\Http\Response
     */
    public function destroy(loan_products $loan_products)
    {
       return LoanApplication::destroy($id);
    }
}
